<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Lesson;
use App\Category;
use App\Media;
use Input;
use Validator;
use Redirect;
use Auth;
use DB;
use Storage;
use Session;

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
       $group = Category::lists('name', 'id');

       
        return view('lessons.edit',[
            'lesson' => $lesson,'list_group' =>$group
        ]);
        
    }
    
    public function update(Request $request){
        //dd(Input::all());
        $inputs = Input::all();
        
        $rules = array(
            'name' => 'required'
            
        );
        
        $validation = Validator::make($inputs,$rules);
        if($validation->fails()){
            exit('erreur');
        }
    
        
        $lesson = Lesson::find(Auth::user()->id );
        
        $lesson->name = e($request->input('name'));
        $lesson->content = ($request->input('content'));
        
   
        if($lesson->save()){
            
        }
        
        return Redirect::to('lessons/list');
      


       
       $lesson = Lesson::findOrFail($id);
       
        return view('lessons.edit',[
            'lesson' => $lesson
        ]);
        
    }
    
    public function add(){
        
        
      //  $group = DB::table('groups')->select('id')->get();
        $group = Category::lists('name', 'id');

        return view('lessons.add',[
            'list_group' => $group
        ]);
      
    }
    
    
    
    
    public function add_lesson(Request $request){
        
        
        $inputs = Input::all();
        
        $rules = array(
            'name' => 'required',
            'content' => 'required'
            
        );
        
        $validation = Validator::make($inputs,$rules);
        if($validation->fails()){
            exit('erreur');
        }
        
        
        $file = array('image' => Input::file('image'));

        if (Input::file('image')->isValid()) {
              $destinationPath = 'uploads'; // upload path
              $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
              $fileName = rand(11111,99999).'.'.$extension; // renameing image

              if (!Input::file('image')->move($destinationPath, $fileName))
                {
                    die("Couldn't rename file");
                }
              // sending back with message
              Session::flash('success', 'Upload successfully'); 
            //  return Redirect::to('upload');
         }else{
             exit('stop');
         }
         

        $lesson = new Lesson();
        $lesson->user_id = Auth::user()->id ;
        $lesson->name = e($request->input('name'));
        $lesson->content = ($request->input('content'));
        $lesson->category_id = e($request->input('category'));
        $lesson->save();
        
        
        $media = new Media();
        $media->lesson_id = $lesson->id;
        $media->path = e($fileName);
        $media->name = e($request->input('title_document'));
        $media->save();

        return Redirect::to('lessons/list');
      
        
    }
    
    
    
    
    
}
