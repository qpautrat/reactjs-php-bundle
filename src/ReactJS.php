<?php

namespace QPautrat\ReactjsPhpBundle;

use ReactJS as BaseReactJS;

/**
 * @author Quentin Pautrat <quentin.pautrat@gmail.com>
 */
class ReactJS extends BaseReactJS
{
    /**
     * Overwrite constructor due to avoid this kind of stuff in Extension: str_replace('%', '%%', $library_path)
     */
    public function __construct($libpath, $apppath)
    {
        parent::__construct(file_get_contents($libpath), file_get_contents($apppath));
    }

    /**
     * Shortcut. Set a component and render is markup.
     *
     * @param  string $component Component name
     * @param  array  $props     Array of properties
     *
     * @return string Markup
     */
    public function renderMarkup($component, $props = null)
    {
        return $this
            ->setComponent($component, $props)
            ->getMarkup()
        ;
    }

    /**
     * Shortcut. Set a component and render is javascript.
     *
     * @param  string $component Component name
     * @param  array  $props     Array of properties
     * @param  string $element   DOM element where to render component
     * @param  string $variable  Optional. Name of variable on return
     *
     * @return string Javascript
     */
    public function renderJS($component, $props = null, $element, $variable = null)
    {
        return $this
            ->setComponent($component, $props)
            ->getJS($element, $variable)
        ;
    }
}