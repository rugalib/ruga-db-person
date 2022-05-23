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
    ADD COLUMN `religion` INT NULL DEFAULT NULL AFTER `migrationid_until`,
    ADD COLUMN `denomination` INT NULL DEFAULT NULL AFTER `religion`;
SET FOREIGN_KEY_CHECKS = 1;

SQL;
