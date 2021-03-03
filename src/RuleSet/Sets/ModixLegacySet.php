<?php

namespace Modix\RuleSet\Sets;

use PhpCsFixer\RuleSet\AbstractRuleSetDescription;

final class ModixLegacySet extends AbstractRuleSetDescription
{
    public function getRules()
    {
        return [
            '@PSR2' => true,
        ];
    }

    public function getDescription()
    {
        return 'Reduced rules that follow Modix standard for legacy projects.';
    }
}
