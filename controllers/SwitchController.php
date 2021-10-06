<?php
class SwitchController {
    public static function getGenesisController() {
        require_once('GenesisController.php');
        return new GenesisController();
    }

    public static function getBookController() {
        require_once('BooksController.php');
        return new BooksController();
    }

    public static function getContactController() {
        require_once('ContactController.php');
        return new ContactController();
    }

    public static function getHomeController() {
        require_once('HomeController.php');
        return new HomeController();
    }
}