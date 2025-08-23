CREATE TABLE tt_content (
    malik_separator varchar(255) DEFAULT '' NOT NULL,
    malik_reference int(11) unsigned DEFAULT '0' NOT NULL,


    
);

CREATE TABLE tx_mywebsite_domain_model_boxcontentelemt(
  uid INT(11) NOT NULL AUTO_INCREMENT,

    link VARCHAR(255),
    pid INT(11) DEFAULT '0' NOT NULL,

    
    boxtext VARCHAR(255),
    boxtitle VARCHAR(255),
    boximg VARCHAR(255),

    PRIMARY KEY (uid)
);


CREATE TABLE tx_mywebsite_domain_model_products(

  uid INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(255),
    pid INT(11) DEFAULT 0 NOT NULL,
    price INT(11),
    image VARCHAR(255),
    description VARCHAR(255),
    specifications VARCHAR(255),
    category  varchar(255),
    Avaliable INT(255),
    comments varchar(255),
    link varchar(255),
    PRIMARY KEY (uid),
); 
CREATE TABLE fe_users (
  shop VARCHAR(255),
);

CREATE TABLE tx_mywebsite_domain_model_comment (


  prodid INT(11)  NOT NULL,
  userid INT(11)  NOT NULL,
  rating INT(11)  NOT NULL,
  crdate INT(11)   NOT NULL,

  comments VARCHAR(255)  NOT NULL,
);
