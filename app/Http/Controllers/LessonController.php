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
        $lesson->save();
        
        $media = Media::find('lesson_id',$request->input('id'));
        dd($media);
               // $lesson = Lesson::where('user_id', $request->user()->id)->get();

        
        $file = array('image' => Input::file('image'));

        if (Input::file('image')->isValid()) {
              $destinationPath = 'uploads'; // upload path
              $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
              $fileName = rand(11111,99999).'.'.$extension; // renameing image

              if (!Input::file('image')->move($destinationPath, $fileName))
                {
                    die("Couldn't rename file");
                }
                $media = new Media();
                $media->lesson_id = Auth::user()->id;
                $media->path = e($fileName);
                $media->name = e($request->input('title_document'));
                $media->save();
         }

        
        return Redirect::to('lessons/list');
      

        
    }
     public function update_image(Request $request){
        $inputs = Input::all();

        $files = Input::file('images');

        $file = array('image' => Input::file('image'));
        if(!empty($request->input('image'))){
             if ($file->isValid()) {
                  $destinationPath = 'uploads'; // upload path
                  $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
                  $fileName = rand(11111,99999).'.'.$extension; // renameing image
    
                  if (!Input::file('image')->move($destinationPath, $fileName))
                    {
                        die("Couldn't rename file");
                    }
                    $media = Media::find($request->input('id') );
                    $media->path = e($fileName);
                    $media->save();
                    
            }
        
        }
           
       
         
        $media = Media::find($request->input('id'));
        
        $media->name = e($request->input('title_document'));
        $media->save();

        
        return Redirect::back();
      

        
    }
    
    public function add(){

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
        
            $lesson = new Lesson();
            $lesson->user_id = Auth::user()->id ;
            $lesson->name = e($request->input('name'));
            $lesson->date_start = e($request->input('date_start'));
            $lesson->content = ($request->input('content'));
            $lesson->category_id = e($request->input('category'));
            $lesson->save();
        
        $files = Input::file('images');
        $file_count = count($files);
        // start count how many uploaded
        $uploadcount = 0;
        foreach($files as $file) {
          $rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
          $validator = Validator::make(array('file'=> $file), $rules);
          if(!$validator->fails()){
            $destinationPath = 'uploads';
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image

            $upload_success = $file->move($destinationPath, $fileName);
            $uploadcount ++;
            
                $media = new Media();
                $media->lesson_id = $lesson->id;
                $media->path = $fileName;
                $media->name = e($request->input('title_document'));
                $media->save();
   
          }
        }
        if($uploadcount == $file_count){
            
         /* Session::flash('success', 'Upload successfully'); 
          return Redirect::to('upload');*/

       
        } 
        
        return Redirect::to('lessons/list');

        
    }
    

}
