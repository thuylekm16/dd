<?php
require_once ('mysql.php');
 $connect =  connect();

 $connect->query('CREATE TABLE  IF NOT EXISTS db.users (
  id int unsigned auto_increment primary key,
  username varchar(30) not null,
  fullname varchar(50) null ,
  email varchar(255) null,
  password varchar(255) not null
)');
 $connect->query('CREATE TABLE IF NOT EXISTS db.posts (
  id int unsigned auto_increment primary key,
  title varchar(255) not null,
  content longtext not null ,
  create_at date null,
  user_id int unsigned not null,
  views int default 0,
  FOREIGN KEY (user_id) references users(id)
)');
$connect->query('CREATE TABLE db.comments (
  id int unsigned auto_increment primary key,
  user_id int unsigned not null,
  comment text not null ,
  create_at date null,
  post_id int unsigned not null,
  FOREIGN KEY (user_id) references users(id),
  FOREIGN KEY (post_id) references posts(id)
)');
?>