CREATE TABLE fuel_data
(
  id        INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  date_from VARCHAR(255)        NOT NULL,
  date_to   VARCHAR(255)        NOT NULL,
  liters    FLOAT(8, 1)         NOT NULL,
  km        FLOAT(8, 1)         NOT NULL,
  money     FLOAT(8, 1)         NOT NULL
);
INSERT INTO codeing_.fuel_data (date_from, date_to, liters, km, money) VALUES ('9/10', '18/10', 14.1, 164.2, 20);
INSERT INTO codeing_.fuel_data (date_from, date_to, liters, km, money) VALUES ('18/10', '24/10', 16.7, 207, 25);
INSERT INTO codeing_.fuel_data (date_from, date_to, liters, km, money) VALUES ('24/10', '30/10', 14.3, 170.7, 25);
INSERT INTO codeing_.fuel_data (date_from, date_to, liters, km, money) VALUES ('30/10', '6/11', 17.5, 209, 25);
INSERT INTO codeing_.fuel_data (date_from, date_to, liters, km, money) VALUES ('6/11', '13/11', 16.5, 189, 25);
INSERT INTO codeing_.fuel_data (date_from, date_to, liters, km, money) VALUES ('13/11', '16/11', 16.6, 204.1, 25);
INSERT INTO codeing_.fuel_data (date_from, date_to, liters, km, money) VALUES ('16/11', '24/11', 18.8, 214, 25);
INSERT INTO codeing_.fuel_data (date_from, date_to, liters, km, money) VALUES ('24/11', '29/11', 15.3, 197.3, 20);
INSERT INTO codeing_.fuel_data (date_from, date_to, liters, km, money) VALUES ('29/11', '6/12', 16.8, 210, 25);
INSERT INTO codeing_.fuel_data (date_from, date_to, liters, km, money) VALUES ('8/12', '13/12', 9.1, 123, 10);
INSERT INTO codeing_.fuel_data (date_from, date_to, liters, km, money) VALUES ('13/12', '20/12', 16.1, 183.3, 25);
INSERT INTO codeing_.fuel_data (date_from, date_to, liters, km, money) VALUES ('20/12', '27/12', 21.4, 233.9, 30);
INSERT INTO codeing_.fuel_data (date_from, date_to, liters, km, money) VALUES ('27/12', '3/1', 17.2, 218.1, 20);
INSERT INTO codeing_.fuel_data (date_from, date_to, liters, km, money) VALUES ('3/1', '15/1', 19.5, 213.7, 30);