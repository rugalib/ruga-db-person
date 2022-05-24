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
    CHANGE COLUMN `date_of_birth` `birth_date` DATE NULL DEFAULT NULL AFTER `language`,
    CHANGE COLUMN `date_of_death` `death_date` DATE NULL DEFAULT NULL AFTER `birth_date`,
    CHANGE COLUMN `prefix` `honorific_prefix` VARCHAR(190) NULL DEFAULT NULL AFTER `title`,
    ADD COLUMN `honorific_suffix` VARCHAR(190) NULL DEFAULT NULL AFTER `last_name`,
    CHANGE COLUMN `nickname` `nick_name` VARCHAR(190) NULL DEFAULT NULL AFTER `religious_name`,
    ADD COLUMN `height` DECIMAL(3,2) NULL DEFAULT NULL AFTER `spouse`;
SET FOREIGN_KEY_CHECKS = 1;

SQL;
