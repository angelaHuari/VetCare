<?php
require_once 'autoload.php';

use controllers\PetController;
use services\PetService;
use repositories\PetRepository;

$petRepository = new PetRepository();
$petService = new PetService($petRepository);
$petController = new PetController($petService);

include 'views/layout/header.php';

$view = $_GET['view'] ?? 'home';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ejemplo para PetController
    if ($view === 'pet' && isset($_POST['action']) && $_POST['action'] === 'store') {
        $petController->store($_POST);
    }
} else {
    // GET
    switch ($view) {
        case 'pet':
            $petController->index();
        case 'pet.create':
            $petController->create();
            break;
        case 'owner':
            include 'views/owner/register.php';
            break;
        case 'appointment':
            include 'views/appointment/create.php';
            break;
        default:
            echo '<div class="container">';
            echo '<h2>Bienvenido al sistema de gestión de citas veterinarias</h2>';
            echo '<p>Por favor seleccione una opción para empezar:</p>';
            echo '<ul>';
            echo '<li><a href="?view=pet.create">Registrar Mascota</a></li>';
            echo '<li><a href="?view=pet">Ver Mascotas</a></li>';
            echo '<li><a href="?view=owner">Registrar Dueño</a></li>';
            echo '<li><a href="?view=appointment">Crear Cita</a></li>';
            echo '</ul>';
            echo '</div>';
            break;
    }
}

include 'views/layout/footer.php';
// require_once 'autoload.php';

// use models\Owner;
// use models\Pet;
// use models\Appointment;
// use repositories\AppointmentRepository;
// use interfaces\NotificationInterface;
// use interfaces\RepositoryInterface;
// use services\AppointmentService;
// use services\EmailNotifier;



// $owner = new Owner(1,"Juan", "juan@gmail.com");
// $pet = new Pet("Catt", "Perro","perro", 1);
// $appointment = new Appointment($pet, new DateTime("2025-05-23 15:00"));

// $repo = new AppointmentRepository();
// $notifier = new EmailNotifier();

// $service = new AppointmentService($repo, $notifier);
// $service->createAppointment($appointment);
// use controllers\PetController;
// use services\PetService;
// use repositories\PetRepository;

// // Inyección de dependencias
// $petRepository = new PetRepository();
// $petService = new PetService($petRepository);
// $petController = new PetController($petService);

// // index.php
// include 'views/layout/header.php';


// $view = isset($_GET['view']) ? $_GET['view'] : 'home'; // Si no se pasa "view", mostramos la página de inicio

// // Cargar la vista correspondiente
// switch ($view) {
//     case 'pet':
//         include 'views/pet/register.php';
//         break;
//     case 'owner':
//         include 'views/owner/register.php';
//         break;
//     case 'appointment':
//         include 'views/appointment/create.php';
//         break;
//     default:
//         // Página de inicio (se puede personalizar más tarde)
//         echo '<div class="container">';
//         echo '<h2>Bienvenido al sistema de gestión de citas veterinarias</h2>';
//         echo '<p>Por favor seleccione una opción para empezar:</p>';
//         echo '<ul>';
//         echo '<li><a href="?view=pet">Registrar Mascota</a></li>';
//         echo '<li><a href="?view=owner">Registrar Dueño</a></li>';
//         echo '<li><a href="?view=appointment">Crear Cita</a></li>';
//         echo '</ul>';
//         echo '</div>';
//         break;
// }

// include 'views/layout/footer.php';
