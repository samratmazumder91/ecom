create table products(
    id int(11) unsigned auto_increment primary key,
    brand_name varchar(50) not null,
    brand_logo varchar(255)
);

create table product_list(
	id int(11) unsigned auto_increment primary key,
	brand_id int(11) unsigned not null,
	product_name varchar(100) not null,
	product_image varchar(255),
	foreign key(brand_id) references products(id) on delete cascade
);

create table product_detail(
	id int(11) unsigned auto_increment primary key,
	product_id int(11) unsigned not null,
	col1 varchar(255),
	foreign key(product_id) references product_list(id) on delete cascade
);