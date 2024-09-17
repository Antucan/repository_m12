<?php

namespace App\Models;

/**
 * Represents play field.
 */
class Player extends Person
{
    /**
     * Player name
     *
     * @var string
     */
    private $name;

    /**
     * Player Status
     *
     * @var boolean
     */
    private $active;

    /**
     * Construct a Player with a name and the status.
     *
     * @param string $name     Player name
     * @param bool $active  Player Status
     * @param bool $motivation  Player Motivation
     */
    public function __construct(string $name, bool $active)
    {
        $this->name = $name;
        $this->active = $active;
    }

    /**
     * Get Player name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get Player Status
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set Player name in string
     *
     * @param string $name is string
     * @return self
     */
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Set status in bool
     *
     * @param bool $active is true or false
     * @return self
     */
    public function setActive(bool $active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Pass the ball to another player.
     *
     * This method would typically interact with other players or game logic.
     * For now, it just outputs a message indicating that the player has passed the ball.
     */
    public function passBall()
    {
        echo $this->name . " has passed the ball.";
    }
}
