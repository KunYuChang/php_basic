<?php

class Person
{
    public static $ageLimit = 40; // 靜態屬性

    public static function greet()
    {
        echo "大家好";
    }
}

echo Person::$ageLimit;
echo Person::$greet();
