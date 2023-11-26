<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231126092202 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE methode ALTER description TYPE TEXT');
        $this->addSql('COMMENT ON COLUMN methode.description IS \'(DC2Type:simple_array)\'');
        $this->addSql('ALTER TABLE realisation ALTER introduction TYPE TEXT');
        $this->addSql('COMMENT ON COLUMN realisation.introduction IS \'(DC2Type:simple_array)\'');
        $this->addSql('ALTER TABLE "user" ALTER roles TYPE TEXT');
        $this->addSql('COMMENT ON COLUMN "user".roles IS \'(DC2Type:simple_array)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE methode ALTER description TYPE JSON');
        $this->addSql('COMMENT ON COLUMN methode.description IS NULL');
        $this->addSql('ALTER TABLE realisation ALTER introduction TYPE JSON');
        $this->addSql('COMMENT ON COLUMN realisation.introduction IS NULL');
        $this->addSql('ALTER TABLE "user" ALTER roles TYPE JSON');
        $this->addSql('COMMENT ON COLUMN "user".roles IS NULL');
    }
}
