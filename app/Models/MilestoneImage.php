<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MilestoneImage extends Model
{
    use HasFactory;
    

    protected $fillable = ['url', 'comment', 'milestone_id'];

    public function milestone()
    {
        return $this->belongsTo(Milestone::class);
    }
}
