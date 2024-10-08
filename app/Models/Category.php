<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'isLegal',
        'icon',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function getName() : string
    {
        return $this->name;
    }

//    public function operation() : HasManyThrough
//    {
//        return $this->hasManyThrough(Operation::class, Tool::class);
//    }

    public function tools() : HasMany
    {
        return $this->hasMany(Tool::class);
    }

    public function datacategory() : HasMany
    {
        return $this->hasMany(Datacategory::class);
    }
}
