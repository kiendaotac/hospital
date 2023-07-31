<?php

namespace App\Events;

use App\Models\Appointment;
use App\Models\Customer;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CustomerMakeAppointment
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Appointment $appointment;
    public Customer $customer;

    /**
     * Create a new event instance.
     */
    public function __construct(Customer $customer, Appointment $appointment)
    {
        $this->appointment = $appointment;
        $this->customer    = $customer;
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