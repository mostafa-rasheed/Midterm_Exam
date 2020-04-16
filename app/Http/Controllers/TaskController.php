<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(){
       //$tasks =DB::table('tasks')->get();
        $tasks =Task::orderBy('created_at')->get();
        return view('add_edit',compact('tasks'));}
    
    
    public function add_page(){
       
    $tasks =Task::orderBy('created_at')->get();
    return view('add_edit',compact('tasks'));
    }

    
    public function index_page(){
    
        $tasks =Task::orderBy('created_at')->get();
        return view('index',compact('tasks'));}


    
     public function destroy( $id){
        
        $task=Task::find($id);
        $task->delete();
       return redirect()->back();
    }
    
    


    public function store(Request $request){
        DB::table('tasks')->insert([
           'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'created_at'=>now(),
        ]);

        $request->validate([
            'name'=>'required|min:10|max:255',
            'phone'=>'required|min:10|max:10',
            'email' => 'required|email',

        ]);
             //$task=new Task();
              //$task->name =$request("name");
              //$task->email =$request("email");
              //$task->phone =$request("phone");
              //$task->save();
        
         $tasks =Task::orderBy('created_at')->get();
         return  view('index',compact('tasks'));
         }
    
    
    
    public function edit(Task $id){
       
       
       // $tasks =Task::all();
       // $task=Task::find($id);
         return view('add_edit',compact('id'));
        
        }
           
         
         
         public function update($id){

            $task=new Task();
            $task->name =$request("name");
            $task->email =$request("email");
            $task->phone =$request("phone");
            $task->save();
            $tasks =Task::orderBy('created_at')->get();
            return  view('index',compact('tasks'));
           }

    



}
