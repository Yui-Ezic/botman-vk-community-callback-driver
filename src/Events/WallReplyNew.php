<?php
namespace BotMan\Drivers\VK\Events;

class WallReplyNew extends VKEvent
{
    /**
     * Return the event name to match.
     *
     * @return string
     */
    public function getName()
    {
        return 'wall_reply_new';
    }
}