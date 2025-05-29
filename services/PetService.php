<?php
namespace services;

use repositories\PetRepository;
use models\Pet;

class PetService {
    private $petRepository;

    public function __construct(PetRepository $petRepository) {
        $this->petRepository = $petRepository;
    }

    public function getAllPets() {
        return $this->petRepository->findAll();
    }

    public function getPetById($id) {
        return $this->petRepository->find($id);
    }

    public function savePet(Pet $pet) {
        return $this->petRepository->save($pet);
    }
}