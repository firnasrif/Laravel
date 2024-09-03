<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $table = 'student';

    protected $primaryKey = 'index_no';

    protected $fillable = ['f_name','l_name', 'index_no', 'dob', 'gender', 'address', 'phone_no', 'email', 'regis_date','class_id','curr_id','sub_id'];

    public function classes()
    {
        return $this->belongsTo(classes::class, 'class_id');
    }

    public function curriculams()
    {
        return $this->belongsTo(curriculams::class, 'curr_id');
    }

    public function subjects()
    {
        return $this->belongsTo(subjects::class, 'sub_id');
    }

    public $timestamps = true;

}
