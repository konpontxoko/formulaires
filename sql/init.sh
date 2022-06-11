echo "quelle base de donnée doit etre mise à jour ?"
echo -e "main \n flo \n alex \n yacou "
read dbUser

echo "ecrasement tables db_$dbUser"
mysql -u admin_db_$dbUser -p <  01_creation_baiorepar.sql
echo "injection données dans db_$dbUser"
mysql -u admin_db_$dbUser -p <  04_insertion_baiorepar.sql
