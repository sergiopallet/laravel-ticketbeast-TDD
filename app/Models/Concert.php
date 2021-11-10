<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name',
    //     'location'
    // ];

    protected $guarded = [];

    protected $dates = ['date'];

    public function getFormatedDateAtribute()
    {
        return $this->date;
    }

    public function scopePublished($query)
    {
    }
}
