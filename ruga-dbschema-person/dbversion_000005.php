<?php

declare(strict_types=1);

/**
 * @return string
 * @var \Ruga\Db\Schema\Resolver $resolver
 * @var string                   $comp_name
 */
$person = $resolver->getTableName(\Ruga\Person\PersonTable::class);

return <<<"SQL"

SET FOREIGN_KEY_CHECKS = 0;
ALTER TABLE `{$person}`
    ADD COLUMN `birth_place` VARCHAR(190) NULL DEFAULT NULL AFTER `date_of_birth`,
    ADD COLUMN `death_place` VARCHAR(190) NULL DEFAULT NULL AFTER `date_of_death`;
SET FOREIGN_KEY_CHECKS = 1;

SQL;
