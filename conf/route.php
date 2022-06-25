<?php
/**
 * Класс маршрутизации
 */
class Routing {
    public static function buildRoute() {
        // данные по умолчанию
        $modelName = "IndexModel"; // модель главной страницы
        $controllerName = "IndexController"; // контроллер главной стрницы
        $action = "index"; // метод класса

        //возвращается массив из двух элементов 
        //например: из http://tasker/cabinet/user возваратится массив с $route[1] = cabinet (контроллер) и $route[2] = user (экшн)
        $route = explode("/", $_SERVER['REQUEST_URI']); 

        // проверяем на существование controller (ucfirst() - делаем первую букву строчной)
        if ($route[1] != '') {
            $controllerName = ucfirst($route[1] . "Controller"); 
            $modelName = ucfirst($route[1] . "Model");
        }

        //подключаем нужные файлы: если не определено, то начальная страницы, иначе определенная через url
        include_once CONTROLLER_PATH . $controllerName . ".php";
        include_once MODEL_PATH . $modelName . ".php";

        // проверяем на существование action
        if ($route[2] != "") {
            $action = $route[2]; 
        }

        // создаем объект класса controllerName()
        $controller = new $controllerName();
        // запускаем метод
        // например: controller->index()
        $controller->$action();
    }
 }