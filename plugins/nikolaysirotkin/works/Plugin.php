<?php

namespace NikolaySirotkin\Works;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Nikolaysirotkin\Works\Components\Filterworks' => 'filterworks',
        ];
    }

    public function registerSettings()
    {
    }
}
