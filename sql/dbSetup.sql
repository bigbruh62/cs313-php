CREATE TYPE arch_family AS ENUM ('Palmer', 'Jackson');

CREATE TABLE family (
	first_name   varchar(80),
	last_name    varchar(80),
	birthday     Date,
	family_id    arch_family,
	pid          SERIAL PRIMARY KEY
	);

CREATE TABLE users (
	id          SERIAL PRIMARY KEY,
	username    varchar(80),
	hashword    varchar(80),
	family_id   arch_family,
	pid         integer REFERENCES family(pid)
	);

INSERT INTO users (username, hashword, family_id)
	VALUES ('user1', crypt('pass', gen_salt('bf')), 'Palmer');

INSERT INTO users (username, hashword, family_id)
	VALUES ('user2', crypt('pass2', gen_salt('bf')), 'Jackson');