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
ALTER TABLE `{$person}` ADD COLUMN `Tenant_id` INT NULL DEFAULT NULL AFTER `height`;
ALTER TABLE `{$person}` ADD INDEX `fk_{$person}_Tenant_id_idx` (`Tenant_id`);
# ALTER TABLE `{$person}` ADD CONSTRAINT `fk_{$person}_Tenant_id` FOREIGN KEY (`Tenant_id`) REFERENCES `Tenant` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
SET FOREIGN_KEY_CHECKS = 1;

SQL;
