<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220323014950 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE constelation_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE etoile_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE position_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE "user_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE constelation (id INT NOT NULL, code_constelation VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, saison VARCHAR(255) DEFAULT NULL, etoile_principale VARCHAR(255) DEFAULT NULL, image VARCHAR(1000) DEFAULT NULL, date_debut DATE DEFAULT NULL, date_fin DATE DEFAULT NULL, jour_debut INT DEFAULT NULL, mois_debut INT DEFAULT NULL, jour_fin INT DEFAULT NULL, mois_fin INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE etoile (id INT NOT NULL, id_etoile INT DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, code_constelation VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE position (id INT NOT NULL, id_etoile INT DEFAULT NULL, ra_hour INT DEFAULT NULL, ra_min INT DEFAULT NULL, ra_sec INT DEFAULT NULL, dec_deg INT DEFAULT NULL, dec_min INT DEFAULT NULL, dec_sec INT DEFAULT NULL, magnitude INT DEFAULT NULL, longitude INT DEFAULT NULL, lattitude INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom_prenom VARCHAR(255) DEFAULT NULL, num_tele INT DEFAULT NULL, genre VARCHAR(255) DEFAULT NULL, date_naissance DATE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649F85E0677 ON "user" (username)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE constelation_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE etoile_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE position_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE "user_id_seq" CASCADE');
        $this->addSql('DROP TABLE constelation');
        $this->addSql('DROP TABLE etoile');
        $this->addSql('DROP TABLE position');
        $this->addSql('DROP TABLE "user"');
    }
}
