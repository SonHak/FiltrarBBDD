Accedemos a la siguiente página:
https://dev.mysql.com/doc/index-other.html

Buscamos el sql llamado "world database" y descargamos su gzip.

Nos dirigiremos a la carpeta donde se encuentra nuestro fichero y
lo descomprimimos. Example
   $~: cd Baixades/
   Baixades$: gunzip "nombredelfichero".gzip

Por último, añadimos nuestra tabla a la base de datos de la siguiente
manera:
  mysql -u root -p < "nombre del fichero descomprimido"

¡Y YA PODEMOS USAR LA TABLA!

