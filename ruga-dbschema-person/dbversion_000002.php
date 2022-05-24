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
    ADD COLUMN `familystatus` VARCHAR(2) NULL DEFAULT NULL AFTER `date_of_death`,
    ADD COLUMN `spouse` VARCHAR(190) NULL DEFAULT NULL AFTER `familystatus`;
SET FOREIGN_KEY_CHECKS = 1;

SQL;
