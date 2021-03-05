# Modix rulesets for php-cs-fixer

## Installation

Add the repository to your `composer.json`

```json5
{
  // ...
  "repositories": [
    {
      "type": "vcs",
      "url": "git@github.com:Modix/php-cs-rulesets.git"
    }
  ],
  // ...
}
```

Install the rulesets with composer

`composer require modix/php-cs-rulesets --dev`

If you want to use GrumPHP, execute the following two commands.

`composer require phpro/grumphp-shim --no-plugins` to install grump without creating a gumphp.yml file

`composer modix-cs-configs` to add default .php_cs and grumphp.yml configuration files.

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
    ->setRiskyAllowed(true)
    ->setRules($modixSet->getRules())
    ->setFinder($finder)
;

return $config;
```
