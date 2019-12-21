<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191221130848 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE artist_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('ALTER TABLE artist ADD name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE artist ADD description TEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE artist DROP username');
        $this->addSql('ALTER TABLE artist DROP password');
        $this->addSql('ALTER TABLE artist DROP email');
        $this->addSql('ALTER TABLE artist DROP first_name');
        $this->addSql('ALTER TABLE artist DROP last_name');
        $this->addSql('ALTER TABLE artist ALTER image DROP NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE artist_id_seq CASCADE');
        $this->addSql('ALTER TABLE artist ADD password VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE artist ADD email VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE artist ADD first_name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE artist ADD last_name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE artist DROP description');
        $this->addSql('ALTER TABLE artist ALTER image SET NOT NULL');
        $this->addSql('ALTER TABLE artist RENAME COLUMN name TO username');
    }
}
