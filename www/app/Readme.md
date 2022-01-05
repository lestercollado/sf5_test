**Calculadora**

1. Se implementó un servicio con el nombre de Operations. Ubicado en la carpeta Service dentro de src.

2. El servicio tiene un método operationCommand, con un switch para el manejo de las distintas operaciones y sus posibles resultados en el caso del método a utilizar para el comando.

    2.1 En el caso del método operation para el controlador, se realizó de forma dinámica para no tener que validar por cada operación de forma manual.

3. Se implementó un controlador en la carpeta Controller llamado OperationController, en el cual se especifica la ruta para consumir el servicio web y se manejan las respuestas del servidor con sus correspondientes estados.

4. Se implementó un comando en la carpeta Command, con el comando OperationsCommand, en el cual se utiliza el servicio antes implementado.

5. En el archivo config/service.yaml se registró el comando como un servicio y además se inyecta el controlador para que sea usado como servicio.

6. Para utilizar el comando debe escribir: bin/console app:operations operandA operandB operation. Por ejemplo: bin/console app:operations 4 5 add. El resultado del comando anterior es 9.

7. En la carpeta test, se escribieron 2 métodos de prueba de ejemplo para verificar la utilización del servicio. Para verificar ejecutar el comando: bin/phpunit

8. Las operaciones disponibles son:

    **add**: Sumar

    **diff**: Restar
    
    **div**: Dividir

    **mul**: Multiplicar