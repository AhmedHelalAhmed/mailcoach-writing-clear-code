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
