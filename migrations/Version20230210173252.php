<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230210173252 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reviewuserjeux ADD userid_id INT DEFAULT NULL, DROP userid, DROP jeuxid, DROP rating');
        $this->addSql('ALTER TABLE reviewuserjeux ADD CONSTRAINT FK_7E8E98F658E0A285 FOREIGN KEY (userid_id) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7E8E98F658E0A285 ON reviewuserjeux (userid_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reviewuserjeux DROP FOREIGN KEY FK_7E8E98F658E0A285');
        $this->addSql('DROP INDEX UNIQ_7E8E98F658E0A285 ON reviewuserjeux');
        $this->addSql('ALTER TABLE reviewuserjeux ADD userid INT NOT NULL, ADD jeuxid INT NOT NULL, ADD rating INT NOT NULL, DROP userid_id');
    }
}
