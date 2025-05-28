<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\HasFactory;

class UserProfile extends Model
{


    protected $fillable = [
        'user_id',
        'type',
        'address',
    ];	
}
