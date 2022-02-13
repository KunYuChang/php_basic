<?php
// 嚴格模式 (一定要放在程式碼最上方)
declare(strict_types=1);

class Person
{
    // 使用常數來定義人類心臟 (固定只有一顆)
    const HEART = 1;

    // 寫在Class裡面的變數被稱為屬性(Property)
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
        echo __CLASS__ . ' created';
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function printHeart()
    {
        // 要用 self 呼叫常數
        $heart = self::HEART;
        echo "心臟數: " . $heart;
    }
}

$person1 = new Person('John Doe', 'jdoe@gmail.com');

echo $person1->getName();
