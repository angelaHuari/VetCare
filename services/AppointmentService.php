<?php
namespace services;
use models\Appointment;
use interfaces\RepositoryInterface;
use interfaces\NotificationInterface;

class AppointmentService {
    private $repo;
    private $notifier;

    public function __construct(RepositoryInterface $repo, NotificationInterface $notifier) {
        $this->repo = $repo;
        $this->notifier = $notifier;
    }

    public function createAppointment(Appointment $appointment) {
        $this->repo->save($appointment);
        $this->notifier->send("Cita agendada para la mascota: " . $appointment->getPet()->getName());
    }
}
