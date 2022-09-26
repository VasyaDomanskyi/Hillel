<?php
/**Создать родительский (главный класс)
Класс должен содержать 2 свойства
Каждое свойство должно иметь геттеры и сеттеры
должен содержать абстрактную функцию возведения в степень*/
class ClassName
{
    private $name;
    private $age;

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    private function isAgeCorrect($age)
    {
        return $age >= 18
            and $age <= 60;
    }
}
$obj = new ClassName;
$obj ->setAge(20);
var_dump($obj->getAge());
var_dump(pow ($obj-> getAge(), 2));






//не понял, как складывать элементы родительского класса и наследника.
class ClassName2
{
    public string $name = 'Joe';
    public int  $age = 22;
}

class FullBar extends ClassName2
{
    public function  getAge(): int
    {
        return  $this->age= 25;
    }
    public function setAge($age)
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = 25;
        }
    }
}

class FullBar2 extends FullBar
{
    public function  getAge(): int
    {
        return  $this->age= 30;
    }
    public function setAge($age)
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = 30;
        }
    }
}
 class FullBar3 extends FullBar2
 {
     public function getAge(): int
     {
         return $this->age = 40;
     }

     public function setAge($age)
     {
         if ($this->isAgeCorrect($age)) {
             $this->age = 40;
         }

     }

 }
$obj= new ClassName2();
$obj1= new FullBar();
$obj2= new FullBar2();
$obj3= new FullBar3();
var_dump ($obj->age);
echo '<br>';
var_dump($obj1->getAge());
//попытка
echo '<br>';
var_dump (gmp_add($obj1->getAge(),$age=22));



echo "с чего начинать 3 задание?";
echo "пока так..."














    /**  public function test_function (int $a): int
    {
     return $this->test= $a;

    }

    public function get_Test (): int
    {
        return $this->test;
    }
}

class FullBar extends ClassName
    {
        public function print_str (string $str): string
        {
           return $this->string . $str;
        }

    }
$obj1 = new FullBar;

var_dump($obj1->test_function(10));
var_dump($obj1->get_test());
var_dump($obj1->print_str("str ->func"));
*/
