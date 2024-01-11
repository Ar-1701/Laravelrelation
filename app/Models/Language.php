<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    public function deployment()
    {
        return $this->hasOne(Deployment::class);
    }
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
