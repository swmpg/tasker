<?php
/**
 * Родительский класс для представлений
 */
class View {
    /**
     * Рендерит страницу в зависиости от шаблона и данных
     */
    public function render($tpl, $pageData) {
        include_once ROOT . $tpl;
    }
}