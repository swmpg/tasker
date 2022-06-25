<?php
/**
 *  Родительский класс для моделей
 */
class Model {
    protected $db = null;

    // любая модель подключается к бд
    public function __construct() {
        $this->db = DB::connToDB();   
    }
}
