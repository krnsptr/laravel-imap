<?php

namespace Webklex\IMAP\Events;

use Webklex\IMAP\Message;

class MessageNewEvent extends Event {

    /** @var Message $message */
    public $message;

    /**
     * Create a new event instance.
     * @var Message $message
     * @return void
     */
    public function __construct($message) {
        $this->message = $message;
    }
}