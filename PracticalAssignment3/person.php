<?php
    /**
     * Clase PERSON
     * 
     * Define los atributos esenciales de una persona en la cual nos serviran 
     * para poder extenderlos hacia la clase siguiente "professor.php"
     */
    abstract class Person {
        protected $id;
        protected $firstName;
        protected $lastName;
        protected $city;
        /** 
        * Creamos en constructor la funcion que sera __construct y que tendra dentro los valores de la clase persona
        */
        public function __construct($id, $firstName, $lastName, $city) {
            $this->id = $id;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->city = $city;
        }
        /**
         * con sus respectivos GET; SET; del ID, FirstName ,LastName y City
         */

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getFirstName() {
            return $this->firstName;
        }

        public function setFirstName($firstName) {
            $this->firstName = $firstName;
        }

        public function getLastName() {
            return $this->lastName;
        }

        public function setLastName($lastName) {
            $this->lastName = $lastName;
        }

        public function getCity() {
            return $this->city;
        }

        public function setCity($city) {
            $this->city = $city;
        }
    }