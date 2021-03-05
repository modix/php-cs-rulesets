# Modix rulesets for php-cs-fixer

## Installation

Install the rulesets with composer

`composer require modix/php-cs-rulesets --dev`

If you want to use GrumPHP, execute the following two commands.

`COMPOSER=vendor/modix/php-cs-rulesets/composer.json composer modix-cs-configs` to add default .php_cs and grumphp.yml configuration files.

`composer require phpro/grumphp-shim --dev` to install grump and register the pre-commit-hook.

## Configuration

create a `.php_cs` file in your project root and configure the paths for the Finder and change the ruleset if required.

```php
<?php

require __DIR__.'/vendor/autoload.php';
$modixSet = new \Modix\RuleSet\Sets\ModixSet();

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/src')
    ->in(__DIR__.'/tests')
;

$config = new PhpCsFixer\Config();
$config
    ->setRiskyAllowed(false)
    ->setRules($modixSet->getRules())
    ->setFinder($finder)
;

return $config;
```
