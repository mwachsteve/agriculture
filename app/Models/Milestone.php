<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    use HasFactory;
    protected $table = 'milestone';
    protected $fillable = ['name', 'cost', 'description'];

    public function images()
    {
        return $this->hasMany(MilestoneImage::class);
    }
}
