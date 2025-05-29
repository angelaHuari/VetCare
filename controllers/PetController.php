<?php
namespace controllers;

use services\PetService;
use models\Pet;

class PetController {
    private $petService;

    public function __construct(PetService $petService) {
        $this->petService = $petService;
    }

    public function index() {
        $pets = $this->petService->getAllPets();
        include __DIR__ . '/../views/pet/list.php';
    }
    public function create( ) {
        include __DIR__ . '/../views/pet/register.php';
    }

    public function show($id) {
        $pet = $this->petService->getPetById($id);
        include __DIR__ . '/../views/pet/show.php';
    }

    // Maneja el registro (POST)
    public function store($postData) {
        
        if (
            empty($postData['name']) ||
            empty($postData['species']) ||
            empty($postData['breed']) ||
            empty($postData['owner_id'])
        ) {
            echo "Todos los campos son obligatorios.";
            return;
        }

        $pet = new Pet(
            $postData['name'],
            $postData['species'],
            $postData['breed'],
            (int)$postData['owner_id']
        );

        $saved = $this->petService->savePet($pet);

        if ($saved) {
            header("Location: index.php?view=pet&success=1");
            exit;
        } else {
            echo "Error al guardar la mascota.";
        }
    }
}