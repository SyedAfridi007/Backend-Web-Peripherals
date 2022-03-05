<?php
class student{
    public $name;
    public $id;
    public $age;
 

 public function __construct($name, $id ,$age) { 
        $this->name = $name;
        $this->id = $id;
        $this->age = $age;
    }

   public function message() {
       return "Name =". $this->name ."ID =". $this->id ."Age =" . $this->age ."  ";
      
    }
}

    $students = new student ("Syed", "18-38545-2", "22");
    echo $students -> message();

?>