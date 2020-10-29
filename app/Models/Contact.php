<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Notifications\ReplyContact;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    use Notifiable;

    public function sendReplyContact($user)
    {
        $this->notify(new ReplyContact($user));
    }
}
