<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    use HasFactory;
    
    protected $table = 'startups';
    protected $fillable = ['created_user_id',
                          'startupName',
                          'webUrl',
                          'tagline',
                           'logo',
                           'telephone',
                           'companyName',
                           'businessRegistrationNumber',
                           'foundedDate',
                           'startupCategory',
                           'description',
                           'numberOfEmployees',
                           'founderName',
                           'founderEmail',
                           'founderTelephone'];
}
