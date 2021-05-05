<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210505125818 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE acteurs_fiche_frais (acteurs_id INT NOT NULL, fiche_frais_id INT NOT NULL, INDEX IDX_7CC3AEA771A27AFC (acteurs_id), INDEX IDX_7CC3AEA7D94F5755 (fiche_frais_id), PRIMARY KEY(acteurs_id, fiche_frais_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE acteurs_fiche_frais ADD CONSTRAINT FK_7CC3AEA771A27AFC FOREIGN KEY (acteurs_id) REFERENCES acteurs (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE acteurs_fiche_frais ADD CONSTRAINT FK_7CC3AEA7D94F5755 FOREIGN KEY (fiche_frais_id) REFERENCES fiche_frais (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fiche_frais DROP FOREIGN KEY fiche_frais_ibfk_1');
        $this->addSql('DROP INDEX acteurs ON fiche_frais');
        $this->addSql('ALTER TABLE fiche_frais DROP acteurs');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE acteurs_fiche_frais');
        $this->addSql('ALTER TABLE fiche_frais ADD acteurs INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fiche_frais ADD CONSTRAINT fiche_frais_ibfk_1 FOREIGN KEY (acteurs) REFERENCES acteurs (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('CREATE INDEX acteurs ON fiche_frais (acteurs)');
    }
}
