<?php
// page.php
class Page {
    public static function part($title) {
        include "./views/components/$title.php";
    }
}