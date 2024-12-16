create database db_pbw;

USE db_crud;
create table user (
id int(11) auto_increment primary key,
name VARCHAR(100),
email VARCHAR(100),
age INT(3)
);