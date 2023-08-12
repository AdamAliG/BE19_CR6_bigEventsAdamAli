<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230811115414 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event ADD name VARCHAR(255) NOT NULL, ADD date DATE NOT NULL, ADD start_time TIME DEFAULT NULL, ADD description LONGTEXT DEFAULT NULL, ADD image_link VARCHAR(1000) DEFAULT NULL, ADD capacity INT DEFAULT NULL, ADD contact_email VARCHAR(255) DEFAULT NULL, ADD contact_phone VARCHAR(20) DEFAULT NULL, ADD address VARCHAR(500) DEFAULT NULL, ADD ZIP_code VARCHAR(10) DEFAULT NULL, ADD city_name VARCHAR(255) DEFAULT NULL, ADD event_url VARCHAR(1000) DEFAULT NULL, ADD event_type VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event DROP name, DROP date, DROP start_time, DROP description, DROP image_link, DROP capacity, DROP contact_email, DROP contact_phone, DROP address, DROP ZIP_code, DROP city_name, DROP event_url, DROP event_type');
    }
}
