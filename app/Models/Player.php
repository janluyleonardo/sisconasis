<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $table = "players";

    protected $fillable = [
        'Player_name',
        'Player_document',
        'Player_email',
        'Player_phone',
        'Player_photo',
        'Player_age',
        'Player_number',
        'Player_position'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
