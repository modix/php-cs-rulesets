# Modix rulesets for php-cs-fixer

## Installation

Install the rulesets with composer

`composer require modix/php-cs-rulesets --no-plugins --dev`

If you want to use GrumPHP, execute the following command.

`composer require phpro/grumphp-shim --no-plugins --dev` to install grump.

## Configuration

create a default `.php-cs-fixer.php` file in your project root by running the following command.

`cp ./vendor/modix/php-cs-rulesets/src/Resources/.php-cs-fixer.php.dist ./.php-cs-fixer.php`

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
$config->setCacheFile(__DIR__.'/.php-cs-fixer.cache');
$config
    ->setRiskyAllowed(false)
    ->setRules($modixSet->getRules())
    ->setFinder($finder)
;

return $config;
```

Adapt the finder to your needs and let your IDE to use this configuration.
