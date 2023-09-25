<?php
/*
 * SPDX-FileCopyrightText: 2023 Roland Rusch, easy-smart solution GmbH <roland.rusch@easy-smart.ch>
 * SPDX-License-Identifier: AGPL-3.0-only
 */

declare(strict_types=1);

namespace Ruga\Person;

use Ruga\Db\Row\RowAttributesInterface;

/**
 * Interface PersonAttributesInterface
 *
 * @property string             $salutation Salutation
 * @property string             $first_name First name
 * @property string             $title
 * @property string             $honorific_prefix
 * @property string             $last_name
 * @property string             $honorific_suffix
 * @property string             $middle_name
 * @property string             $birth_name
 * @property string             $religious_name
 * @property string             $nick_name
 * @property string             $gender
 * @property string             $nationality
 * @property string             $citizenship
 * @property string             $migrationid
 * @property \DateTimeImmutable migrationid_until
 * @property int                $religion
 * @property int                $denomination
 * @property string             $language
 * @property \DateTimeImmutable $birth_date
 * @property \DateTimeImmutable $death_date
 * @property string             $birth_place
 * @property string             $death_place
 * @property string             $familystatus
 * @property string             $spouse
 * @property float              $height
 * @property string             $remark
 *
 */
interface PersonAttributesInterface extends RowAttributesInterface
{
    
}
