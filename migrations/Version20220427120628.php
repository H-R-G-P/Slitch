<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220427120628 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pair_of_words (id INT AUTO_INCREMENT NOT NULL, stuff_id INT DEFAULT NULL, original VARCHAR(25) NOT NULL, translation VARCHAR(50) DEFAULT NULL, INDEX IDX_D993F1A5950A1740 (stuff_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pair_of_words ADD CONSTRAINT FK_D993F1A5950A1740 FOREIGN KEY (stuff_id) REFERENCES stuff (id)');
        $this->addSql('DROP TABLE pare_of_words');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pare_of_words (id INT AUTO_INCREMENT NOT NULL, stuff_id INT DEFAULT NULL, original VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, translation VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_913628BB950A1740 (stuff_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE pare_of_words ADD CONSTRAINT FK_913628BB950A1740 FOREIGN KEY (stuff_id) REFERENCES stuff (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('DROP TABLE pair_of_words');
    }
}
