<?php
declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
require "GuestBook.php";
require "Post.php";
require "guestbookview.php";

/*class Loader
{
    private $obj = null;

    public function jsonToObject($json)
    {
        if (!isset($this->obj)) {
            $this->obj = json_decode(file_get_contents($json), true);
        }
        return $this->obj;
    }
}*/




