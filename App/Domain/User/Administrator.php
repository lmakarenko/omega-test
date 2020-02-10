<?php


namespace App\Domain\User;

use App\Domain\Message\Contracts\MessageContract;

/**
 * Class Administrator
 * Класс пользователей-администраторов
 *
 * @package App\Domain\User
 */
class Administrator extends AbstractUser
{
    /**
     * @param MessageContract $message
     * @return bool
     */
    public function canEdit(MessageContract $message) : bool
    {
        return true;
    }

    /**
     * @param MessageContract $message
     * @return bool
     */
    public function canDelete(MessageContract $message) : bool
    {
        return true;
    }
}