-- injection de la table
DROP SCHEMA db_site  ;
--SET search_path TO db_site, public;

-- creation table demandeurs
CREATE SCHEMA db_site;
-- SET search_path TO db_site, public;

-- DROP TABLE db_sites.demandeurs;
-- DROP TABLE db_sites.demandes;

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

-- demandes
CREATE TABLE db_site.demandes (
  num_demande serial NOT NULL,
  num_objet integer NOT NULL,
  message text NOT NULL,
  email text NOT NULL,
  --  clef
  PRIMARY KEY (num_demande)
  UNIQUE (email)
  FOREIGN KEY (email) REFERENCES demandeurs.email
);


CREATE TABLE db_site.objets (
  num_objet integer NOT NULL,
  num_stock,
  intitule text NOT NULL,
  qtite integer DEFAULT 0,
  photo BLOB,
  -- clef
  PRIMARY KEY (num_objet)
);

CREATE TABLE stocks (
	num_stock integer NOT NULL,
	nom text NOT NULL,
	adresse NOT NULL,
  	email text NOT NULL,
  -- clef
  PRIMARY KEY (num_stock),
  UNIQUE (email)
);


