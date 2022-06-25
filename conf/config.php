<?php 
/**
 * Файл конфигурации
 */

 //определяем константы
define("ROOT", '..'); // путь к файлу
define("CONTROLLER_PATH", ROOT. "/controllers/"); // путь к контроллерам
define("MODEL_PATH", ROOT. "/models/");// путь к моделям
define("VIEW_PATH", ROOT. "/views/");// путь к представлениям

// подключение файлов, нужных для всего приложения
require_once("db.php"); // подключение к бд
require_once("route.php"); // файл с маршрутизацией
require_once MODEL_PATH. 'Model.php'; // общий файл моделей
require_once VIEW_PATH. 'View.php'; // общий файл представлений
require_once CONTROLLER_PATH. 'Controller.php'; // общий файл контроллеров

//подключение роутинга
Routing::buildRoute();
