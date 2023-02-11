<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230211183106 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE groupe_membre ADD id_groupe_id INT DEFAULT NULL, ADD id_gamer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE groupe_membre ADD CONSTRAINT FK_9D8A0713FA7089AB FOREIGN KEY (id_groupe_id) REFERENCES groupe (id)');
        $this->addSql('ALTER TABLE groupe_membre ADD CONSTRAINT FK_9D8A07137F984D83 FOREIGN KEY (id_gamer_id) REFERENCES gamer (id)');
        $this->addSql('CREATE INDEX IDX_9D8A0713FA7089AB ON groupe_membre (id_groupe_id)');
        $this->addSql('CREATE INDEX IDX_9D8A07137F984D83 ON groupe_membre (id_gamer_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE groupe_membre DROP FOREIGN KEY FK_9D8A0713FA7089AB');
        $this->addSql('ALTER TABLE groupe_membre DROP FOREIGN KEY FK_9D8A07137F984D83');
        $this->addSql('DROP INDEX IDX_9D8A0713FA7089AB ON groupe_membre');
        $this->addSql('DROP INDEX IDX_9D8A07137F984D83 ON groupe_membre');
        $this->addSql('ALTER TABLE groupe_membre DROP id_groupe_id, DROP id_gamer_id');
    }
}
