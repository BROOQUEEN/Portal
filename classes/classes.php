<?php

    class User{
        public $full_name;
        public $login;
        public $age;
        public $position;
        public $salary;
        public function __construct($full_name, $login, $age, $position, $salary) {
            $this->full_name = $full_name;
            $this->login = $login;
            $this->age = $age;
            $this->position = $position;
            $this->salary = $salary;
            echo "Был создан объект с параметрами $full_name, $login, $age, $position, $salary"
        }
        function fullINFO() {
            return "Полная информация о сотруднике: " . $this->full_name . " " . $this->login . " " . $this->age . " " . $this->position . " " . $this->salary;
        }
    }

    


?>