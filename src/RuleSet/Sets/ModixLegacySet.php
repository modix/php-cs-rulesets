<?php

namespace Modix\PhpCsRulesets\RuleSet\Sets;

use PhpCsFixer\RuleSet\AbstractRuleSetDescription;

final class ModixLegacySet extends AbstractRuleSetDescription
{
    public function getRules(): array
    {
        return [
            // https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/2.18/src/RuleSet/Sets/PSR1Set.php
            '@PSR1' => true,
            /**
             * @PSR2
             * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/2.18/src/RuleSet/Sets/PSR2Set.php
             */
            'blank_line_after_namespace' => true,
            'elseif' => true,
            'function_declaration' => true,
            'indentation_type' => true,
            'line_ending' => true,
            'lowercase_constants' => true,
            'lowercase_keywords' => true,
            'no_break_comment' => true,
            'no_closing_tag' => true,
            'no_spaces_after_function_name' => true,
            'no_spaces_inside_parenthesis' => true,
            'no_trailing_whitespace' => true,
            'no_trailing_whitespace_in_comment' => true,
            'single_blank_line_at_eof' => true,
            'single_class_element_per_statement' => ['elements' => ['property']],
            'single_import_per_statement' => true,
            'single_line_after_imports' => true,
            'switch_case_semicolon_to_colon' => true,
            'switch_case_space' => true,
            'visibility_required' => true,
            /**
             * @Symfony
             * @see https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/2.18/src/RuleSet/Sets/SymfonySet.php
             */
            //        'binary_operator_spaces' => true,
            //        'blank_line_after_opening_tag' => true,
            //        'braces' => [
            //            'allow_single_line_closure' => true,
            //        ],
            'cast_spaces' => true,
            'class_attributes_separation' => ['elements' => ['method']],
            'class_definition' => ['singleLine' => true],
            'declare_equal_normalize' => true,
            'function_typehint_space' => true,
            'include' => true,
            //        'increment_style' => true,
            'lowercase_cast' => true,
            //        'magic_constant_casing' => true,
            //        'method_argument_space' => true,
            //        'native_function_casing' => true,
            //        'new_with_braces' => true,
            //        'no_blank_lines_after_class_opening' => true,
            //        'no_blank_lines_after_phpdoc' => true,
            //        'no_empty_comment' => true,
            //        'no_empty_phpdoc' => true,
            //        'no_empty_statement' => true,
            //        'no_extra_blank_lines' => ['tokens' => [
            //            'curly_brace_block',
            //            'extra',
            //            'parenthesis_brace_block',
            //            'square_brace_block',
            //            'throw',
            //            'use',
            //        ]],
            //        'no_leading_import_slash' => true,
            //        'no_leading_namespace_whitespace' => true,
            //        'no_mixed_echo_print' => ['use' => 'echo'],
            //        'no_multiline_whitespace_around_double_arrow' => true,
            //        'no_short_bool_cast' => true,
            //        'no_singleline_whitespace_before_semicolons' => true,
            //        'no_spaces_around_offset' => true,
            //        'no_trailing_comma_in_list_call' => true,
            //        'no_trailing_comma_in_singleline_array' => true,
            //        'no_unneeded_control_parentheses' => true,
            //        'no_unneeded_curly_braces' => true,
            //        'no_unneeded_final_method' => true,
            //        'no_unused_imports' => true,
            //        'no_whitespace_before_comma_in_array' => true,
            //        'no_whitespace_in_blank_line' => true,
            //        'normalize_index_brace' => true,
            //        'object_operator_without_whitespace' => true,
            //        'php_unit_fqcn_annotation' => true,
            //        'phpdoc_align' => [
            //            // @TODO: on 3.0 switch whole rule to `=> true`, currently we use custom config that will be default on 3.0
            //            'tags' => [
            //               'method',
            //               'param',
            //               'property',
            //               'return',
            //               'throws',
            //               'type',
            //               'var',
            //            ],
            //        ],
            //        'phpdoc_annotation_without_dot' => true,
            //        'phpdoc_indent' => true,
            //        'phpdoc_inline_tag' => true,
            //        'phpdoc_no_access' => true,
            //        'phpdoc_no_alias_tag' => true,
            //        'phpdoc_no_empty_return' => true,
            //        'phpdoc_no_package' => true,
            //        'phpdoc_no_useless_inheritdoc' => true,
            //        'phpdoc_return_self_reference' => true,
            //        'phpdoc_scalar' => true,
            //        'phpdoc_separation' => true,
            //        'phpdoc_single_line_var_spacing' => true,
            //        'phpdoc_to_comment' => true,
            //        'phpdoc_trim' => true,
            //        'phpdoc_types' => true,
            //        'phpdoc_var_without_name' => true,
            //        'protected_to_private' => true,
            //        'return_type_declaration' => true,
            //        'semicolon_after_instruction' => true,
            //        'short_scalar_cast' => true,
            //        'single_blank_line_before_namespace' => true,
            //        'single_class_element_per_statement' => true,
            //        'single_line_comment_style' => [
            //            'comment_types' => ['hash'],
            //        ],
            //        'single_quote' => true,
            //        'space_after_semicolon' => [
            //            'remove_in_empty_for_expressions' => true,
            //        ],
            //        'standardize_increment' => true,
            //        'standardize_not_equals' => true,
            //        'ternary_operator_spaces' => true,
            //        'trailing_comma_in_multiline_array' => true,
            //        'trim_array_spaces' => true,
            //        'unary_operator_spaces' => true,
            //        'whitespace_after_comma_in_array' => true,
            /**
             * Modix specific changes to inherited rules (e.g. from @Symfony)
             */
            //        'blank_line_before_statement' => [
            //            'statements' => ['return', 'yield'],
            //        ],
            //        'concat_space' => ['spacing' => 'one'],
            //        'phpdoc_summary' => false,
            //        'yoda_style' => false,
            /**
             * Modix custom rules that are not set by any inherited rule
             */
            //        'array_syntax' => ['syntax' => 'short'],
            //        'backtick_to_shell_exec' => true,
            //        'combine_consecutive_issets' => true,
            //        'explicit_string_variable' => true,
            //        'general_phpdoc_annotation_remove' => ['annotations' => [
            //            'author',
            //            'throws'
            //        ]],
            //        'linebreak_after_opening_tag' => true,
            //        'method_chaining_indentation' => true,
            //        'no_null_property_initialization' => true,
            //        'no_short_echo_tag' => true,
            //        'no_superfluous_elseif' => true,
            //        'no_useless_else' => true,
            //        'no_useless_return' => true,
            //        'ordered_imports' => true,
            //        'phpdoc_order' => true,
            //        'phpdoc_types_order' => true,
        ];
    }

    public function getDescription(): string
    {
        return 'Reduced rules that follow Modix standard for legacy projects.';
    }
}
