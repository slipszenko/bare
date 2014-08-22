<?php

class FrontController extends AbstractController {

    public static function home() {
        self::$smarty->display('front/home.tpl');
    }

}