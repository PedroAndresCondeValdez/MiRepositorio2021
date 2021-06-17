<?php
    /**
     * Professor
     * 
     * Define los atributos característicos de los profesores
     * 
     * 
     * Primero heredamos la clase person.php para poder utilizarla y añadirle los 
     * nuevos atributos que en este caso son: 
     * years_experience y salary
     */

    require 'person.php';

    class Professor  extends Person implements JsonSerializable {
        private $years_experience;
        private $salary;
        /**
         * Aqui es donde implementamos los atributos nuevos con su respectivo get; set;
         */
        public function __construct($firstName, $lastName, $city, $years_experience,$salary, $id = null) {
            parent::__construct($id, $firstName, $lastName, $city);
            $this->years_experience = $years_experience;
            $this->salary = $salary;
        }

        public function getYearsExperience() {
            return $this->years_experience;
        }

        public function setYearsExperience($years_experience) {
            $this->years_experience = $years_experience;
        }
        public function getSalary() {
            return $this->salary;
        }

        public function setSalary($salary) {
            $this->salary = $salary;
        }
        
        public function jsonSerialize() {
            return [
                'id' => $this->id,
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'city' => $this->city,
                'years_experience' => $this->years_experience,
                'salary' => $this->salary
            ];
        }
    }