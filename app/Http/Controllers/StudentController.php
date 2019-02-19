<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
//use Illuminate\Contracts\Support\Jsonable;

class StudentController extends Controller
{
   // @return \Illuminate\Http\Response
    
    public function index()
    {
        $student = Student::paginate(2);
        //$student->withPath('custom/url');

        return view('student.index', compact('student'));
    }
 
     public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
       $request->validate([
        'name'=>'required|string',
        'subject'=> 'required|string',
        'answers' => 'required|string'
      ]); 

        $student = new Student([

        	'name' => $request->get('name'),
        	'subject' => $request->get('subject'),
        	'answers' => $request->get('answers')

        ]);

        $student->save();
           $student = Student::all();

        return view('student.index', compact('student'));

    }

   //public function create()
   /// {
  //    return view('student.create');
  //  }

    public function show($id)
    {
        $student = Student::find($id);
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);

        return view('student.edit', compact('student'));
    }
    
  public function update(Request $request, $id)
    {
      $student = Student::find($id);
      $student->name = $request->get('name');
      $student->subject = $request->get('subject');
      $student->answers = $request->get('answers');
      $student->save();

      return redirect('/student')->with('success', 'Updated answers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

      return redirect('/student')->with('success', 'Answers has been deleted Successfully');
    }
}
