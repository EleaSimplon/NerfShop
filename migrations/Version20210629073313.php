<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210629073313 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client ADD adresse_livraison_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455BE2F0A35 FOREIGN KEY (adresse_livraison_id) REFERENCES adresse_livraison (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C7440455BE2F0A35 ON client (adresse_livraison_id)');
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1EBE2F0A35');
        $this->addSql('DROP INDEX UNIQ_B1DC7A1EBE2F0A35 ON paiement');
        $this->addSql('ALTER TABLE paiement DROP adresse_livraison_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455BE2F0A35');
        $this->addSql('DROP INDEX UNIQ_C7440455BE2F0A35 ON client');
        $this->addSql('ALTER TABLE client DROP adresse_livraison_id');
        $this->addSql('ALTER TABLE paiement ADD adresse_livraison_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1EBE2F0A35 FOREIGN KEY (adresse_livraison_id) REFERENCES adresse_livraison (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B1DC7A1EBE2F0A35 ON paiement (adresse_livraison_id)');
    }
}
