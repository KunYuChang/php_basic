<?php

// PHP Class 當中呼叫變數使用this->
// 呼叫常數與靜態方法使用self::

// "繼承"是一個"延伸"的概念

class Person
{
    public $name = '沒指定';

    function printFullName()
    {
        echo $this->name;
    }
}

class Student extends Person
{
    const BR_TAG = '<br>';

    // 寫在Class裡面的變數被稱為屬性(Property)
    public $name = '小明';
    public $mathScore = 30;
    public $englishScore = 20;
    public $historyScore = 91;

    // 建構子
    public function __construct($name, $mathScore, $englishScore, $historyScore)
    {
        $this->name = $name;
        $this->mathScore = $mathScore;
        $this->englishScore = $englishScore;
        $this->historyScore = $historyScore;
    }

    public function printName()
    {
        // 要用 self 呼叫常數
        $br = self::BR_TAG;
        echo "姓名: {$this->name}{$br}";
    }

    public function printMathScore()
    {
        echo "數學成績: 
        $this->mathScore <br>";
    }

    // 靜態方法
    static function isStudentBetterThanMe($student1, $student2)
    {
        if ($student1->mathScore > $student2->mathScore) {
            echo "{$student1->name}數學成績好";
        } else if ($student1->mathScore < $student2->mathScore) {
            echo "{$student2->name}數學成績好";
        } else {
            echo "兩個一樣好";
        }
    }
}

class Teacher extends Person
{
    public $firstName;
    public $lastName;

    function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    // 宣告跟繼承一樣的方法名的話就可以覆蓋掉繼承過來的內容
    function printFullName()
    {
        // 或者可以使用 parent:: 使之都執行
        parent::printFullName();
        echo $this->firstName . $this->lastName;
    }
}

class Engineer extends Person
{
    function __construct($name)
    {
        $this->name = $name;
    }
}
