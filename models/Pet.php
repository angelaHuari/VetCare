<?php
namespace models;
// models/Pet.php
class Pet {
    private $id;
    private $name;
    private $species;
    private $breed;
    private $ownerId;

    public function __construct($name, $species, $breed, $ownerId) {
        $this->name = $name;
        $this->species = $species;
        $this->breed = $breed;
        $this->ownerId = $ownerId;
    }

    public function getName() {
        return $this->name;
    }

    public function getSpecies() {
        return $this->species;
    }

    public function getBreed() {
        return $this->breed;
    }

    public function getOwnerId() {
        return $this->ownerId;
    }
    
    public function getId() {
        return $this->id;
    }
}
