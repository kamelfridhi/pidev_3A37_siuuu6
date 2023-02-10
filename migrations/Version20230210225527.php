<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230210225527 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE groupe_membre (id INT AUTO_INCREMENT NOT NULL, date_rejoindre DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8DFA7089AB');
        $this->addSql('DROP INDEX IDX_5A8A6C8DFA7089AB ON post');
        $this->addSql('ALTER TABLE post DROP id_groupe_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE groupe_membre');
        $this->addSql('ALTER TABLE post ADD id_groupe_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DFA7089AB FOREIGN KEY (id_groupe_id) REFERENCES groupe (id)');
        $this->addSql('CREATE INDEX IDX_5A8A6C8DFA7089AB ON post (id_groupe_id)');
    }
}
