<?php


namespace App\Domain\User;

use App\Domain\Message\Contracts\MessageContract;

/**
 * Class User
 * Класс простых пользователей
 *
 * @package App\Domain\User
 */
class User extends AbstractUser
{
    /**
     * @param MessageContract $message
     * @return bool
     */
    public function canEdit(MessageContract $message) : bool
    {
        return $message->getUser()->getId() == $this->id;
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