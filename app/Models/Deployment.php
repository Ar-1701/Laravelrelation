<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deployment extends Model
{
    use HasFactory;
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
    // public function projects()
    // {
    //     return $this->belongsTo(Project::class, Language::class);
    // }
}
