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
	stock int not null default 0,
	foreign key(brand_id) references products(id) on delete cascade
);

create table product_detail(
	id int(11) unsigned auto_increment primary key,
	product_id int(11) unsigned not null,
	engine_type varchar(255),
	displacement varchar(255),
	compression_ratio varchar(255),
	maximum_power varchar(255),
	maximum_torque varchar(255),
	fuel_tank_capacity varchar(255),
	fuel_supply_system varchar(255),
	transmission_type varchar(255),
	frame_type varchar(255),
	tyre_size varchar(255),
	brake_type varchar(255),
	suspension_type varchar(255),
	battery varchar(255),
	dimensions varchar(255),
	wheel_base varchar(255),
	ground_clearance varchar(255),
	kerb_weight varchar(255),
	colors_available varchar(255),
	price int(22)unsigned not null,
	foreign key(product_id) references product_list(id) on delete cascade
);

create table spare_part(
    id int(11) unsigned auto_increment primary key,
    spare_part_type varchar(50) not null
);

create table spare_part_list(
	id int(11) unsigned auto_increment primary key,
	spare_part_type_id int(11) unsigned not null,
	spare_part_name varchar(100) not null,
	spare_part_image varchar(255),
	stock int not null default 0,
	foreign key(spare_part_type_id) references spare_part(id) on delete cascade
);

create table spare_parts_detail(
	id int(11) unsigned auto_increment primary key,
	spare_part_id int(11) unsigned not null,
	color varchar(255),
	price int(22),
	foreign key(spare_part_id) references spare_part_list(id) on delete cascade
);

create table service_transactions(
	id int(11) unsigned auto_increment primary key,
	login_id varchar(255) NOT NULL,
	first_name varchar(255) NOT NULL,
	last_name varchar(255),
	address varchar(255) NOT NULL,
	mobile_no int(10) NOT NULL check (mobile_no=10),
	email varchar(255) NOT NULL,
	maker varchar(255) NOT NULL,
	model varchar(255) NOT NULL,
	engine_no varchar(30) NOT NULL,
	chassis_no varchar(30) NOT NULL,
	reg_no varchar(255) NOT NULL
);

CREATE TABLE ci_sessions(
	session_id varchar(40) DEFAULT '0' NOT NULL,
	ip_address varchar(45) DEFAULT '0' NOT NULL,
	user_agent varchar(120) NOT NULL,
	last_activity int(10) unsigned DEFAULT 0 NOT NULL,
	user_data text NOT NULL,
	PRIMARY KEY (session_id),
	KEY `last_activity_idx` (`last_activity`)
);
