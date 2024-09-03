<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class records extends Model
{
    use HasFactory;

    protected $table = 'records';

    protected $primaryKey = 'record_id';

    protected $fillable = ['record_id', 'index_no','grade_id'];

    public function student()
    {
        return $this->belongsTo(student::class, 'index_no');
    }

    public function grade()
    {
        return $this->belongsTo(grade::class, 'grade_id');
    }

    public $timestamps = true;

}
