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
    ADD COLUMN `migrationid` VARCHAR(10) NULL DEFAULT NULL AFTER `citizenship`,
    ADD COLUMN `migrationid_until` DATE NULL DEFAULT NULL AFTER `migrationid`;
SET FOREIGN_KEY_CHECKS = 1;

SQL;
