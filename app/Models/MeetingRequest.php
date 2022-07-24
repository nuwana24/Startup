<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetingRequest extends Model
{
    use HasFactory;
    protected $table = 'meeting_requests';
    protected $fillable = ['created_user_id','mentor_id','status','session_id'];
}
