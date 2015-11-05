<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Lesson;
use App\User;
use App\Note;
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
    
   
    public function redirect_note()
    {
      
       $inputs = Input::all();
   
      // $lesson = Lesson::findOrFail($inputs['lessons']);
       
        // return redirect()->route('notes/list_eleve',[1]);
       return redirect()->action('NoteController@list_eleve', [$inputs['lessons']]);



    }
    
    public function list_eleve($id_lecon)
    {
       $inputs = Input::all();
   
       $lesson = Lesson::findOrFail($id_lecon);
       $users = User::where('category_id',$lesson->category_id)->get();
       
       return view('notes.list_eleve', [
            'users' => $users,
            'id_lecon' => $id_lecon
        ]);
        

    }
    
    

     public function add_note($id)
    {

   
       $user = User::findOrFail($id);
       return view('notes.add_notes', [
            'user' => $user,
        ]); 

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
    public function update_note(Request $request)
    {
       
        $inputs = Input::all();
        $rules = array(
            'note' => 'required',
        );
        
        $validation = Validator::make($inputs,$rules);
        if($validation->fails()){
            exit('erreur');
        }
        
            $note = new Note;
            $note->user_id = Auth::user()->id ;
            $lesson->name = e($request->input('name'));
            $lesson->date_start = e($request->input('date_start'));
            $lesson->content = ($request->input('content'));
            $lesson->category_id = e($request->input('category'));
            $lesson->save();
       
       
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
