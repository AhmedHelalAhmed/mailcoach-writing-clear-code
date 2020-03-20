<?php

namespace App\services\events;

/**
 * Class OpenEvent
 * @package App\services\events
 */
class OpenEvent extends Event
{
    /**
     * @return bool
     */
    public function canHandlePayload():bool
    {
        return $this->event === 'opened';
    }

    public function handle()
    {
        dd('hit opened event');
    }
}
