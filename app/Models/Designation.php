<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Designation extends Model
{
    use HasFactory, Notifiable;

    protected $guarded;
    public function department(){
        return $this->belongsTo(Department::class);
    }
}
