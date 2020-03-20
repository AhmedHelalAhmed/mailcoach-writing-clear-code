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
     */
    protected static $events = [
        ClickEvent::class,
        OpenEvent::class,
        FailedEvent::class
    ];

    /**
     * @param $payload
     * @return OtherEvent|mixed
     */
    public static function createForPayload($payload)
    {
        $event = collect(static::$events)
            ->map(function (string $eventClass) use ($payload) {
                return new $eventClass($payload);
            })
            ->first(function (Event $event) {
                return  $event->canHandlePayload();
            });
        return $event ?? new OtherEvent($payload);
    }
}
