<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220322162038 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE constelation ADD jour_debut INT DEFAULT NULL');
        $this->addSql('ALTER TABLE constelation ADD mois_debut INT DEFAULT NULL');
        $this->addSql('ALTER TABLE constelation ADD jour_fin INT DEFAULT NULL');
        $this->addSql('ALTER TABLE constelation ADD mois_fin INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE constelation DROP jour_debut');
        $this->addSql('ALTER TABLE constelation DROP mois_debut');
        $this->addSql('ALTER TABLE constelation DROP jour_fin');
        $this->addSql('ALTER TABLE constelation DROP mois_fin');
    }
}
