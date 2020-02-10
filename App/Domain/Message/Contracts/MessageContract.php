<?php


namespace App\Domain\Message\Contracts;

use App\Domain\User\Contracts\UserContract;

/**
 * Interface MessageContract
 * Интерфейс для сущностей сообщений пользователей
 */
interface MessageContract
{
    public function getUser() : UserContract;

    public function setUser(UserContract $user);

    public function getText() : string;

    public function setText(string $text);
}