<?php


namespace Jkhaled\MessengerCqrs\Query;


interface QueryBus
{
    function ask(Query $query): mixed;
}