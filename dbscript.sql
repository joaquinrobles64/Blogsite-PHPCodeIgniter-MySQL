SET foreign_key_checks = 0;
DROP TABLE IF EXISTS BLOG;
DROP TABLE IF EXISTS POST;
SET foreign_key_checks = 1;

CREATE TABLE BLOG(
    Username VARCHAR(50) NOT NULL,
    Bio VARCHAR(1500),
    PostId INT,
    Rating INT,
    PRIMARY KEY (Username),
    UNIQUE (Username));

CREATE TABLE POST(
    PostId INT NOT NULL AUTO_INCREMENT,
    Username VARCHAR(50) NOT NULL,
    Title TEXT(500) NOT NULL,
    ImageUrl VARCHAR(100),
    Description TEXT(10000),
    Tag VARCHAR(100),
    PRIMARY KEY (PostId),
    FOREIGN KEY (Username) REFERENCES BLOG(Username) );

ALTER TABLE BLOG ADD FOREIGN KEY (PostId) REFERENCES POST(PostId);

INSERT INTO BLOG (Username, Bio, Rating)
VALUES ('joaquinrobles64', 'aspiring fullstack web dev from los angeles', 130);

INSERT INTO BLOG (Username, Bio, Rating)
VALUES ('petergatsby', 'professional software developer', 69);

INSERT INTO BLOG (Username, Bio, Rating)
VALUES ('markkalaiji', 'i love android development!', 150);

INSERT INTO BLOG (Username, Bio, Rating)
VALUES ('brandg98', 'looking for a game dev? hit me up!', 110);

INSERT INTO BLOG (Username, Bio, Rating)
VALUES ('thelegend27', 'undefeated gaming champion', 642);

INSERT INTO BLOG (Username, Bio, Rating)
VALUES ('bozotheclown', 'Entertainer extrodanaire!!!', 1);

INSERT INTO BLOG (Username, Bio, Rating)
VALUES ('bozotheclown', 'Entertainer extrodanaire!!!', 1);

INSERT INTO POST (Username, Title, Description, Tag)
VALUES ('joaquinrobles64', 'First post!', 'Welcome to the site. This is the first ever post.', 'firstpost,howdy');