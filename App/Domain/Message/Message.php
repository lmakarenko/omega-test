<?php


namespace App\Domain\Message;

use App\Domain\Message\Contracts\MessageContract,
    App\Domain\User\Contracts\UserContract;

/**
 * Class Message
 */
class Message implements MessageContract
{
    /**
     * @var UserContract
     */
    protected $user;

    /**
     * @var string
     */
    protected $text;

    /**
     * Message constructor.
     * @param UserContract $user
     * @param string $text
     */
    public function __construct(UserContract $user, string $text)
    {
        $this->user = $user;
        $this->text = $text;
    }

    /**
     * @param UserContract $user
     */
    public function setUser(UserContract $user)
    {
        $this->user = $user;
    }

    /**
     * @return UserContract
     */
    public function getUser() : UserContract
    {
        return $this->user;
    }

    /**
     * @param string $text
     */
    public function setText(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
}