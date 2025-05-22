<?php
// repositories/AppointmentRepository.php
class AppointmentRepository implements RepositoryInterface {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function findAll() {
        // Lógica para obtener todas las citas
    }

    public function findById($id) {
        // Lógica para obtener una cita por ID
    }

    public function save($appointment) {
        // Lógica para guardar una cita en la base de datos
    }
}
