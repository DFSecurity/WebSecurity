create database login;
use login;
create table cadastrar (id int primary key auto_increment, name varchar (100) not null, email varchar (100) not null, password varchar (32) not null, confirm varchar (32) not null);