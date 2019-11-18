use resultchecker;
create table admins (
id int(11) auto_increment primary key not null,
username varchar(255) unique not null,
password varchar(255) not null,
email varchar(255) unique not null
);
