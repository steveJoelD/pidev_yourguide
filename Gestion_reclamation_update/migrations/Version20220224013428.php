<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220224013428 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire ADD like_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC859BFA32 FOREIGN KEY (like_id) REFERENCES `like` (id)');
        $this->addSql('CREATE INDEX IDX_67F068BC859BFA32 ON commentaire (like_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC859BFA32');
        $this->addSql('DROP INDEX IDX_67F068BC859BFA32 ON commentaire');
        $this->addSql('ALTER TABLE commentaire DROP like_id');
    }
}
