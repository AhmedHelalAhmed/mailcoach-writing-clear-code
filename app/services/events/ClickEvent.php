<?php
namespace App\services\events;

/**
 * Class ClickEvent
 * @package App\services\events
 */
class ClickEvent extends Event
{
    /**
     * @return bool
     */
    public function canHandlePayload():bool
    {
        return $this->event === 'clicked';
    }

    public function handle()
    {
        dd('hit clicked event');
    }
}
