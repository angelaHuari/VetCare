<?php
namespace services;
use interfaces\NotificationInterface;
// utils/EmailNotifier.php
class EmailNotifier implements NotificationInterface {
    public function send($message) {
        echo "Enviando email: $message";
    }
}
