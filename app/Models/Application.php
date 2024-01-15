<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;
use App\Models\User;

class Application extends Model
{
    protected $fillable = [
        'description',
        'number_auto',
        'user_id',
        'status',
    ];

    public function get_status(){
        return $this->hasOne(Status::class);
    }
    public function get_user(){
        return $this->hasOne(User::class);
    }
}
