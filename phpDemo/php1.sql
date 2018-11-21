CREATE TABLE IF NOT EXISTS `contents`(
   `Id` INT UNSIGNED AUTO_INCREMENT,
   `Title` VARCHAR(100) NOT NULL,
   `Content` VARCHAR(40) NOT NULL,
   `Author` VARCHAR(40) NOT NULL,
   `UpdateDate` DATE,
   PRIMARY KEY ( `Id` )
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `title`(
   `Id` INT UNSIGNED AUTO_INCREMENT,
   `Title` VARCHAR(100) NOT NULL,
   PRIMARY KEY ( `Id` )
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into contents(Id,Title,Content,Author,UpdateDate) values("1837","6","<MEMO>","一只老鼠","0","2018-11-15");
insert into title(Id,Title) values(1,"大话西游");

SELECT * FROM title 
    -> INTO OUTFILE '/Users/admin/work/php1/title.txt';