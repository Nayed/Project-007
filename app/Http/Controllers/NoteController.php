<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Lesson;
use App\User;

use App\Category;
use App\Media;
use Input;
use Validator;
use Redirect;
use Auth;
use DB;
use Storage;
use Session;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $lessons = Lesson::where('user_id',Auth::user()->id)->get()->lists('name', 'id');

        return view('notes.index', [
            'lessons' => $lessons,
        ]);
    }
    
    
     public function list_eleve(Request $request)
    {
       $inputs = Input::all();
   
       $lesson = Lesson::findOrFail($inputs['lessons']);
       $users = User::where('category_id',$lesson->category_id)->get();
       
       return view('notes.list_eleve', [
            'users' => $users,
        ]);

        
        
        
    }
    public function list_eleves(Request $request)
    {
       $inputs = Input::all();
   
       $lesson = Lesson::findOrFail($inputs['lessons']);
       $users = User::where('category_id',$lesson->category_id)->get();
       
       return view('notes.list_eleves', [
            'users' => $users,
        ]);

    }
    
    

     public function add_note($id)
    {
      /* $inputs = Input::all();
       
   
       $lesson = Lesson::findOrFail($inputs['lessons']);
       $users = User::where('category_id',$lesson->category_id)->get();*/
       
       return view('notes.add_note');

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
