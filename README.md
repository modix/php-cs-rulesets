# Modix rulesets for php-cs-fixer

## Installation

Install the rulesets with composer

`composer require modix/php-cs-rulesets --dev`

## Configuration

create a `.php_cs` file in your project root and configure the paths for the Finder.

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
