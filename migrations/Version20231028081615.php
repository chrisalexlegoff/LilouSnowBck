<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231028081615 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE tarif_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE tarif (id INT NOT NULL, category VARCHAR(255) NOT NULL, image_name VARCHAR(255) NOT NULL, description JSON NOT NULL, alternate_name VARCHAR(255) NOT NULL, tarif_base INT NOT NULL, tarif_sup INT NOT NULL, horaire_debut INT NOT NULL, horaire_fin INT NOT NULL, contenu_seance JSON NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE tarif_id_seq CASCADE');
        $this->addSql('DROP TABLE tarif');
    }
}
