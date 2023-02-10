<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230210181742 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commentairenews (id INT AUTO_INCREMENT NOT NULL, newsid_id INT DEFAULT NULL, userid_id INT DEFAULT NULL, descrition VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_CBD9E7ACF7BC18C7 (newsid_id), UNIQUE INDEX UNIQ_CBD9E7AC58E0A285 (userid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commentairenews ADD CONSTRAINT FK_CBD9E7ACF7BC18C7 FOREIGN KEY (newsid_id) REFERENCES news (id)');
        $this->addSql('ALTER TABLE commentairenews ADD CONSTRAINT FK_CBD9E7AC58E0A285 FOREIGN KEY (userid_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentairenews DROP FOREIGN KEY FK_CBD9E7ACF7BC18C7');
        $this->addSql('ALTER TABLE commentairenews DROP FOREIGN KEY FK_CBD9E7AC58E0A285');
        $this->addSql('DROP TABLE commentairenews');
    }
}
