<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190422194858 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE administrador CHANGE Nombre Nombre VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE categoria CHANGE CodigoCat CodigoCat VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE cliente CHANGE NIT NIT VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE detalle DROP FOREIGN KEY detalle_ibfk_8');
        $this->addSql('ALTER TABLE detalle DROP FOREIGN KEY detalle_ibfk_9');
        $this->addSql('ALTER TABLE detalle CHANGE NumPedido NumPedido INT DEFAULT NULL, CHANGE CodigoProd CodigoProd VARCHAR(30) DEFAULT NULL');
        $this->addSql('ALTER TABLE detalle ADD CONSTRAINT FK_80397C306503831C FOREIGN KEY (CodigoProd) REFERENCES producto (CodigoProd)');
        $this->addSql('ALTER TABLE detalle ADD CONSTRAINT FK_80397C308C0ACCB1 FOREIGN KEY (NumPedido) REFERENCES venta (NumPedido)');
        $this->addSql('ALTER TABLE producto DROP FOREIGN KEY producto_ibfk_7');
        $this->addSql('ALTER TABLE producto DROP FOREIGN KEY producto_ibfk_8');
        $this->addSql('ALTER TABLE producto CHANGE CodigoProd CodigoProd VARCHAR(30) NOT NULL, CHANGE CodigoCat CodigoCat VARCHAR(30) DEFAULT NULL, CHANGE NITProveedor NITProveedor VARCHAR(30) DEFAULT NULL, CHANGE Nombre Nombre VARCHAR(30) DEFAULT NULL');
        $this->addSql('ALTER TABLE producto ADD CONSTRAINT FK_A7BB061549DA3F4D FOREIGN KEY (CodigoCat) REFERENCES categoria (CodigoCat)');
        $this->addSql('ALTER TABLE producto ADD CONSTRAINT FK_A7BB0615CD455D1A FOREIGN KEY (NITProveedor) REFERENCES proveedor (NITProveedor)');
        $this->addSql('ALTER TABLE proveedor CHANGE NITProveedor NITProveedor VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE venta DROP FOREIGN KEY venta_ibfk_1');
        $this->addSql('ALTER TABLE venta CHANGE NIT NIT VARCHAR(30) DEFAULT NULL');
        $this->addSql('ALTER TABLE venta ADD CONSTRAINT FK_8FE7EE55C8F81879 FOREIGN KEY (NIT) REFERENCES cliente (NIT)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE administrador CHANGE Nombre Nombre VARCHAR(30) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE categoria CHANGE CodigoCat CodigoCat VARCHAR(30) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE cliente CHANGE NIT NIT VARCHAR(30) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE detalle DROP FOREIGN KEY FK_80397C306503831C');
        $this->addSql('ALTER TABLE detalle DROP FOREIGN KEY FK_80397C308C0ACCB1');
        $this->addSql('ALTER TABLE detalle CHANGE CodigoProd CodigoProd VARCHAR(30) NOT NULL COLLATE latin1_swedish_ci, CHANGE NumPedido NumPedido INT NOT NULL');
        $this->addSql('ALTER TABLE detalle ADD CONSTRAINT detalle_ibfk_8 FOREIGN KEY (CodigoProd) REFERENCES producto (CodigoProd) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE detalle ADD CONSTRAINT detalle_ibfk_9 FOREIGN KEY (NumPedido) REFERENCES venta (NumPedido) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE producto DROP FOREIGN KEY FK_A7BB061549DA3F4D');
        $this->addSql('ALTER TABLE producto DROP FOREIGN KEY FK_A7BB0615CD455D1A');
        $this->addSql('ALTER TABLE producto CHANGE CodigoProd CodigoProd VARCHAR(30) NOT NULL COLLATE latin1_swedish_ci, CHANGE CodigoCat CodigoCat VARCHAR(30) NOT NULL COLLATE latin1_swedish_ci, CHANGE NITProveedor NITProveedor VARCHAR(30) NOT NULL COLLATE latin1_swedish_ci, CHANGE Nombre Nombre VARCHAR(30) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE producto ADD CONSTRAINT producto_ibfk_7 FOREIGN KEY (CodigoCat) REFERENCES categoria (CodigoCat) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE producto ADD CONSTRAINT producto_ibfk_8 FOREIGN KEY (NITProveedor) REFERENCES proveedor (NITProveedor) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE proveedor CHANGE NITProveedor NITProveedor VARCHAR(30) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE venta DROP FOREIGN KEY FK_8FE7EE55C8F81879');
        $this->addSql('ALTER TABLE venta CHANGE NIT NIT VARCHAR(30) NOT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE venta ADD CONSTRAINT venta_ibfk_1 FOREIGN KEY (NIT) REFERENCES cliente (NIT) ON UPDATE CASCADE');
    }
}
