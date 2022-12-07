<?php

class Validation
{
    public static function checkName($name)
    {
        if (strlen($name) >= 3) {
            return true;
        }
        return false;
    }

    public static function checkDescription($description)
    {
        if (strlen($description) >= 10) {
            return true;
        }
        return false;
    }
}