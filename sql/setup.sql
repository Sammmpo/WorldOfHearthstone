/* Import this script into phpMyAdmin to setup everything. */
/* The end-user should not need this. */

DROP TABLE IF EXISTS locations;
DROP TABLE IF EXISTS cards;

CREATE TABLE locations (
    id integer NOT NULL AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    xCoord integer NOT NULL,
    yCoord integer NOT NULL,
    PRIMARY KEY (id )
);

INSERT INTO locations (id, name, xCoord, yCoord)
VALUES (1, "Stratholme", 6356, 1779);

CREATE TABLE cards (
    id integer NOT NULL AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    locationId integer NOT NULL,
    imageLink VARCHAR(70) NOT NULL,
    PRIMARY KEY (id )
);

INSERT INTO cards (name, locationId, imageLink)
VALUES ("Mal'Ganis", 1, "http://media-hearth.cursecdn.com/avatars/309/892/12294.png");

INSERT INTO cards (name, locationId, imageLink)
VALUES ("Baron Rivendare", 1, "http://media-hearth.cursecdn.com/avatars/148/729/7740.png");
