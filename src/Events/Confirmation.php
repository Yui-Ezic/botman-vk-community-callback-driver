<?php
namespace BotMan\Drivers\VK\Events;

use BotMan\Drivers\VK\Events\VKEvent;

class Confirmation extends VKEvent
{
    /**
     * Return the event name to match.
     *
     * @return string
     */
    public function getName()
    {
        return 'confirmation';
    }
}