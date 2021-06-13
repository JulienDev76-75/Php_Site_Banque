DROP DATABASE IF EXISTS banque_sql;
CREATE DATABASE banque_sql CHARACTER SET 'utf8';

DROP USER IF EXISTS 'BanquePhp'@'Localhost';
CREATE USER 'BanquePhp'@'Localhost';
GRANT ALL PRIVILEGES ON banque_php.* To 'BanquePhp'@'Localhost' IDENTIFIED BY 'Johnkeynes76*!';

CREATE TABLE customer (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(250) NOT NULL,
    lastname VARCHAR(250) NOT NULL,
    profession VARCHAR(250) NOT NULL,
    city VARCHAR(250) NOT NULL,
    postal_code VARCHAR(50) NOT NULL,
    country VARCHAR(250) NOT NULL,
    mail VARCHAR(50) NOT NULL,
    customer_password VARCHAR(255) NOT NULL,
    phone INT(14) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE account (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    account_name VARCHAR(50) NOT NULL,
    account_number VARCHAR(50) NOT NULL,
    amount_account DECIMAL(10,2) NOT NULL,
    creation_date DATE NOT NULL,
    customer_id INT UNSIGNED NOT NULL, 
    PRIMARY KEY (id),
    FOREIGN KEY (customer_id) REFERENCES customer(id)
);

CREATE TABLE account_operation (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    last_operation_type VARCHAR(50) NOT NULL,
    last_operation_name VARCHAR(50) NOT NULL,
    last_operation_amount DECIMAL(10,2) NOT NULL,
    last_operation_date TIMESTAMP NOT NULL,
    account_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (account_id) REFERENCES account(id)
);

INSERT INTO customer (firstname, lastName, profession, number_secu, birthday, city, postal_code, country, mail, customer_password, phone) 
VALUES 
('Julien', 'Coart', 'poète amateur','Rouen','76100', 'France', 'julien.coart@gmail.com', 'lesalamicpasbon50', 0612548654),
('Bob', 'LeBricoleur', 'artisan','Rouen','76100', 'France', 'juvabien.juvamine@gmail.com', 'lesalamictropbon59', 0665656565),
('Bob', 'LeMarrant', 'chomeur professionnel','Paris','75000', 'France', 'boblemarrant@gmail.com', 'motdepasse', 0660594835);

INSERT INTO account (account_name, account_number, amount_account, creation_date, customer_id) 
VALUES  
('PEL', 'N°AV15203254', 1250.10, '1987-10-02', 1),
('PEL', 'N°P50642304', 5015, '1890-06-05', 2),
('LivretA', 'N°150350564', 100, '1975-11-10', 2),
('LivretA', 'N°AV15203254', 1250.10, '1987-05-06', 1),
('LivretA', 'N°AP804804', 910.50, '2011-05-07', 3),
('PEL', 'N°P450405', 54000, '2021-09-15', 3),
('PER', 'N°PE68405', 568, '2021-12-16', 3),
('PER', 'N°PE56044', 654, '2021-10-15', 1);

INSERT INTO account_operation (last_operation_type, last_operation_name, last_operation_amount, last_operation_date, account_id)
VALUES  
('Debit', 'La pizza à Pipo', -50.60, '2021-05-05 17:12:00', 2),
('Debit', 'Retrait DAB', -90, '2021-09-21 11:57:00', 2),
('Credit', 'LivretA', 60, '2020-10-30 10:16:00', 3),
('Credit', 'PEL', 50, '2021-05-05 17:12:00', 1),
('Debit', 'La pizza à Pipo', -50.60, '2021-05-05 16:45:00', 1),
('Debit', 'Intermarché', -45.90, '2021-05-05 11:22:00', 1),
('Credit', 'PEL', 60, '2021-10-30 12:26:00', 3);
