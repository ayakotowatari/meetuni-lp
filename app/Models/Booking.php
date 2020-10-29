<?php

namespace App\Models;

use App\Notifications\ReplyBooking;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use Notifiable;

    public function sendReplyBooking($user)
    {
        $this->notify(new ReplyBooking($user));
    }
}
