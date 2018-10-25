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

CREATE TABLE users (
	id        SERIAL PRIMARY KEY,
	username  VARCHAR(80) NOT NULL UNIQUE,
	pswdhash  VARCHAR(80) NOT NULL,
	family_id arch_family,
	pid       integer REFERENCES family(pid)
);

INSERT INTO family 
	VALUES ('John', 'Smith', '1-1-1111', 'Palmer');

INSERT INTO family 
	VALUES ('Jane', 'Doe', '2-2-2222', 'Jackson');

INSERT INTO users (username, pswdhash, family_id, pid)
    VALUES ('user1', 'pass', 'Palmer', 1);

INSERT INTO users (username, hashword, family_id, pid)
	VALUES ('user1', crypt('pass', gen_salt('bf')), 'Palmer', 1);

INSERT INTO users (username, hashword, family_id, pid)
	VALUES ('user2', crypt('pass2', gen_salt('bf')), 'Jackson', 2);