<?php


namespace App\Domain\User;

use App\Domain\User\Contracts\UserContract,
    App\Domain\Message\Contracts\MessageContract;

/**
 * Class AbstractUser
 * Абстрактный класс пользователей
 *
 * @package App\Domain\User
 */
abstract class AbstractUser implements UserContract
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * Возвращает id пользователя
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     *
     *
     * @param MessageContract $message
     * @return Boolean
     */
    abstract public function canEdit(MessageContract $message) : bool;

    /**
     *
     *
     * @param MessageContract $message
     * @return Boolean
     */
    abstract public function canDelete(MessageContract $mesage) : bool;

}