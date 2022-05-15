<?php

namespace MarsRover\Service;

use MarsRover\Model\Command\Command;
use MarsRover\Model\Command\CommandTypes;
use MarsRover\Model\Command\Move;
use MarsRover\Model\Command\TurnLeft;
use MarsRover\Model\Command\TurnRight;

/*
 *
 * The factory design pattern used here because we have a superclass Command with multiple sub-classes
 * (MOVE, TURN_RIGHT, TURN_LEFT) and based on input, we need to return one of the sub-class.
 */

class CommandFactory
{
    public function createCommand(string $commandType): Command
    {
        switch ($commandType) {
            case CommandTypes::MOVE:
                return new Move();
            case CommandTypes::TURN_RIGHT:
                return new TurnRight();
            case CommandTypes::TURN_LEFT:
                return new TurnLeft();
            default:
                throw new \Exception("Invalid Command Type, given: " . $commandType);
        }
    }
}
