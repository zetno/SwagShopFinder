<?php

declare(strict_types=1);

namespace SwagShopFinder\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1693141763 extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1693141763;
    }

    public function update(Connection $connection): void
    {
        $sql = <<<SQL
CREATE TABLE `creativect_shopfinder` (
    `id` BINARY(16) NOT NULL,
    `active` TINYINT(1) NULL DEFAULT '0',
    `name` VARCHAR(255) NOT NULL,
    `street` VARCHAR(255) NOT NULL,
    `post_code` VARCHAR(255) NOT NULL,
    `city` VARCHAR(255) NOT NULL,
    `url` VARCHAR(255) NULL,
    `telephone` VARCHAR(255) NULL,
    `open_times` VARCHAR(255) NULL,
    `country_id` BINARY(16) NULL,
    `created_at` DATETIME(3) NOT NULL,
    `updated_at` DATETIME(3) NULL,
    PRIMARY KEY (`id`),
    KEY `fk.creativect_shopfinder.country_id` (`country_id`),
    CONSTRAINT `fk.creativect_shopfinder.country_id` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
SQL;

        $connection->executeStatement($sql);
    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }
}
