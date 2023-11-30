CREATE TABLE role(
	id_role INT PRIMARY KEY AUTO_INCREMENT,
    role_type varchar(225)
);

CREATE TABLE request(
	id_request INT PRIMARY KEY AUTO_INCREMENT,
    request varchar(224)
);

CREATE TABLE userTable(
	id_user INT PRIMARY KEY AUTO_INCREMENT,
    name varchar(224),
    email varchar(224),
    password varchar(224),
    phone INT,
    id_role INT,
    id_request INT,
    FOREIGN KEY (id_role) REFERENCES role (id_role),
    FOREIGN KEY (id_request) REFERENCES request (id_request)
);

CREATE TABLE location(
	id_location INT PRIMARY KEY AUTO_INCREMENT,
    address varchar(224)
);

CREATE TABLE hotel(
	id_hotel INT PRIMARY KEY AUTO_INCREMENT,
    name varchar(224),
    stars INT,
    number INT,
    descriptio TEXT,
	id_location INT,
    FOREIGN KEY (id_location) REFERENCES location (id_location)
);

CREATE TABLE room_type(
	troom_id INT PRIMARY KEY AUTO_INCREMENT,
    type varchar(224)
);

CREATE TABLE room(
	id_room INT PRIMARY KEY AUTO_INCREMENT,
    room_type varchar(224),
    price INT,
    quantity INT,
	id_hotel INT,
	troom_id INT,
    FOREIGN KEY (id_hotel) REFERENCES hotel (id_hotel),
    FOREIGN KEY (troom_id) REFERENCES room_type (troom_id)
);

CREATE TABLE reservation(
	id_reservation INT PRIMARY KEY AUTO_INCREMENT,
    date_start DATE,
    date_end DATE,
    price float,
	id_hotel INT,
	troom_id INT,
    FOREIGN KEY (id_hotel) REFERENCES hotel (id_hotel),
    FOREIGN KEY (troom_id) REFERENCES room_type (troom_id)
);

