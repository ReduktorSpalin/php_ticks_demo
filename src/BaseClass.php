<?php

namespace Ticks;

abstract class BaseClass 
{
    public abstract function mainLoop($rangeSize);

    public function registerTickFunction()
    {
        register_tick_function([&$this, 'otherEventFunction']);
    }

    protected function otherEventFunction()
    {
        $this->logMessage(" -- other event happened -- \n");
    }

    protected function logMessage(string $message)
    {
        $time = new \DateTime();
        $timestamp = $time->format('[Y-m-d H:i:s]');
        echo "$timestamp $message";
    }

    protected function logEvent($eventId)
    {
        $this->logMessage("main event happened $eventId\n");
        $this->logMessage("main event happened $eventId\n");
        $this->logMessage("main event happened $eventId\n");
    }
}
