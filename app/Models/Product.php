<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'available'];

    public function getAvailable() {
        return $this->available;
    }
    public function setAvailable($value) {
        $this->available = $value;
    }
    public function categories() {
        return $this->belongsToMany(Category::class);
    }
}
