<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'slug', 'name'
    ];


    public function mammals(){

        return $this->hasMany(Mammal::class);

    }

    public function birds(){

        return $this->hasMany(Bird::class);

    }

    public function fish(){

        return $this->hasMany(Fish::class);

    }

    public function reptiles(){

        return $this->hasMany(Reptiles::class);

    }

    public function getNameAttribute($value)
	{
		return ucwords($value);
	}
	public function getCreatedAtAttribute($value)
	{
		return \Carbon\Carbon::parse($value)->format('j M, Y');
    }

    // public function categories(){
    // 	return $this->has(Category::class);
    // }

}
