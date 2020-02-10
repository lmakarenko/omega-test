<?php


namespace App\Domain\User\Contracts;

use App\Domain\Message\Contracts\MessageContract;

/**
 * Interface UserContract
 * Интерфейс для сущностей пользователей
 */
interface UserContract
{
    public function canEdit(MessageContract $mesage) : bool;

    public function canDelete(MessageContract $mesage) : bool;

    public function getId() : int;

    public function getName() : string;
}