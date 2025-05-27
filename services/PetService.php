<?php
namespace services;

use repositories\PetRepository;

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
}