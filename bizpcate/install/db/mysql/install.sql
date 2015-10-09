ALTER TABLE b_iblock ADD bizpro_cate_id int(3) DEFAULT 0;

create table if not exists bizpro_categories
(
	CATE_ID int(3) not null auto_increment,
	PARENT_ID int(3) null,
	NAME varchar(200),
	STATUS tinyint(1) not null default '0',
	primary key (CATE_ID)
);