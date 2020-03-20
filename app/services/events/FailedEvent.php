<?php

namespace App\services\events;

/**
 * Class FailedEvent
 * @package App\services\events
 */
class FailedEvent extends Event
{
    /**
     * @return bool
     */
    public function canHandlePayload():bool
    {
        return $this->event === 'failed';
    }

    public function handle()
    {
        dd('hit failed event');
    }
}
