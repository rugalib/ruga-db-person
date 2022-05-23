<?php

declare(strict_types=1);

namespace Ruga\Person;

use Ruga\Db\Row\AbstractRugaRow;
use Ruga\Db\Row\Feature\FullnameFeatureRowInterface;

/**
 * Abstract person.
 *
 * @see      Person
 * @author   Roland Rusch, easy-smart solution GmbH <roland.rusch@easy-smart.ch>
 */
abstract class AbstractPerson extends AbstractRugaRow implements PersonInterface, FullnameFeatureRowInterface
{
    /**
     * Constructs a display name from the given fields.
     * Fullname is saved in the row to speed up queries.
     *
     * @return string
     */
    public function getFullname(): string
    {
        return implode(' ', array_filter([$this->first_name, $this->last_name]));
    }
    
}
