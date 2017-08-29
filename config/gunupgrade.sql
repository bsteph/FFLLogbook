use PUBLIC;
ALTER TABLE `public`.`gun`
DROP COLUMN `F4473`;

CREATE TABLE F4473 (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(75) NOT NULL,
  type VARCHAR(255) NOT NULL,
  size INT(11) NOT NULL,
  data MEDIUMBLOB NOT NULL,
  created DATETIME,
  modified DATETIME,
  PRIMARY KEY (id)
);