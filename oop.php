<?php
    class Person{
        // Public means that you can access it from anywhere outside the class
        // Private means that you can only access it in this class
        // Protected = only access it from this class and classes that extend this class
        private $name;
        private $email;
        private static $ageLimit = 40;

        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__.' Created<br>';
        }

        public function __destruct(){
            echo __CLASS__.' destroyed<br>';
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name.'<br>';
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email.'<br>';
        }

        public static function getAgeLimit(){
            return self::$ageLimit;
        }
    }
    // Static props and methods
    // echo Person::$ageLimit;
    // echo Person::getAgeLimit();

    // instantiate person object
    // $person1 = new Person('John Doe', 'test@test.com');

    // $person1->setName('John Doe');
    // echo $person1->getName();

    class Customer extends Person{
        private $balance;

        public function __construct($name, $email, $balance){
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'A new '.__CLASS__.' has been created<br>';
        }

        public function setBalance($balance){
            $this->balance = $balance;
        }

        public function getBalance(){
            return $this->balance.'<br>';
        }
    }

    // $customer1 = new Customer('John Doe', 'test@test.com', 300);
    // echo $customer1->getBalance();
?>