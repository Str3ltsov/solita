<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ContactFormSent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public string $name;
    public string $email;
    public string $topic;
    public string|null $description;

    /**
     * Create a new event instance.
     */
    public function __construct(string $name, string $email, string $topic, string|null $description)
    {
        $this->name = $name;
        $this->email = $email;
        $this->topic = $topic;
        $this->description = $description;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
