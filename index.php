<?php
  $_bienA ="Hello";
  $_bienB = 18;
  echo $_bienB;
  var_dump($_bienA) ; //string
  $ten = array("Hảo", "Lan","Hà");
  print_r($ten);
  $_bool = (boolean) false;
  echo $_bool;
  
  class Person {
    public $name;
    public $age;
    public $gender;

    public function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function introduce() {
        echo "Hello, my name is " . $this->name . ". I am " . $this->age . " years old and I am " . $this->gender . ".";
    }
}

// Tạo một object từ class Person
$person = new Person("John", 25, "male");

// Truy cập vào các thuộc tính và phương thức của object
echo $person->name; // John

$person->introduce(); // Hello, my name is John. I am 25 years old and I am male.

?>