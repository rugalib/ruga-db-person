<?php

declare(strict_types=1);

namespace Ruga\Person;

use Ruga\Db\Schema\Updater;
use Ruga\Person\Container\PersonTableFactory;

class ConfigProvider
{
    public function __invoke()
    {
        return [
            'db' => [
                Updater::class => [
                    'components' => [
                        Person::class => [
                            Updater::CONF_REQUESTED_VERSION => 8,
                            Updater::CONF_SCHEMA_DIRECTORY => __DIR__ . '/../ruga-dbschema-person',
                        ]
                    ]
                ],
            ],
            'dependencies' => [
                'factories' => [
                    PersonTable::class => PersonTableFactory::class,
                ]
            ]
        ];
    }
}