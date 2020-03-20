<?php
namespace App\services\events;

use Illuminate\Support\Arr;

/**
 * Class Event
 * @package App\services\events
 */
abstract class Event
{
    /**
     * @var
     */
    protected $payload;
    /**
     * @var mixed
     */
    protected $event;

    public function __construct($payload)
    {
        $this->payload=$payload;
        $this->event=Arr::get($this->payload, 'event-data.event');
    }


    /**
     * @return bool
     */
    abstract public function canHandlePayload():bool;
    abstract public function handle();
}
