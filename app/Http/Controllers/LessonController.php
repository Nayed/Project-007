<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lesson;
use Input;
use Validator;
use Redirect;

class LessonController extends Controller
{
    
    public function index(Request $request){
        
        $lesson = Lesson::where('user_id', $request->user()->id)->get();
        return view('lessons.list', [
            'lessons' => $lesson,
        ]);
        
    }
    
    public function edit($id){
        
       // $lesson = Lesson::where('user_id', $request->user()->id)->get();
       
       $lesson = Lesson::findOrFail($id);
       
        return view('lessons.edit',[
            'lesson' => $lesson
        ]);
        
    }
    
    public function update(Request $request){
        
       // $lesson = Lesson::where('user_id', $request->user()->id)->get();
       
        //dd(Input::all());
        
        $inputs = Input::all();
        
        $rules = array(
            'name' => 'required'
            
        );
        
        $validation = Validator::make($inputs,$rules);
        if($validation->fails()){
            exit('erreur');
        }
        
        $lesson = Lesson::find(Input::get('id'));
        
        $lesson->name = e(Input::get('name'));
        $lesson->content = e(Input::get('content'));
        
        if($lesson->save()){
            
        }
        
        return Redirect::to('lessons/list');
      

       
       
       
       $lesson = Lesson::findOrFail($id);
       
        return view('lessons.edit',[
            'lesson' => $lesson
        ]);
        
    }
    
    
    
    
    
}
