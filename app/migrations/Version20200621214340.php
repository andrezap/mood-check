<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20200621214340 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('CREATE TABLE register (id CHAR(36) NOT NULL COMMENT \'(DC2Type:uuid)\', mood VARCHAR(255) NOT NULL, register_date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mood_register_user (mood_register_id CHAR(36) NOT NULL COMMENT \'(DC2Type:uuid)\', user_id CHAR(36) NOT NULL COMMENT \'(DC2Type:uuid)\', INDEX IDX_9EEA9910B21B360D (mood_register_id), INDEX IDX_9EEA9910A76ED395 (user_id), PRIMARY KEY(mood_register_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mood_register_user ADD CONSTRAINT FK_9EEA9910B21B360D FOREIGN KEY (mood_register_id) REFERENCES register (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mood_register_user ADD CONSTRAINT FK_9EEA9910A76ED395 FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE mood_register_user DROP FOREIGN KEY FK_9EEA9910B21B360D');
        $this->addSql('DROP TABLE register');
        $this->addSql('DROP TABLE mood_register_user');
    }
}
