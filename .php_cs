<?php

use PhpCsFixer\Finder;
use PhpCsFixer\Config;

$finder = Finder::create()
                ->exclude('bootstrap')
                ->exclude('storage')
                ->exclude('vendor')
                ->in(getcwd())
                ->name('*.php')
                ->name('*.js')
                ->name('*.phpt')
                ->notName('*.blade.php')
                ->notName('_ide_helper.php')
                ->ignoreDotFiles(true)
                ->ignoreVCS(true);

$rules = [
    '@Symfony'               => true,
    'binary_operator_spaces' => [
        'operators' => [
           '=>' => 'align_single_space',
        ]
    ],
    'braces' => [
        'allow_single_line_closure' => true,
    ],
    'align_multiline_comment' => [
        'comment_type' => 'phpdocs_like',
    ],
    'no_empty_comment'                 => false,
    'no_extra_consecutive_blank_lines' => [
        'tokens' => [
            'curly_brace_block',
            'parenthesis_brace_block',
            'extra',
            'throw',
            'use',
        ],
    ],
    'linebreak_after_opening_tag' => true,
    'array_syntax' => ['syntax' => 'short'],
    'ordered_imports' => true,
    'list_syntax' => ['syntax' => 'short'],
    'combine_consecutive_issets' => true,
    'combine_consecutive_unsets' => true,
    // 'class_keyword_remove' => true,
    // 'phpdoc_order' => true,
    // 'new_with_braces' => false,
];

return Config::create()
             ->setFinder($finder)
             ->setRules($rules)
             ->setUsingCache(true);
