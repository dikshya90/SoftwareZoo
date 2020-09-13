<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reptiles extends Model
{
    use SoftDeletes;

    protected $fillable = [

        'name', 'category_id', 'given_name', 'dob', 'life_span', 'diet', 'gender', 'habitat', 'global_population',
        'date_joined', 'height', 'weight', 'reproduction_type', 'clutch', 'offspring', 'image', 'status',
    ];

    public $dates = ['deleted_at'];

    //Accessor to change the Change Format in Blade View
    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('j M, Y');
    }
    public function getDeletedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('j M, Y');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
