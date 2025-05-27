<?php
namespace controllers;

use services\PetService;

class PetController {
    private $petService;

    // Inyección de dependencias por el constructor
    public function __construct(PetService $petService) {
        $this->petService = $petService;
    }

    public function index() {
        // Lógica para mostrar todas las mascotas
        $pets = $this->petService->getAllPets();
        include __DIR__ . '/../views/pet/list.php';
    }

    public function show($id) {
        $pet = $this->petService->getPetById($id);
        include __DIR__ . '/../views/pet/show.php';
    }
}