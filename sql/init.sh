echo "quelle base de donnée doit etre mise à jour ? [flo]"
echo -e "main \n flo \n alex \n yacou "
read dbUser
dbUser=${dbUser:=main}
echo $dbUser

echo "ecrasement tables db_$dbUser"
mysql -u admin_db_$dbUser -p <  01_creation_baiorepar_$dbUser.sql
echo "injection données dans db_$dbUser"
mysql -u admin_db_$dbUser -p <  04_insertion_baiorepar_$dbUser.sql

echo "nettoyage des fichiers temporaires"
rm 01_creation_baiorepar_$dbUser.sql 04_insertion_baiorepar_$dbUser.sql


