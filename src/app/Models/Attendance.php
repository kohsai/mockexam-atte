<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    protected $fillable = ['user_id', 'start_time', 'end_time', 'date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
