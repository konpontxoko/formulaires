-- demandeurs
INSERT INTO db_flo.demandeurs 
  VALUES(DEFAULT,'Alex','Lan','al@test.mail',06123456,'lavache',1);
INSERT INTO db_flo.demandeurs 
  VALUES(DEFAULT,'Flo','Lass','coucou@pizzacoca.fr',06123456,'lavache',2);

-- demandes
INSERT INTO db_flo.demandes 
  VALUES(DEFAULT,1,1,'roue cassée','al@test.mail');
INSERT INTO db_flo.demandes 
  VALUES(DEFAULT,1,2,'Voiture','roue cassée','al@test.mail');
INSERT INTO db_flo.demandes 
  VALUES(DEFAULT,1,3,'Avion','aile cassée','al@test.mail');


INSERT INTO db_flo.objets 
  VALUES(1,1,'Poussette',3,);
INSERT INTO db_flo.objets 
  VALUES(2,1,'Voiture',2,);
INSERT INTO db_flo.objets 
  VALUES(3,1,'Avion',1,);

INSERT INTO db_flo.stocks 
  VALUES(1,'Maison alex','1 rue Bayonne','al@test.mail',);
INSERT INTO db_flo.stocks 
  VALUES(2,'Maison Flo','27 rue Tarnos','coucou@pizzacoca.fr',);
INSERT INTO db_flo.stocks 
  VALUES(3,'aerodrome alex','Aeroport Bayonne','al@test.mail',);

