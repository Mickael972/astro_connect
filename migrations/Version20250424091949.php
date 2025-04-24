<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250424091949 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, event_date DATETIME NOT NULL, location VARCHAR(255) NOT NULL, visibility_info LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE sky_mapcache (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, date DATE NOT NULL, json_data LONGTEXT NOT NULL, INDEX IDX_162BC7E2A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sky_mapcache ADD CONSTRAINT FK_162BC7E2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE sky_mapcache DROP FOREIGN KEY FK_162BC7E2A76ED395
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE event
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE sky_mapcache
        SQL);
    }
}
