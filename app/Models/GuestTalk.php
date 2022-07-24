<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestTalk extends Model
{
    use HasFactory;

    protected $table = 'guest_talks';
    protected $fillable = ['eventName','eventImage','date','time','eventLink','description'];
}
