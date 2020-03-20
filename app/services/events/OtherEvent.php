<?php

namespace App\services\events;

/**
 * Class OtherEvent
 * @package App\services\events
 */
class OtherEvent extends Event
{
    /**
     * @return bool
     */
    public function canHandlePayload():bool
    {
        return true;
    }

    public function handle()
    {
        dd('hit other event');
    }
}
