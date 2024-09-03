<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    use HasFactory;

    protected $table = 'classes';

    protected $primaryKey = 'class_id';

    protected $fillable = ['class_name', 'class_id'];

    public function student()
    {
        return $this->hasMany(student::class, 'class_id');
    }

    public function curr_activies()
    {
        return $this->hasMany(curr_activies::class, 'class_id');
    }
    
    public $timestamps = true;

}
