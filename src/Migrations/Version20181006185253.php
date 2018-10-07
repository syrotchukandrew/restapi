<?php declare(strict_types=1);

/*
 * This file is part of the Restapi.
 */

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181006185253 extends AbstractMigration
{
    /**
     * @param Schema $schema
     *
     * @throws \Doctrine\DBAL\DBALException
     * @throws \Doctrine\DBAL\Migrations\AbortMigrationException
     */
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE ti_message_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE virtual_state_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE ti_message (id INT NOT NULL, virtual_state_id INT DEFAULT NULL, client_id VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, session_id VARCHAR(255) DEFAULT NULL, user_id VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4B3F7400E359433 ON ti_message (virtual_state_id)');
        $this->addSql('CREATE TABLE virtual_state (id INT NOT NULL, ip VARCHAR(50) NOT NULL, language VARCHAR(10) NOT NULL, reference VARCHAR(255) NOT NULL, user_agent VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE ti_message ADD CONSTRAINT FK_4B3F7400E359433 FOREIGN KEY (virtual_state_id) REFERENCES virtual_state (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    /**
     * @param Schema $schema
     *
     * @throws \Doctrine\DBAL\DBALException
     * @throws \Doctrine\DBAL\Migrations\AbortMigrationException
     */
    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE ti_message DROP CONSTRAINT FK_4B3F7400E359433');
        $this->addSql('DROP SEQUENCE ti_message_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE virtual_state_id_seq CASCADE');
        $this->addSql('DROP TABLE ti_message');
        $this->addSql('DROP TABLE virtual_state');
    }
}
