create database resultchecker;
use resultchecker;

create table admins (
id int(11) auto_increment primary key not null,
username varchar(255) unique not null,
password varchar(255) not null,
email varchar(255) unique not null
);


use resultchecker;
create table results (
id int(11) auto_increment primary key not null,
matricNo varchar(50) not null,
com201 varchar(20) not null,
com214 varchar(20) not null,
com216 varchar(20) not null,
com224 varchar(20) not null,
com206 varchar(20) not null,
sessionName varchar(255) not null,
department varchar(255) not null
);
