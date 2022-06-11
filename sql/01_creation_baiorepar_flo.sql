-- injection de la table
DROP SCHEMA db_flo  ;
--SET search_path TO db_flo, public;

-- creation table demandeurs
CREATE SCHEMA db_flo;
-- SET search_path TO db_flo, public;

-- DROP TABLE db_flos.demandeurs;
-- DROP TABLE db_flos.demandes;

-- entités
CREATE TABLE db_flo.demandeurs (
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
CREATE TABLE db_flo.demandes (
  num_demande serial NOT NULL,
  num_objet integer NOT NULL,
  message text NOT NULL,
  email text NOT NULL,
  --  clef
  PRIMARY KEY (num_demande)
  UNIQUE (email)
  FOREIGN KEY (email) REFERENCES demandeurs.email
);


CREATE TABLE db_flo.objets (
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


