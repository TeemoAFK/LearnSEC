# LearnSEC
Este es un proyecto desarrollado con PHP, y Symfony, cuya meta es la socialización de la lengua de señas ecuatoriana (LSEC) con la comunidad. Esta es la primera versión, cuya meta es un alcance mayor para la integración de la comunidad sorda con la sociedad. 

## Desarrollo del Proyecto
El desarrollo del proyecto fue hecho con las siguientes herramientas:
1. Symfony CLI 4.23.2
2. Composer 2.0.11 
3. PHP Version 8.0.3
4. Visual Studio Code (Editor de texto)

##  Manejo de Gráficos.
Los iconos y gráficos, así como el desarrollo de los mocukps fueron realizados con Figma, misma que es una alternativa al uso de Adobe Illustrator. 
Para el desarrollo de los GIF para el vocabulario, se uilizó la herramienta Canva. 

##  Despliegue de la aplicación WEB
Para el despliegue de la aplicación WEB, se utilizó Heroku. 
Para ello se realizó el despliegue de la aplicación, con los paquetes adicionales, para hacer uso de las herraminetas, se usa composer y las dependecias necesarias para usar con Apache.

```
$ composer require symfony/apache-pack

$ git add composer.json composer.lock symfony.lock public/.htaccess

$ git commit -m "apache-pack"
```
Para el despliegue es necesario, crear un archivo PROCFILE, mismo, que hará la corrección de rutas.

```
$ echo 'web: heroku-php-apache2 public/' > Procfile

$ git add Procfile

$ git commit -m "Heroku Procfile"
```
El enrutamiento HTTP de Heroku enruta cada solicitud a través de una capa de proxies inversos que son, entre otras cosas, responsables del equilibrio de carga y la terminación de las conexiones SSL. 
Esto significa que las solicitudes recibidas por un dyno tendrán la dirección IP del último router en la variable de entorno, y la solicitud interna siempre se realizará utilizando el protocolo HTTP, incluso si la solicitud original se realizó a través de HTTPS.
También es importante evitar que Symfony confíe en los encabezados Reenviados y X-Forwarded-Host, porque el router de Heroku no los establece, pero Symfony confía en ellos fuera de la caja una vez que se establece un proxy de confianza.
Esto se puede lograr estableciendo el método de confianza de proxy en , que es una abreviatura para la notación alternativa, .HEADER_X_FORWARDED_AWS_ELBRequest::HEADER_X_FORWARDED_ALL ^ Request::HEADER_X_FORWARDED_HOST
```
$trustedProxies = $_SERVER['TRUSTED_PROXIES'] ?? $_ENV['TRUSTED_PROXIES'] ?? false;
$trustedProxies = $trustedProxies ? explode(',', $trustedProxies) : [];
if($_SERVER['APP_ENV'] == 'prod') $trustedProxies[] = $_SERVER['REMOTE_ADDR'];
if($trustedProxies) {
    Request::setTrustedProxies($trustedProxies, Request::HEADER_X_FORWARDED_AWS_ELB);
}
```
