<?php

namespace QPautrat\ReactjsPhpBundle\Templating\Helper;

use Symfony\Component\Templating\Helper\Helper;

use QPautrat\ReactJsPhpBundle\ReactJS;

/**
 * @author Quentin Pautrat <quentin.pautrat@gmail.com>
 */
class ReactJSHelper extends Helper
{
    /**
     * @var ReactJS
     */
    protected $reactJs;

    public function __construct(ReactJS $reactJs)
    {
        $this->reactJs = $reactJs;
    }

    /**
     * Render markup of given component.
     *
     * @param  string $component Component name
     * @param  array  $props     Optional. Array of properties
     *
     * @return string Markup
     */
    public function renderMarkup($component, $props = null)
    {
        return $this->reactJs
            ->setComponent($component, $props)
            ->getMarkup()
        ;
    }

    /**
     * Render javascript of given component
     *
     * @param  string $component Component name
     * @param  string $element   DOM element where to render component
     * @param  array  $props     Optional. Array of properties
     * @param  string $variable  Optional. Name of variable on return
     *
     * @return string Javascript
     */
    public function renderJS($component, $element, $props = null, $variable = null)
    {
        return $this->reactJs
            ->setComponent($component, $props)
            ->getJS($element, $variable)
        ;
    }

    public function getName()
    {
        return 'reactjs';
    }
}