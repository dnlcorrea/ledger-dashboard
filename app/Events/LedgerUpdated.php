<?php

namespace App\Events;

use App\Services\Assets;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class LedgerUpdated implements ShouldBroadcastNow
{

    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $assets, $liabilities;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->assets = Assets::totals();
        $this->liabilities = ['foo' => '$0.02'];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('assets');
    }
}
