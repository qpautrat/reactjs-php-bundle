<?php

namespace QPautrat\ReactjsPhpBundle\Twig\Extension;

use QPautrat\ReactjsPhpBundle\Templating\Helper\ReactJSHelper;

/**
 * @author Quentin Pautrat <quentin.pautrat@gmail.com>
 */
class ReactJSExtension extends \Twig_Extension
{
    /**
     * @var ReactJSHelper
     */
    protected $helper;

    public function __construct(ReactJSHelper $helper)
    {
        $this->helper = $helper;
    }

    public function getFilters()
    {
        return array(
            'reactjs_render_markup' => new \Twig_Filter_Method($this, 'renderMarkup', array('is_safe' => array('html'))),
            'reactjs_render_js' => new \Twig_Filter_Method($this, 'renderJS', array('is_safe' => array('html')))
        );
    }

    public function renderMarkup($component, $props = null)
    {
        return $this->helper->renderMarkup($component, $props);
    }

    public function renderJS($component, $element, $props = null, $variable = null)
    {
        return $this->helper->renderJS($component, $element, $props, $variable);
    }

    public function getName()
    {
        return 'reactjs';
    }
}