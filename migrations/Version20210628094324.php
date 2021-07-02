<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210628094324 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE adresse_livraison (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, comp_adresse VARCHAR(255) DEFAULT NULL, ville VARCHAR(255) NOT NULL, code_postal INT NOT NULL, pays VARCHAR(255) NOT NULL, telephone INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, code_postal INT NOT NULL, pays VARCHAR(255) NOT NULL, telephone INT NOT NULL, email VARCHAR(255) NOT NULL, confirm_email TINYINT(1) NOT NULL, comp_adress VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paiement (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, adresse_livraison_id INT DEFAULT NULL, commande VARCHAR(255) NOT NULL, adresse_facturation VARCHAR(255) DEFAULT NULL, mode_paiement VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_B1DC7A1E19EB6921 (client_id), UNIQUE INDEX UNIQ_B1DC7A1EBE2F0A35 (adresse_livraison_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, paiement_id INT NOT NULL, prix INT NOT NULL, nom_produit VARCHAR(255) NOT NULL, img VARCHAR(255) DEFAULT NULL, INDEX IDX_29A5EC272A4C4478 (paiement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1EBE2F0A35 FOREIGN KEY (adresse_livraison_id) REFERENCES adresse_livraison (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC272A4C4478 FOREIGN KEY (paiement_id) REFERENCES paiement (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1EBE2F0A35');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1E19EB6921');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC272A4C4478');
        $this->addSql('DROP TABLE adresse_livraison');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('DROP TABLE produit');
    }
}
