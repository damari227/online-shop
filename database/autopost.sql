CREATE DATABASE `product_db`;

use `product_db`;

CREATE TABLE product (
  `id` int(100) NOT NULL auto_increment,
  `nama` varchar(100),
  `deskripsi` varchar(100),
  `harga` varchar(100000),
  PRIMARY KEY(id)
);