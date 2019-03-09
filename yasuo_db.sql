CREATE TABLE admins (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    create_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO admins (id,email, password) VALUES (null,'admin@gmail.com', '1');
INSERT INTO admins (id,email, password) VALUES (null,'chile@gmail.com', '1');

CREATE TABLE users (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    fullname varchar(255),
    phone varchar(11),
    address text,
    create_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    update_at datetime
);
INSERT INTO users (id, email, password, fullname, phone, address) 
            VALUES (NULL, 'chi@gmail.com', '1234', 'chil le', '1695669219', 'KTX KHu B');
INSERT INTO users (id, email, password, fullname, phone, address) 
            VALUES (NULL, 'ha@gmail.com', '1234', 'ha vo', '1695669219', 'KTX KHu B');


CREATE TABLE books (
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    image varchar(255) NOT NULL,
    author varchar(255) NOT NULL ,
    status INT(1) NOT NULL,
    description text ,
    type varchar(10),
    year INT(5),
    rating INT(1),
    user_id int(11) NOT NULL,
    create_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    update_at datetime,
    -- size,color,category
    FOREIGN KEY (user_id) REFERENCES users(id) 
);

INSERT INTO books (id,name,image,author,status,description,type,year,user_id) 
        VALUES (NULL,'Toi thay hoa vang tren co xanh','https://cdnvn.truyenfull.vn/cover/o/eJzLyTDW1zVO8s1OMwjyyksu1w_LKDD1TvPNNqry1HeEAqeCZP2K0Arzwkhvy-CCfP1yI0NT3QxjIyNdz2QTIwDG2BQ7/toi-thay-hoa-vang-tren-co-xanh.jpg',
        'Nguyen Nhat Anh',1,'Mot sieu pham cua tac gia NNA','Truyen Ngan','1997',1);

INSERT INTO books (id,name,image,author,status,description,type,year,user_id) 
        VALUES (NULL,'Mat Biec  ','https://upload.wikimedia.org/wikipedia/vi/thumb/9/92/Mat_Biec.gif/220px-Mat_Biec.gif',
        'Nguyen Nhat Anh',1,'Mot sieu pham cua tac gia NNA','Truyen Ngan','1997',1);

INSERT INTO books (id,name,image,author,status,description,type,year,user_id) 
        VALUES (NULL,'Toi thay hoa vang tren co xanh','https://cdnvn.truyenfull.vn/cover/o/eJzLyTDW1zVO8s1OMwjyyksu1w_LKDD1TvPNNqry1HeEAqeCZP2K0Arzwkhvy-CCfP1yI0NT3QxjIyNdz2QTIwDG2BQ7/toi-thay-hoa-vang-tren-co-xanh.jpg',
        'Nguyen Nhat Anh',1,'Mot sieu pham cua tac gia NNA','Truyen Ngan','1997',16);      