<?php

$EM_CONF['aws_tools'] = [
    'title' => 'Amazon Web Services (AWS) Toolbox',
    'description' => 'This extension connects your TYPO3 instance to Amazon CloudFront. It rewrites all file paths in the frontend to match your CDN domain. You also have the possibility to invalidate Amazon CloudFront entries.',
    'version' => '1.0.5',
    'category' => 'misc',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'state' => 'stable',
    'uploadfolder' => false,
    'clearCacheOnLoad' => false,
    'author' => 'Florian Wessels',
    'author_email' => 'dev@Leuchtfeuer.com',
    'author_company' => 'Leuchtfeuer Digital Marketing',
    'autoload' => [
        'psr-4' => [
            'Leuchtfeuer\\AwsTools\\' => 'Classes',
        ],
    ],
];
