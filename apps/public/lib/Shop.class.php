<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 27.10.2018
 * Time: 23:49
 */

class Shop
{
    static public function slugify($text)
    {
        // replace all non letters or digits by -
        $text = preg_replace('/\W+/', '-', $text);

        // trim and lowercase
        $text = strtolower(trim($text, '-'));

        return $text;
    }
}
?>