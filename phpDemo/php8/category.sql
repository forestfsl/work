drop table if exists category;
create table category(
id int unsigned auto_increment primary key comment 'id',
name varchar(50) not null comment '类别名称',
sort_order int not null default 50 comment '排序字段',
parentid int unsigned not null comment '父级id'
)engine=innodb charset=utf8;

insert into category values (1,'图像、音像、数字商品',default,0);
insert into category values (2,'家用电器',default,0);
insert into category values (3,'手机数码',default,0);
insert into category values (4,'电子书',default,1);
insert into category values (5,'数字音乐',default,1);
insert into category values (6,'励志与成功',default,4);
insert into category values (7,'文学',default,4);
insert into category values (8,'大家电',default,2);
insert into category values (9,'生活电器',default,2);