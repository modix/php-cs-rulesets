<?php

namespace Modix\PhpCsRulesets\Composer;

use Composer\EventDispatcher\Event;

class GrumpConfig
{
    public static function create(Event $event)
    {
        $vendorDir = $event->getComposer()->getConfig()->get('vendor-dir');
        $grumpConfigPath = dirname($vendorDir).'/grumphp.yml';

        if (file_exists($grumpConfigPath)) {
            return;
        }

        if (!$event->getIO()->askConfirmation("Do you want to create a default grumphp.yml? <fg=yellow>[y]</>")) {
            return;
        }

        $grumpDistPath = dirname(__DIR__).'/Resources/grumphp.yml.dist';
        $event->getIO()->write(sprintf("<comment>creating new default grumphp.yml at %s</comment>", $grumpConfigPath));
        copy($grumpDistPath, $grumpConfigPath);
    }
}
