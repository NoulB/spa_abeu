create table failed_jobs
(
	id     	bigint unsigned auto_increment
    	primary key,
	connection text                            	not null,
	queue  	text                            	not null,
	payload	longtext                        	not null,
	exception  longtext                        	not null,
	failed_at  timestamp default CURRENT_TIMESTAMP not null
)
	collate = utf8mb4_unicode_ci;
    
	create table users
(
	id            	bigint unsigned auto_increment
    	primary key,
	name          	varchar(255) not null,
	email         	varchar(255) not null,
	email_verified_at timestamp	null,
	password      	varchar(255) not null,
	remember_token	varchar(100) null,
	created_at    	timestamp	null,
	updated_at    	timestamp	null,
	constraint users_email_unique
    	unique (email)
)
	collate = utf8mb4_unicode_ci;
	create table password_resets
(
	email  	varchar(255) not null,
	token  	varchar(255) not null,
	created_at timestamp	null
)
	collate = utf8mb4_unicode_ci;

create index password_resets_email_index
	on password_resets (email);