<?php

namespace Ticks;
use Ticks\BaseClass;

class NoTickClass extends BaseClass 
{
    public function mainLoop($size)
    {
        $eventIds = range(1, 1+$size);

        foreach ($eventIds as $eventId)
        {
            declare(ticks=1) {
                $this->logEvent($eventId);
            }
        }
    }

    protected function logEvent($id) 
    {
        parent::logEvent($id);
        parent::logEvent($id);
    }
}
