<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210629080616 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE paiement ADD produit_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1EF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B1DC7A1EF347EFB ON paiement (produit_id)');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC272A4C4478');
        $this->addSql('DROP INDEX IDX_29A5EC272A4C4478 ON produit');
        $this->addSql('ALTER TABLE produit DROP paiement_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1EF347EFB');
        $this->addSql('DROP INDEX UNIQ_B1DC7A1EF347EFB ON paiement');
        $this->addSql('ALTER TABLE paiement DROP produit_id');
        $this->addSql('ALTER TABLE produit ADD paiement_id INT NOT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC272A4C4478 FOREIGN KEY (paiement_id) REFERENCES paiement (id)');
        $this->addSql('CREATE INDEX IDX_29A5EC272A4C4478 ON produit (paiement_id)');
    }
}
