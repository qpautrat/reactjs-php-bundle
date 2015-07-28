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
}