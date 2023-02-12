<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230212003145 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE classement (id INT AUTO_INCREMENT NOT NULL, idtournoi_id INT DEFAULT NULL, idteam_id INT DEFAULT NULL, score DOUBLE PRECISION NOT NULL, INDEX IDX_55EE9D6D3BAE6A30 (idtournoi_id), INDEX IDX_55EE9D6DF6688AC0 (idteam_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE member (id INT AUTO_INCREMENT NOT NULL, idteam_id INT DEFAULT NULL, idgamer_id INT DEFAULT NULL, points INT NOT NULL, INDEX IDX_70E4FA78F6688AC0 (idteam_id), INDEX IDX_70E4FA788596E91B (idgamer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE membre (id INT AUTO_INCREMENT NOT NULL, id_gamer INT NOT NULL, id_team INT NOT NULL, point INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE planning (id INT AUTO_INCREMENT NOT NULL, id_gamer_id INT DEFAULT NULL, id_coach_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, date DATETIME NOT NULL, description VARCHAR(255) NOT NULL, url_meet VARCHAR(255) DEFAULT NULL, etat TINYINT(1) NOT NULL, nbre_heure_seance INT NOT NULL, prix_heure INT DEFAULT NULL, INDEX IDX_D499BFF67F984D83 (id_gamer_id), INDEX IDX_D499BFF66CCBBA04 (id_coach_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_courses (id INT AUTO_INCREMENT NOT NULL, id_gamer_id INT DEFAULT NULL, id_cours_id INT DEFAULT NULL, favori TINYINT(1) NOT NULL, acheter TINYINT(1) NOT NULL, description VARCHAR(255) DEFAULT NULL, review INT DEFAULT NULL, INDEX IDX_F1A844467F984D83 (id_gamer_id), INDEX IDX_F1A844462E149425 (id_cours_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE classement ADD CONSTRAINT FK_55EE9D6D3BAE6A30 FOREIGN KEY (idtournoi_id) REFERENCES tournoi (id)');
        $this->addSql('ALTER TABLE classement ADD CONSTRAINT FK_55EE9D6DF6688AC0 FOREIGN KEY (idteam_id) REFERENCES team (id)');
        $this->addSql('ALTER TABLE member ADD CONSTRAINT FK_70E4FA78F6688AC0 FOREIGN KEY (idteam_id) REFERENCES team (id)');
        $this->addSql('ALTER TABLE member ADD CONSTRAINT FK_70E4FA788596E91B FOREIGN KEY (idgamer_id) REFERENCES gamer (id)');
        $this->addSql('ALTER TABLE planning ADD CONSTRAINT FK_D499BFF67F984D83 FOREIGN KEY (id_gamer_id) REFERENCES gamer (id)');
        $this->addSql('ALTER TABLE planning ADD CONSTRAINT FK_D499BFF66CCBBA04 FOREIGN KEY (id_coach_id) REFERENCES coach (id)');
        $this->addSql('ALTER TABLE user_courses ADD CONSTRAINT FK_F1A844467F984D83 FOREIGN KEY (id_gamer_id) REFERENCES gamer (id)');
        $this->addSql('ALTER TABLE user_courses ADD CONSTRAINT FK_F1A844462E149425 FOREIGN KEY (id_cours_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE categorie CHANGE libelle type VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE coach ADD cv VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE cours ADD id_coach_id INT DEFAULT NULL, ADD niveau VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C6CCBBA04 FOREIGN KEY (id_coach_id) REFERENCES coach (id)');
        $this->addSql('CREATE INDEX IDX_FDCA8C9C6CCBBA04 ON cours (id_coach_id)');
        $this->addSql('ALTER TABLE groupe_membre ADD id_groupe_id INT DEFAULT NULL, ADD id_gamer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE groupe_membre ADD CONSTRAINT FK_9D8A0713FA7089AB FOREIGN KEY (id_groupe_id) REFERENCES groupe (id)');
        $this->addSql('ALTER TABLE groupe_membre ADD CONSTRAINT FK_9D8A07137F984D83 FOREIGN KEY (id_gamer_id) REFERENCES gamer (id)');
        $this->addSql('CREATE INDEX IDX_9D8A0713FA7089AB ON groupe_membre (id_groupe_id)');
        $this->addSql('CREATE INDEX IDX_9D8A07137F984D83 ON groupe_membre (id_gamer_id)');
        $this->addSql('ALTER TABLE historique_achat ADD id_gamer_id INT DEFAULT NULL, ADD idproduit_id INT DEFAULT NULL, ADD reference VARCHAR(255) NOT NULL, DROP id_produit, DROP id_gamer');
        $this->addSql('ALTER TABLE historique_achat ADD CONSTRAINT FK_68295E257F984D83 FOREIGN KEY (id_gamer_id) REFERENCES gamer (id)');
        $this->addSql('ALTER TABLE historique_achat ADD CONSTRAINT FK_68295E25C29D63C1 FOREIGN KEY (idproduit_id) REFERENCES produit (id)');
        $this->addSql('CREATE INDEX IDX_68295E257F984D83 ON historique_achat (id_gamer_id)');
        $this->addSql('CREATE INDEX IDX_68295E25C29D63C1 ON historique_achat (idproduit_id)');
        $this->addSql('ALTER TABLE post ADD id_groupe_id INT DEFAULT NULL, DROP idgroupe');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8DFA7089AB FOREIGN KEY (id_groupe_id) REFERENCES groupe (id)');
        $this->addSql('CREATE INDEX IDX_5A8A6C8DFA7089AB ON post (id_groupe_id)');
        $this->addSql('ALTER TABLE produit ADD id_categorie_id INT DEFAULT NULL, ADD nom INT NOT NULL, DROP reference, DROP id_categorie');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC279F34925F FOREIGN KEY (id_categorie_id) REFERENCES categorie (id)');
        $this->addSql('CREATE INDEX IDX_29A5EC279F34925F ON produit (id_categorie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classement DROP FOREIGN KEY FK_55EE9D6D3BAE6A30');
        $this->addSql('ALTER TABLE classement DROP FOREIGN KEY FK_55EE9D6DF6688AC0');
        $this->addSql('ALTER TABLE member DROP FOREIGN KEY FK_70E4FA78F6688AC0');
        $this->addSql('ALTER TABLE member DROP FOREIGN KEY FK_70E4FA788596E91B');
        $this->addSql('ALTER TABLE planning DROP FOREIGN KEY FK_D499BFF67F984D83');
        $this->addSql('ALTER TABLE planning DROP FOREIGN KEY FK_D499BFF66CCBBA04');
        $this->addSql('ALTER TABLE user_courses DROP FOREIGN KEY FK_F1A844467F984D83');
        $this->addSql('ALTER TABLE user_courses DROP FOREIGN KEY FK_F1A844462E149425');
        $this->addSql('DROP TABLE classement');
        $this->addSql('DROP TABLE member');
        $this->addSql('DROP TABLE membre');
        $this->addSql('DROP TABLE planning');
        $this->addSql('DROP TABLE user_courses');
        $this->addSql('ALTER TABLE categorie CHANGE type libelle VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE coach DROP cv');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C6CCBBA04');
        $this->addSql('DROP INDEX IDX_FDCA8C9C6CCBBA04 ON cours');
        $this->addSql('ALTER TABLE cours DROP id_coach_id, DROP niveau');
        $this->addSql('ALTER TABLE groupe_membre DROP FOREIGN KEY FK_9D8A0713FA7089AB');
        $this->addSql('ALTER TABLE groupe_membre DROP FOREIGN KEY FK_9D8A07137F984D83');
        $this->addSql('DROP INDEX IDX_9D8A0713FA7089AB ON groupe_membre');
        $this->addSql('DROP INDEX IDX_9D8A07137F984D83 ON groupe_membre');
        $this->addSql('ALTER TABLE groupe_membre DROP id_groupe_id, DROP id_gamer_id');
        $this->addSql('ALTER TABLE historique_achat DROP FOREIGN KEY FK_68295E257F984D83');
        $this->addSql('ALTER TABLE historique_achat DROP FOREIGN KEY FK_68295E25C29D63C1');
        $this->addSql('DROP INDEX IDX_68295E257F984D83 ON historique_achat');
        $this->addSql('DROP INDEX IDX_68295E25C29D63C1 ON historique_achat');
        $this->addSql('ALTER TABLE historique_achat ADD id_produit INT NOT NULL, ADD id_gamer INT NOT NULL, DROP id_gamer_id, DROP idproduit_id, DROP reference');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8DFA7089AB');
        $this->addSql('DROP INDEX IDX_5A8A6C8DFA7089AB ON post');
        $this->addSql('ALTER TABLE post ADD idgroupe INT NOT NULL, DROP id_groupe_id');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC279F34925F');
        $this->addSql('DROP INDEX IDX_29A5EC279F34925F ON produit');
        $this->addSql('ALTER TABLE produit ADD id_categorie INT NOT NULL, DROP id_categorie_id, CHANGE nom reference INT NOT NULL');
    }
}
