<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220523081634 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE education ADD year_obtained INT DEFAULT NULL, DROP date_obtained');
        $this->addSql('ALTER TABLE experience ADD from_year INT DEFAULT NULL, ADD toyear INT DEFAULT NULL, DROP from_date, DROP to_date');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE education ADD date_obtained DATE NOT NULL, DROP year_obtained');
        $this->addSql('ALTER TABLE experience ADD from_date DATE NOT NULL, ADD to_date DATE NOT NULL, DROP from_year, DROP toyear');
    }
}
