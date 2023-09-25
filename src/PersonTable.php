<?php
/*
 * SPDX-FileCopyrightText: 2023 Roland Rusch, easy-smart solution GmbH <roland.rusch@easy-smart.ch>
 * SPDX-License-Identifier: AGPL-3.0-only
 */

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
