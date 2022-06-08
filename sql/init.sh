echo "creation table"
mysql -u site_db_admin -p <  01_creation_baiorepar.sql
echo "injection données"
mysql -u site_db_admin -p <  04_insertion_baiorepar.sql
