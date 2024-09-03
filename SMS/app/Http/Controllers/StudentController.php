<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\student.php;

class StudentsController extends Controller
{

    protected $student; 

    public function _construct(){
        $this->student = new student;
    }


    public function index()
    {
        return $this->student->all();
    }


    public function store(Request $request)
    {
        return $this->student->create($request->all());
    }

   
    public function show(string $id)
    {
        return $student = $this->student->find($id);
    }

    
    public function update(Request $request, string $id)
    {
        $student = $this-->student->find($id);
        $student->update($request->all());
        return $student;
    }

    
    public function destroy(string $id)
    {
        $student = $this-->student->find($id);
        return $student->delete();
    }
}
