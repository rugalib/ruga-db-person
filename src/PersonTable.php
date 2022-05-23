<?php

declare(strict_types=1);

namespace Ruga\Person;

/**
 * The person table.
 *
 * @author   Roland Rusch, easy-smart solution GmbH <roland.rusch@easy-smart.ch>
 */
class PersonTable extends AbstractPersonTable
{
    const TABLENAME = 'Person';
    const PRIMARYKEY = ['id'];
//    const RESULTSETCLASS = ;
    const ROWCLASS = Person::class;
}
