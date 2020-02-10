<?php


namespace App\Domain\User;

use App\Domain\Message\Contracts\MessageContract;

/**
 * Class Manager
 * Класс пользователей-менеджеров
 *
 * @package App\Domain\User
 */
class Manager extends AbstractUser
{
    /**
     * @param MessageContract $message
     * @return bool
     */
    public function canEdit(MessageContract $message) : bool
    {
        $messageUser = $message->getUser();
        if($messageUser->getId() == $this->id || $messageUser instanceof User) {
            return true;
        }
        return false;
    }

    /**
     * @param MessageContract $message
     * @return bool
     */
    final public function canDelete(MessageContract $message) : bool
    {
        return false;
    }
}