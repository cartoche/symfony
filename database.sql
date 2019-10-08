CREATE DATABASE IF NOT EXISTS ecommerce;
USE ecommerce;

CREATE TABLE users(
id          int(255) auto_increment not null,
role        varchar(20),
name        varchar(255),
surname     varchar(255),
email       varchar(255),
password    varchar(255),
CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE products(
id           int(255) auto_increment not null,
description  text,
price        int(20) not null,
stock        int(255) not null,
CONSTRAINT pk_products PRIMARY KEY(id)
)ENGINE=InnoDb; 

CREATE TABLE orders(
id             int(255) auto_increment not null,
idUser         int(255) not null,
quantity       int(255) not null,   
price          int(20) not null,            
CONSTRAINT pk_orders PRIMARY KEY(id), 
CONSTRAINT fk_orders_users foreign key(idUser) references users(id)
)ENGINE=InnoDb;

CREATE TABLE productorders(
idProduct   	int(255) not null,
idOrder     	int(255) not null,
idFacturacion  	int(255) not null,
price       	int(20) not null,   
CONSTRAINT pk_productorders PRIMARY KEY(idProduct, idOrder),
CONSTRAINT fk_productorders_products foreign key (idProduct) references products(id),
CONSTRAINT fk_productorders_orders foreign key (idOrder) references orders(id)
)ENGINE=InnoDb;

CREATE TABLE    shippings(
id              int(255) auto_increment not null,
idOrder         int(255) not null,
reference       varchar(255),
status          text,
send_date       date,
deliveredDate   date,
address         varchar(255),
CONSTRAINT pk_shippings PRIMARY KEY (id), 
CONSTRAINT fk_shippings_orders foreign key (idOrder) references orders(id)    
)ENGINE=InnoDb;

