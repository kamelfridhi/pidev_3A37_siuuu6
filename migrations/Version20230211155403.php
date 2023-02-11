<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230211155403 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE historique_achat ADD id_gamer_id INT DEFAULT NULL, ADD idproduit_id INT DEFAULT NULL, DROP id_produit, DROP id_gamer');
        $this->addSql('ALTER TABLE historique_achat ADD CONSTRAINT FK_68295E257F984D83 FOREIGN KEY (id_gamer_id) REFERENCES gamer (id)');
        $this->addSql('ALTER TABLE historique_achat ADD CONSTRAINT FK_68295E25C29D63C1 FOREIGN KEY (idproduit_id) REFERENCES produit (id)');
        $this->addSql('CREATE INDEX IDX_68295E257F984D83 ON historique_achat (id_gamer_id)');
        $this->addSql('CREATE INDEX IDX_68295E25C29D63C1 ON historique_achat (idproduit_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE historique_achat DROP FOREIGN KEY FK_68295E257F984D83');
        $this->addSql('ALTER TABLE historique_achat DROP FOREIGN KEY FK_68295E25C29D63C1');
        $this->addSql('DROP INDEX IDX_68295E257F984D83 ON historique_achat');
        $this->addSql('DROP INDEX IDX_68295E25C29D63C1 ON historique_achat');
        $this->addSql('ALTER TABLE historique_achat ADD id_produit INT NOT NULL, ADD id_gamer INT NOT NULL, DROP id_gamer_id, DROP idproduit_id');
    }
}
