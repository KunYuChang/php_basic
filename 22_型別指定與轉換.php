<?php
// 嚴格模式 (一定要放在程式碼最上方)
declare(strict_types=1);

class Person
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    static function printName(Person $person)
    {
        echo $person->name;
    }

    // 如果沒有使用嚴格模式，事情會跟你想的不一樣。
    // PHP 的引數如果是數字會被自動轉型成字串，所以會被判斷是符合條件的!
    static function printStr(String $str)
    {
        echo $str;
    }

    static function printNumber(Int $number)
    {
        echo $number;
    }
}

class Student extends Person
{
}

class Teacher extends Person
{
}

class Dog
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
}

$student = new Student("小明");
$teacher = new Teacher("大華");
$dog = new Dog("小白");


// 嚴格模式下可以使用強制轉型來傳入資料
// 關於轉型，PHP 可以接受正常的轉型，例如數字轉字串，
// 但不支援特殊轉型，例如Teacher轉Person (有的程式語言可以轉)
$str = (string) 1;

Person::printName($teacher);
Person::printStr($str);
Person::printNumber($number);
