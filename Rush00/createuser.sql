function createUser()
{
	CREATE TABLE users (
		user_id int(100) NOT null PRIMARY KEY AUTO_INCREMENT,
		user_name varchar(250) NOT null,
		user_email varchar(250) NOT null,
		user_uid varchar(250) NOT null,
		user_passwd varchar(250) NOT null);
		
		INSERT INTO users (user_name, user_email, user_uid, user_passwd) VALUES ('asaba', 'pomme@gmail.com', 'Admin', 'test123');
}