<?php


namespace Jkhaled\MessengerCqrs\Command;


interface CommandBus
{
    function dispatch(Command $command): void;
}