<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scratchbook extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function scopeCurrentTeam($query)
    {
        return $query->where('team_id', \Auth::user()->currentTeam->id);
    }
}
