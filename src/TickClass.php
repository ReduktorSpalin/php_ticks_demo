<?php
declare(ticks=1);
namespace Ticks;
use Ticks\BaseClass;

class TickClass extends BaseClass {
   public function mainLoop($size) 
    {
        $eventIds = range(1,1+$size);
        foreach ($eventIds as $eventId)
        {
            $this->logEvent($eventId);
        }
   }

    protected function logEvent($id)
    {
        parent::logEvent($id);
        parent::logEvent($id);
    }
}
