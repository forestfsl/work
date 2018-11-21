CREATE TABLE IF NOT EXISTS `products`(
   `proID` INT UNSIGNED AUTO_INCREMENT,
   `proname` VARCHAR(100) NOT NULL,
   `proguige` VARCHAR(40) NOT NULL,
   `proamount` FLOAT NOT NULL,
   `proimages` VARCHAR(40) NOT NULL,
   `proweb` VARCHAR(40) NOT NULL,
   `proprice` FLOAT NOT NULL,
   PRIMARY KEY ( `proID` )
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into products(proname,proguige,proamount,proimages,proweb,proprice) values("苹果汁","每箱24瓶","39","images/1.bmp","http://www.sina.com","18.0000");
