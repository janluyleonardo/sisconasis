<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = "teams";

    protected $fillable = [
        'Team_name',
        'Team_manager',
        'Team_phone',
        'Team_email',
        'Team_neighborhood',
        'Team_shield'
    ];

    public function player()
    {
        return $this->hasMany(Player::class);
    }
}
