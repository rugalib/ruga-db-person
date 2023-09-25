<?php
/*
 * SPDX-FileCopyrightText: 2023 Roland Rusch, easy-smart solution GmbH <roland.rusch@easy-smart.ch>
 * SPDX-License-Identifier: AGPL-3.0-only
 */

declare(strict_types=1);

namespace Ruga\Person\Test;

use Laminas\ServiceManager\ServiceManager;

/**
 * @author                 Roland Rusch, easy-smart solution GmbH <roland.rusch@easy-smart.ch>
 */
class PersonTest extends \Ruga\Person\Test\PHPUnit\AbstractTestSetUp
{
    public function testCanCreatePerson(): void
    {
        $t = new \Ruga\Person\PersonTable($this->getAdapter());
        
        /** @var \Ruga\Person\Person $row */
        $row = $t->createRow();
        $this->assertInstanceOf(\Ruga\Person\Person::class, $row);
        $row->save();
    }
    
    
    
    public function testCanWritePerson()
    {
        $t = new \Ruga\Person\PersonTable($this->getAdapter());
        
        /** @var \Ruga\Person\Person $row */
        $row = $t->createRow();
        $first_name = 'Hans';
        $last_name = 'Müller';
        $row->first_name = $first_name;
        $row->last_name = $last_name;
        $this->assertSame($first_name, $row->first_name);
        $this->assertSame($last_name, $row->last_name);
        $this->assertSame("{$first_name} {$last_name}", $row->fullname);
        $row->save();
    }
    
    
    
    public function testCanReadPerson()
    {
        $t = new \Ruga\Person\PersonTable($this->getAdapter());
        /** @var \Ruga\Person\Person $row */
        $row = $t->createRow();
        $row->first_name = 'Hans';
        $row->last_name = 'Müller';
        $row->save();
        
        $row = $t->createRow();
        $row->first_name = 'Vreni';
        $row->last_name = 'Meier';
        $row->save();
        
        unset($row);
        $row = $t->findById(1)->current();
        $this->assertSame('Hans Müller', $row->fullname);
    }
    
}
