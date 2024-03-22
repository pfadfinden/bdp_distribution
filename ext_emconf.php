<?php

/**
 * Extension Manager/Repository config file for ext "bdp_distribution".
 */
$EM_CONF['bdp_distribution'] = [
    'title' => 'BdP Distribution ',
    'description' => '',
    'category' => 'distribution',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'bdp_template' => '6.0.1-6.99.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Pfadfinden\\BdpDistribution\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'author' => 'Christian Schrebe',
    'author_email' => 'christian.schrebe@pfadfinden.de',
    'author_company' => 'Pfadfinden',
    'version' => '2.0.0',
];
