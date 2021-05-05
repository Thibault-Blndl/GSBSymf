<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210505121211 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fiche_frais_acteurs (fiche_frais_id INT NOT NULL, acteurs_id INT NOT NULL, INDEX IDX_E3489ABED94F5755 (fiche_frais_id), INDEX IDX_E3489ABE71A27AFC (acteurs_id), PRIMARY KEY(fiche_frais_id, acteurs_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fiche_frais_acteurs ADD CONSTRAINT FK_E3489ABED94F5755 FOREIGN KEY (fiche_frais_id) REFERENCES fiche_frais (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fiche_frais_acteurs ADD CONSTRAINT FK_E3489ABE71A27AFC FOREIGN KEY (acteurs_id) REFERENCES acteurs (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE fiche_frais_acteurs');
    }
}
