<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230210173550 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reviewuserjeux ADD jeuxid_id INT DEFAULT NULL, ADD rating INT NOT NULL');
        $this->addSql('ALTER TABLE reviewuserjeux ADD CONSTRAINT FK_7E8E98F65708A821 FOREIGN KEY (jeuxid_id) REFERENCES jeux (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7E8E98F65708A821 ON reviewuserjeux (jeuxid_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reviewuserjeux DROP FOREIGN KEY FK_7E8E98F65708A821');
        $this->addSql('DROP INDEX UNIQ_7E8E98F65708A821 ON reviewuserjeux');
        $this->addSql('ALTER TABLE reviewuserjeux DROP jeuxid_id, DROP rating');
    }
}
