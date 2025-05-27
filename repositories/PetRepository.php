<?php
namespace repositories;
use interfaces\RepositoryInterface;
use config\Database;
use PDO;
// Repositorio de mascotas que implementa la interfaz RepositoryInterface

class PetRepository implements RepositoryInterface {
    private $db;

    // Inyección de dependencias opcional para la base de datos
    public function __construct($db = null) {
        $this->db = $db ?? Database::connect();
    }

    public function findAll() {
        try {
            $stmt = $this->db->query("SELECT * FROM pets"); // ← corregido
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            error_log("Error en PetRepository::findAll: " . $e->getMessage());
            return [];
        }
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
    public function findById($id) {
        try {
            $stmt = $this->db->prepare("SELECT * FROM pets WHERE id = :id");
            $stmt->execute(['id' => $id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            error_log("Error en PetRepository::findById: " . $e->getMessage());
            return null;
        }
    }
}