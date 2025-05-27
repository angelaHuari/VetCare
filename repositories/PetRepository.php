<?php
namespace repositories;
use interfaces\RepositoryInterface;
use config\Database;

class PetRepository implements RepositoryInterface {
    private $db;

    // Inyección de dependencias opcional para la base de datos
    public function __construct($db = null) {
        $this->db = $db ?? Database::connect();
    }

    public function findAll() {
        // Lógica para obtener todas las mascotas
        $stmt = $this->db->query("SELECT * FROM pets");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function find($id) {
        // Lógica para obtener una mascota por ID
        $stmt = $this->db->prepare("SELECT * FROM pets WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function save($pet) {
        // Lógica para guardar una mascota en la base de datos
        $stmt = $this->db->prepare(
            "INSERT INTO pets (name, species, breed, owner_id) VALUES (:name, :species, :breed, :owner_id)"
        );
        return $stmt->execute([
            'name' => $pet->getName(),
            'species' => $pet->getSpecies(),
            'breed' => $pet->getBreed(),
            'owner_id' => $pet->getOwnerId()
        ]);
    }
}