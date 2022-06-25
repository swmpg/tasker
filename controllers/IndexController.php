<?php
/**
 * Контроллер главной страницы
 */

 class IndexController extends Controller {

    private $pageTpl = '/views/main.tpl.php';

    public function __construct() {
        $this->model = new IndexModel();
        $this->view = new View();
    }    

    public function index() {
        $this->pageData['title'] = 'Главная страница';
        $this->view->render($this->pageTpl, $this->pageData);
    }

 }