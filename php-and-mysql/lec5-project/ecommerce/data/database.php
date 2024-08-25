<?php 



$connect = mysqli_connect("localhost","root","","zay-store");

$sql = " CREATE TABLE IF NOT EXISTS `slider`(
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR(200) NOT NULL,
    `sub_title` VARCHAR(200) NOT NULL,
    `description` TEXT NOT NULL,
    `image` VARCHAR(255)
)";

mysqli_query($connect, $sql);

$sql = "INSERT INTO `slider` (`title`,`sub_title`,`description`,`image`) VALUES(
'Proident Occaecat','Aliquip Ex Ea Commodo Consequat','You Are Permitted To Use This Zay CSS Template For Your Commercial Websites. You Are Not Permitted To Re-distribute The Template ZIP File In Any Kind Of Template Collection Websites.','01.jpg'),(
'Proident Occaecat','Aliquip Ex Ea Commodo Consequat','You Are Permitted To Use This Zay CSS Template For Your Commercial Websites. You Are Not Permitted To Re-distribute The Template ZIP File In Any Kind Of Template Collection Websites.','02.jpg'),(
'Proident Occaecat','Aliquip Ex Ea Commodo Consequat','You Are Permitted To Use This Zay CSS Template For Your Commercial Websites. You Are Not Permitted To Re-distribute The Template ZIP File In Any Kind Of Template Collection Websites.','03.jpg')";

mysqli_query($connect, $sql);




$sql = " CREATE TABLE IF NOT EXISTS `products`(
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR(200) NOT NULL,
    `price` SMALLINT NOT NULL,
    `rating` SMALLINT NOT NULL,
    `review` SMALLINT NOT NULL,
    `description` TEXT NOT NULL,
    `image` VARCHAR(255) ,
    `category_id` INT NOT NULL,
    FOREIGN KEY (`category_id`) REFERENCES `categories`(`id`)
)";

mysqli_query($connect, $sql);



$sql = "INSERT INTO `products` (`title`,`description`,`image`,`rating`,`review`,`price`,`category_id`) VALUES(
    'Gym Weight','You Are Permitted To Use This Zay CSS Template For Your Commercial Websites. You Are Not Permitted To Re-distribute The Template ZIP File In Any Kind Of Template Collection Websites.','01.jpg',3,68,150,3),(
    'Cloud Nike Shoes','You Are Permitted To Use This Zay CSS Template For Your Commercial Websites. You Are Not Permitted To Re-distribute The Template ZIP File In Any Kind Of Template Collection Websites.','02.jpg',4,70,200,2),(
    'Summer Addides Shoes ','You Are Permitted To Use This Zay CSS Template For Your Commercial Websites. You Are Not Permitted To Re-distribute The Template ZIP File In Any Kind Of Template Collection Websites.','03.jpg',5,90,120,1)";
    
    mysqli_query($connect, $sql);


    
$sql = " CREATE TABLE IF NOT EXISTS `messages`(
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(200) NOT NULL,
    `email` VARCHAR(200) NOT NULL,
    `subject` VARCHAR(200) NOT NULL,
    `content` TEXT NOT NULL
)";

mysqli_query($connect, $sql);