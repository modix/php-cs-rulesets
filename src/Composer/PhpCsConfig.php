<?php

namespace Modix\PhpCsRulesets\Composer;

use Composer\EventDispatcher\Event;

class PhpCsConfig
{
    public static function create(Event $event)
    {
        $vendorDir = $event->getComposer()->getConfig()->get('vendor-dir');
        $phpCsConfigPath = dirname($vendorDir).'/.php_cs';

        if (file_exists($phpCsConfigPath)) {
            return;
        }

        if (!$event->getIO()->askConfirmation("Do you want to create a default .php_cs? <fg=yellow>[y]</>")) {
            return;
        }

        $phpCsDistPath = dirname(__DIR__).'/Resources/.php_cs.dist';
        $event->getIO()->write(sprintf("<comment>creating new default .php_cs at %s</comment>", $phpCsConfigPath));
        copy($phpCsDistPath, $phpCsConfigPath);
    }
}
