<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220427113323 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_913628BBAF5E5B3C ON pare_of_words');
        $this->addSql('ALTER TABLE pare_of_words ADD stuff_id INT DEFAULT NULL, DROP dictionary_id');
        $this->addSql('ALTER TABLE pare_of_words ADD CONSTRAINT FK_913628BB950A1740 FOREIGN KEY (stuff_id) REFERENCES stuff (id)');
        $this->addSql('CREATE INDEX IDX_913628BB950A1740 ON pare_of_words (stuff_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pare_of_words DROP FOREIGN KEY FK_913628BB950A1740');
        $this->addSql('DROP INDEX IDX_913628BB950A1740 ON pare_of_words');
        $this->addSql('ALTER TABLE pare_of_words ADD dictionary_id INT NOT NULL, DROP stuff_id');
        $this->addSql('CREATE INDEX IDX_913628BBAF5E5B3C ON pare_of_words (dictionary_id)');
    }
}
