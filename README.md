# prueba_sf5

Pasos para ejecutar la aplicación.

1. Requisitos:

    - Instalar docker y docker-compose
    
    - Crear una red en docker: *docker network create -d bridge my-network*

2. Ejecutar comando *docker-compose build*

3. Ejecutar comando *docker-compose up -d*

4. Modificar el archivo hosts del sistema operativo y agregar: *127.0.0.1 app.com.com*

5. Acceder al navegador por la URL http://app.com.com:8083. Si no funciona debes agregarlo como excepción en las reglas del navegador, en caso que estés usando un proxy.s

6. En la carpeta **www/app** se encuentra el código de la aplicación y su **Readme**, con los detalles correspondientes a la aplicación.

7. Si desea solamente obtener el código de la aplicación, copie el contenido de la carpeta **www/app**