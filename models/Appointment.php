<?php
namespace models;
use DateTime;
// entities/Appointment.php
class Appointment {
    private $pet;
    private $dateTime;

    public function __construct(Pet $pet, DateTime $dateTime) {
        $this->pet = $pet;
        $this->dateTime = $dateTime;
    }

    public function getPet() {
        return $this->pet;
    }

    public function getDateTime() {
        return $this->dateTime;
    }
}
