<?php

// Application entrypoint

// Load constants
require_once 'Library/Constants.php';

// Initiate class autoloader
require_once 'Library/Autoload.php';

use App\Domain\Message\Contracts\MessageContract,
    App\Domain\Message\Message,
    App\Domain\User\User,
    App\Domain\User\Manager,
    App\Domain\User\Administrator;

/**
 * Создание обьектов всех типов пользователей
 */
$user = new User(1, 'User');
$manager = new Manager(2, 'Manager');
$admin = new Administrator(3, 'Administrator');

/**
 * Создание сообщения простого пользователя
 */
$messages[] = new Message($user, 'Simple message by simple user');

/**
 * Создание сообщения менеджера
 */
$messages[] = new Message($manager, 'Simple message by manager');

/**
 * Создание сообщения администратора
 */
$messages[] = new Message($admin, 'Simple message by administrator');

/**
 * Проверка каждого сообщения на всех типах пользователей
 */
array_walk($messages, function (MessageContract $message) use ($user, $manager, $admin) {
    echo "Message: {$message->getText()}<br/><br/>";
    // Проверка на возможность редактирования/удаления сообщения простым пользователем
    if($user->canDelete($message)) {
        echo $user->getName(),  " can delete a message:  <br/>";
    }
    if($user->canEdit($message)) {
        echo $user->getName(), " can edit a message<br/>";
    }
    // Проверка на возможность редактирования/удаления сообщения менеджером
    if($manager->canDelete($message)) {
        echo $manager->getName(), " can delete a message<br/>";
    }
    if($manager->canEdit($message)) {
        echo $manager->getName(), " can edit a message<br/>";
    }
    // Проверка на возможность редактирования/удаления сообщения администратором
    if($admin->canDelete($message)) {
        echo $admin->getName(), " can delete a message<br/>";
    }
    if($admin->canEdit($message)) {
        echo $admin->getName(), " can edit a message<br/>";
    }
    echo "<br/><br/>";
});

