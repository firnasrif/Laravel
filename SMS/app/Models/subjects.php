<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subjects extends Model
{
    use HasFactory;
    
    protected $table = 'subjects';

    protected $primaryKey = 'sub_id';

    protected $fillable = ['sub_name', 'sub_id'];

    public function student()
    {
        return $this->hasMany(student::class, 'sub_id');
    }
    
    public $timestamps = true;

}
