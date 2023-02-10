<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230210171608 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reviewuserjeux DROP FOREIGN KEY FK_7E8E98F6A76ED395');
        $this->addSql('ALTER TABLE reviewuserjeux DROP FOREIGN KEY FK_7E8E98F6EC2AA9D2');
        $this->addSql('DROP INDEX IDX_7E8E98F6EC2AA9D2 ON reviewuserjeux');
        $this->addSql('DROP INDEX IDX_7E8E98F6A76ED395 ON reviewuserjeux');
        $this->addSql('ALTER TABLE reviewuserjeux ADD id INT AUTO_INCREMENT NOT NULL, ADD userid INT NOT NULL, ADD jeuxid INT NOT NULL, ADD rating INT NOT NULL, DROP user_id, DROP jeux_id, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reviewuserjeux MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON reviewuserjeux');
        $this->addSql('ALTER TABLE reviewuserjeux ADD user_id INT NOT NULL, ADD jeux_id INT NOT NULL, DROP id, DROP userid, DROP jeuxid, DROP rating');
        $this->addSql('ALTER TABLE reviewuserjeux ADD CONSTRAINT FK_7E8E98F6A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reviewuserjeux ADD CONSTRAINT FK_7E8E98F6EC2AA9D2 FOREIGN KEY (jeux_id) REFERENCES jeux (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_7E8E98F6EC2AA9D2 ON reviewuserjeux (jeux_id)');
        $this->addSql('CREATE INDEX IDX_7E8E98F6A76ED395 ON reviewuserjeux (user_id)');
        $this->addSql('ALTER TABLE reviewuserjeux ADD PRIMARY KEY (user_id, jeux_id)');
    }
}
