<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curriculams extends Model
{
    use HasFactory;

    protected $table = 'curriculams';

    protected $primaryKey = 'curr_id';

    protected $fillable = ['cur_name', 'curr_id'];

    public function student()
    {
        return $this->hasMany(student::class, 'curr_id');
    }

    public function curr_activies()
    {
        return $this->hasMany(curr_activies::class, 'curr_id');
    }

    public $timestamps = true;

}
