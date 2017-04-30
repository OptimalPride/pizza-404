CREATE DATABASE orbital_express;

USE orbital_express;

CREATE TABLE IF NOT EXISTS membre (
  id_membre INT(5) NOT NULL AUTO_INCREMENT,
  pseudo VARCHAR(20) NOT NULL,
  email VARCHAR(50) NOT NULL,
  mdp VARCHAR(128) NOT NULL,
  avatar VARCHAR(50) DEFAULT NULL,
  statut INT(1) NOT NULL,
  PRIMARY KEY (id_membre)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS game (
  id_page INT(5) NOT NULL AUTO_INCREMENT,
  story VARCHAR(50) NOT NULL,
  background VARCHAR(50) NOT NULL,
  animation VARCHAR(50) NOT NULL,
  relation VARCHAR(50) NOT NULL,
  PRIMARY KEY (id_page)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS save (
  id_save INT(5) NOT NULL AUTO_INCREMENT,
  id_user INT(5) NOT NULL,
  id_current_page INT(5) NOT NULL,
  historic VARCHAR(50) NOT NULL,
  PRIMARY KEY (id_save)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

Insertion de données membre :

INSERT INTO membre (id_membre, pseudo, email, mdp, avatar, statut) VALUES 
(1, "member", "member@email.com", "5a99c8cac333affeed05a24fe0d6f61c", "avatar02", 0),
(2, "admin", "admin@email.com", "21232f297a57a5a743894a0e4a801fc3", "avatar03", 1),


Insertion de données game:

INSERT INTO game (id_page, story, background, animation, relation) VALUES 
(1, "story_page1.txt", "stars01.jpg", "animation01", "2 - 3 - 4"),
(2, "story_page2.txt", "stars02.jpg", "animation01", "5 - 6 - 7"),
(3, "story_page3.txt", "stars03.jpg", "animation01", "8 - 9 - 10"),
(4, "story_page4.txt", "stars04.jpg", "animation01", "11 - 12 - 13");



INSERT INTO membre (pseudo, email, mdp, avatar, statut) VALUES 
("member1", "member@email.com", "5a99c8cac333affeed05a24fe0d6f61c", "avatar02", 0),
("member2", "member@email.com", "5a99c8cac333affeed05a24fe0d6f61c", "avatar02", 0),
("member3", "member@email.com", "5a99c8cac333affeed05a24fe0d6f61c", "avatar02", 0),
("member4", "member@email.com", "5a99c8cac333affeed05a24fe0d6f61c", "avatar02", 0),
("member5", "member@email.com", "5a99c8cac333affeed05a24fe0d6f61c", "avatar02", 0),
("member6", "member@email.com", "5a99c8cac333affeed05a24fe0d6f61c", "avatar02", 0),
("member7", "member@email.com", "5a99c8cac333affeed05a24fe0d6f61c", "avatar03", 0);
