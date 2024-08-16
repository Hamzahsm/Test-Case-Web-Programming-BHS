<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; //eloquent relationship

class Resume extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    // eloquent realitonship 
    // public function user() {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
}
