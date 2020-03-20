<?php

namespace App\services;

use App\services\events\ClickEvent;
use App\services\events\Event;
use App\services\events\FailedEvent;
use App\services\events\OpenEvent;
use App\services\events\OtherEvent;

/**
 * Class EventFactory
 * @package App\services
 */
class EventFactory
{
    /**
     * @var array
     * supported events
     */
    protected static $events = [
        ClickEvent::class,
        OpenEvent::class,
        FailedEvent::class
    ];

    /**
     * @param $payload
     * @return Event
     */
    public static function createForPayload($payload):Event
    {
        $event = collect(static::$events) //<==== collect events
            // make objects of events class ==> from string to object
            ->map(function (string $eventClass) use ($payload) {
                return new $eventClass($payload);
            })
            // return first class which can Handle Payload => event
            ->first(function (Event $event) {
                return  $event->canHandlePayload();
            });
        // if there is no event match the payload event then return other event
        return $event ?? new OtherEvent($payload);
    }
}
