<?php

return [
    'nav' => [
        'title' => 'Vote',

        'settings' => 'Settings',
        'sites' => 'Sites',
        'rewards' => 'Rewards',
        'votes' => 'Votes',
    ],

    'permission' => 'View and manage vote plugin',

    'settings' => [
        'title' => 'Vote page settings',

        'count' => 'Top Players Count',
        'display-rewards' => 'Show rewards in vote page',
    ],

    'sites' => [
        'title' => 'Sites',
        'title-edit' => 'Edit site :site',
        'title-create' => 'Create site',

        'enable' => 'Enable the site',

        'delay' => 'Delay between votes',
        'minutes' => 'minutes',

        'no-verification' => 'The votes on this website will not be verified.',
        'auto-verification' => 'The votes on this site will be automatically verified.',
        'key-verification' => 'The votes on this website will be verified when the input below is filled.',

        'verifications' => [
            'enable' => 'Enable votes verification',

            'server_id' => 'Server ID',
            'token' => 'Token',
            'api_key' => 'API key',
        ],

        'status' => [
            'created' => 'The site has been added.',
            'updated' => 'This site has been updated.',
            'deleted' => 'This site has been removed.',
        ],
    ],

    'rewards' => [
        'title' => 'Rewards',
        'title-edit' => 'Edit reward :reward',
        'title-create' => 'Create reward',

        'need-online' => 'The user must be online to receive the reward (only available with AzLink)',
        'enable' => 'Enable the reward',

        'commands-info' => 'You can use <code>{player}</code> to use the player name and <code>{reward}</code> to use the reward name. The command must not start with <code>/</code>',

        'status' => [
            'created' => 'The reward has been created.',
            'updated' => 'This reward has been updated.',
            'deleted' => 'This reward has been deleted.',
        ],
    ],

    'votes' => [
        'title' => 'Votes',

        'empty' => 'No votes this month.',

        'votes' => 'Votes count',

        'month' => 'Votes count this month',
        'week' => 'Votes count this week',
        'day' => 'Votes count today',
    ],
];
