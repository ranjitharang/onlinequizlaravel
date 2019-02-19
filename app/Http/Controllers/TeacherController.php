<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
//use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
//use Illuminate\Contracts\Support\Jsonable;


class TeacherController extends Controller
{
public function index()
    {
        $teacher = Teacher::paginate(2);
        //$teacher = Teacher::all();
         //$teacher = App\Teacher::paginate(2);

        return view('teacher.index', compact('teacher'));
    }



    /**
     * Show the form for creating a new resource.
     *
     @return \Illuminate\Http\Response
     */

     public function create()
    {
        return view('teacher.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
        'name'=>'required|string',
        'subject'=> 'required|string',
        'questions' => 'required|string'
      ]); 

        Teacher::create($request->all());
        
        $teacher = new Teacher([

        'name' => $request->get('name'),
       'subject' => $request->get('subject'),
        'questions' => $request->get('questions')


        ]);

        $teacher->save();

        return view('teacher.index')->echo("saved");

    }

   //public function create()
   /// {
  //    return view('student.create');
  //  }

    public function show($id)
    {
        $teacher = Teacher::find($id);
        //($teacher);
         return view('teacher.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);

        return view('teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function update(Request $request, $id)
    {
    	
      $teacher = Teacher::find($id);
      $teacher->name = $request->get('name');
      $teacher->subject = $request->get('subject');
      $teacher->questions = $request->get('questions');
      $teacher->save();

      return redirect('/teacher')->with('success', 'Updated questions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();

      return redirect('/teacher')->with('success', 'Questions has been deleted Successfully');
    }
}

