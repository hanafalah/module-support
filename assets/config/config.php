<?php

use Hanafalah\ModuleSupport\{
    Models as ModuleSupportModels,
    Commands as ModuleSupportCommands,
    Contracts
};

return [
    'app' => [
        'contracts' => [
        ],
    ],
    'commands'  => [
        ModuleSupportCommands\InstallMakeCommand::class
    ],
    'libs' => [
        'model' => 'Models',
        'contract' => 'Contracts',
        'schema' => 'Schemas'
    ],
    'database' => [
        'models' => [
        ]
    ]
];
