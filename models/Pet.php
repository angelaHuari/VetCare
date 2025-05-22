<?php
// entities/Pet.php
class Pet {
    private $name;
    private $species;
    private $owner;

    public function __construct($name, $species, Owner $owner) {
        $this->name = $name;
        $this->species = $species;
        $this->owner = $owner;
    }

    public function getName() {
        return $this->name;
    }

    public function getSpecies() {
        return $this->species;
    }

    public function getOwner() {
        return $this->owner;
    }
}
