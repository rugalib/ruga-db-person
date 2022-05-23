<?php

declare(strict_types=1);

namespace Ruga\Person\Container;

use Psr\Container\ContainerInterface;
use Ruga\Db\Adapter\Adapter;
use Ruga\Person\AbstractPersonTable;
use Ruga\Person\PersonTable;

class PersonTableFactory
{
    public function __invoke(ContainerInterface $container): AbstractPersonTable
    {
        return new PersonTable($container->get(Adapter::class));
    }
}