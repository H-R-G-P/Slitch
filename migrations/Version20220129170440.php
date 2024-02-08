<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220129170440 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pare_of_words ADD dictionary_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pare_of_words ADD CONSTRAINT FK_913628BBAF5E5B3C FOREIGN KEY (dictionary_id) REFERENCES dictionary (id)');
        $this->addSql('CREATE INDEX IDX_913628BBAF5E5B3C ON pare_of_words (dictionary_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pare_of_words DROP FOREIGN KEY FK_913628BBAF5E5B3C');
        $this->addSql('DROP INDEX IDX_913628BBAF5E5B3C ON pare_of_words');
        $this->addSql('ALTER TABLE pare_of_words DROP dictionary_id');
    }
}
