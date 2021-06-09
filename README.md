# Modix rulesets for php-cs-fixer

## Installation

Install the rulesets with composer

`composer require modix/php-cs-rulesets --dev`

If you want to use GrumPHP, execute the following two commands.

`composer require phpro/grumphp-shim --no-plugins` to install grump without creating a gumphp.yml file

## Configuration

create a `.php-cs-fixer.php` file in your project root by running the following command:

`COMPOSER=vendor/modix/php-cs-rulesets/composer.json composer modix-cs-configs`

Alternatively you can create file yourself.

```php
<?php

require __DIR__.'/vendor/autoload.php';
$modixSet = new \Modix\PhpCsRulesets\RuleSet\Sets\ModixSet();

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
