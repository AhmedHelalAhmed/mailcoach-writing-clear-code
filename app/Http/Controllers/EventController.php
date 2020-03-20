<?php
namespace App\Http\Controllers;

use App\services\EventFactory;

/**
 * Class EventController
 * @package App\Http\Controllers
 * refactor if blocks to dedicated classes
 */
class EventController extends Controller
{
    /**
     * @param $event
     * visit url
     * /events/opened
     * /events/clicked
     */
    public function show($event)
    {
        $dedicatedEvent=EventFactory::createForPayload($this->getPayload($event));
        $dedicatedEvent->handle();
        // when event we need new event
        // just make a new class that extends Event (App\services\events\Event)
        // and register it in $event array in factory (App\services\EventFactory)
        // then we can go
        // we will never modify the code here in the controller any more
    }

    /**
     * @param $event
     * @return array
     */
    protected function getPayload($event)
    {
        return [
            'event-data'=>[
                'event'=>$event
            ]
        ];
    }
}
