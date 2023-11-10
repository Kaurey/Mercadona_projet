<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231110132354 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product ADD admin_id INT NOT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD642B8210 FOREIGN KEY (admin_id) REFERENCES admin (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_D34A04AD642B8210 ON product (admin_id)');
        $this->addSql('ALTER TABLE promotion ADD admin_id INT NOT NULL');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD1642B8210 FOREIGN KEY (admin_id) REFERENCES admin (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_C11D7DD1642B8210 ON promotion (admin_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE promotion DROP CONSTRAINT FK_C11D7DD1642B8210');
        $this->addSql('DROP INDEX IDX_C11D7DD1642B8210');
        $this->addSql('ALTER TABLE promotion DROP admin_id');
        $this->addSql('ALTER TABLE product DROP CONSTRAINT FK_D34A04AD642B8210');
        $this->addSql('DROP INDEX IDX_D34A04AD642B8210');
        $this->addSql('ALTER TABLE product DROP admin_id');
    }
}
