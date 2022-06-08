-- injection de la table
DROP SCHEMA db_site;

-- creation table demandeurs
CREATE SCHEMA db_site;
-- SET search_path TO db_site, public;

-- entités
CREATE TABLE db_site.demandeurs (
  num_demandeur serial NOT NULL,
  nom text NOT NULL,
  prenom text NOT NULL,
  email text NOT NULL,  
  mobile integer NOT NULL,  
  mdp text NOT NULL,
  --  clef
  PRIMARY KEY (num_demandeur),
  UNIQUE (email)
);

-- entités
CREATE TABLE db_site.demandes (
  num_demande serial NOT NULL,
  intitule text NOT NULL,
  message text NOT NULL,
  mail text NOT NULL,  
  photo BLOB,
  --  clef
  PRIMARY KEY (num_demande),
  UNIQUE (email, intitule),
  FOREIGN KEY (email) REFERENCES db_site.email(email)
);


