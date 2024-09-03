<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grade extends Model
{
    use HasFactory;

    protected $table = 'grade';

    protected $primaryKey = 'grade_id';

    protected $fillable = ['grade_name', 'grade_id','description'];

    public function records()
    {
        return $this->hasMany(records::class, 'grade_id');
    }

    public $timestamps = true;
}
