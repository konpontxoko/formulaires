echo "creation table"
mysql -u root -p <  01_creation_baiorepar.sql
echo "injection données"
mysql -u root -p <  04_insertion_baiorepar.sql
