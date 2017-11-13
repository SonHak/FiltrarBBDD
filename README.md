Cogemos el fichero sql que incluye este repositorio llamado world.sql
donde se encuentra nuestra tabla y hacemos lo siguiente:

Añadimos nuestra tabla a la base de datos de la siguiente
manera:
  mysql -u root -p < "nombre del fichero descomprimido"

¡Y YA PODEMOS USAR LA TABLA!


--------------------------------------------------------------------
(EN CASO DE QUE EL FICHERO NO ESTÉ EN EL REPOSITORIO O NO FUNCIONE CORRECTAMENTE)
Accedemos a la siguiente página:
https://dev.mysql.com/doc/index-other.html

Buscamos el sql llamado "world database" y descargamos su gzip.

Nos dirigiremos a la carpeta donde se encuentra nuestro fichero y
lo descomprimimos. Example
   $~: cd Baixades/
   Baixades$: gunzip "nombredelfichero".gzip
   Y copiamos el fichero sql descomprimido a nuestro repositorio
