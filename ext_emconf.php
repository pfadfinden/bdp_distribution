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
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'bdp_template' => '5.1.0-5.99.99'
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
    'version' => '1.0.0',
];
