<?php


namespace Jkhaled\MessengerCqrs\Command;


use Symfony\Component\Messenger\MessageBusInterface;

class MessengerCommandBus implements CommandBus
{

    public function __construct(private MessageBusInterface $commandBus)
    {
    }

    function dispatch(Command $command): void
    {
        $this->commandBus->dispatch($command);
    }
}