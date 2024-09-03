<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curr_activies extends Model
{
    use HasFactory;

    protected $table = 'curr_activies';

    protected $primaryKey = 'act_id';

    protected $fillable = ['act_name', 'act_id', 'class_id', 'curr_id', 'grade_id', 'index_no'];

    public function classes()
    {
        return $this->belongsTo(classes::class, 'class_id');
    }

    public function curriculams()
    {
        return $this->belongsTo(curriculams::class, 'curr_id');
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
