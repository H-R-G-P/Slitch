<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210921192014 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE dictionary (id INT AUTO_INCREMENT NOT NULL, stuff_id INT NOT NULL, UNIQUE INDEX UNIQ_1FA0E526950A1740 (stuff_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pare_of_words (id INT AUTO_INCREMENT NOT NULL, dictionary_id INT NOT NULL, original VARCHAR(25) NOT NULL, translation VARCHAR(50) DEFAULT NULL, INDEX IDX_913628BBAF5E5B3C (dictionary_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8MB4 COLLATE `UTF8MB4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE dictionary ADD CONSTRAINT FK_1FA0E526950A1740 FOREIGN KEY (stuff_id) REFERENCES stuff (id)');
        $this->addSql('ALTER TABLE pare_of_words ADD CONSTRAINT FK_913628BBAF5E5B3C FOREIGN KEY (dictionary_id) REFERENCES dictionary (id)');
        $this->addSql('ALTER TABLE learned_words CHANGE id_language id_language INT DEFAULT NULL');
        $this->addSql('ALTER TABLE stuff CHANGE type_id type_id INT DEFAULT NULL, CHANGE language_id language_id INT DEFAULT NULL, CHANGE user_id user_id INT DEFAULT NULL, CHANGE words words MEDIUMTEXT NOT NULL COMMENT \'Words separated by spaces\'');
        $this->addSql('ALTER TABLE untranslatable_words CHANGE id_language id_language INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pare_of_words DROP FOREIGN KEY FK_913628BBAF5E5B3C');
        $this->addSql('DROP TABLE dictionary');
        $this->addSql('DROP TABLE pare_of_words');
        $this->addSql('ALTER TABLE learned_words CHANGE id_language id_language INT NOT NULL');
        $this->addSql('ALTER TABLE stuff CHANGE language_id language_id INT NOT NULL, CHANGE type_id type_id INT NOT NULL, CHANGE user_id user_id INT NOT NULL, CHANGE words words MEDIUMTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci` COMMENT \'Words (can include lower and upper cases) separated by spaces\'');
        $this->addSql('ALTER TABLE untranslatable_words CHANGE id_language id_language INT NOT NULL');
    }
}
