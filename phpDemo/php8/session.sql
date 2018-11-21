create table sess(id char(32) primary key comment '会话编号',
value text not null  comment '会话的值',
expires int not null
)engine=innodb charset=utf8;