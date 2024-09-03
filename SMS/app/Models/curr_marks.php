<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curr_marks extends Model
{
    use HasFactory;

    protected $table = 'curr_marks';

    protected $primaryKey = 'marks_id';

    protected $fillable = ['marks_id','class_id', 'sub_name', 'grade_id', 'index_no'];

    public function classes()
    {
        return $this->belongsTo(classes::class, 'class_id');
    }

    public function subjects()
    {
        return $this->belongsTo(subjects::class, 'sub_name');
    }

    public function grade()
    {
        return $this->belongsTo(grade::class, 'grade_id');
    }

    public function student()
    {
        return $this->belongsTo(student::class, 'index_no');
    }
    public $timestamps = true;
}

