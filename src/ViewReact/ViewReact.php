<?php

namespace Arryanggaputra;

use Arryanggaputra\ReactJS\ReactJS;

class ViewReact
{
    private $react;

    /**
     * Constructor
     * @param string $reactSource      Source code of ReactJS lib
     * @param string $componentsSource Source code of file with available components
     */
    public function __construct(ViewReactSource $reactSource)
    {
        if (!extension_loaded('v8js')) {
            throw new \Exception("Requires V8JS PHP extension: http://php.net/v8js", 1);
        }
        $this->react = new ReactJS($reactSource);
    }

    /**
     * Render a ReactJS component
     * @param  string $component Name of the component object
     * @param  array $props     Associative array of props of the component
     * @return string           HTML string from Rendered ReactJs component
     */
    public function render($component, array $props = [])
    {
        $markup = $this->react->setComponent($component, $props)->getMarkup();
        return $markup;
    }
}
