<?php
namespace Lib;

class ArrayLib
{
    public static function getAllLetters($isUpper = true)
    {
        if ($isUpper === true){
            return array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        }
        else{
            return array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
        }
    }
}