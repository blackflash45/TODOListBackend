<?php

namespace App\Http\Controllers;

use App\Http\Resources\todoget;
use App\Models\AddTodo;
use Illuminate\Http\Request;


class AddTodocontroller extends Controller
{
    function addTodo(Request $req){
        $todo= new AddTodo;
        $todo->Addtodo=$req->input('Addtodo'); 
        $todo->save();
        return $req->input();

    }
    
    function getTodo(Request $req){
        $addTodo = null;
        if($req->search) {
            $addTodo= AddTodo::where('Addtodo', 'like', '%' . $req->search . '%')->get();
        } else {
            $addTodo = AddTodo::all();
        }
     return response(todoget::collection($addTodo));
    }
    function updatetodo(Request $req,$id){
        $update= AddTodo::find($id);
        $update->Addtodo= $req->input('Addtodo');
        $update->save();
         return $update;
    }
 function delete(Request $req,$id)
    {
        $addtodo = AddTodo::findOrFail($id);
        $result = ['status'=>$addtodo->delete()];
        return $result ;
    
}
function starttime(Request $req,$id){
//    dd($req->input('startTime'));
    $todo= AddTodo::find($id);
    $todo->startTime=$req["startTime"];
    $result =['status'=>$todo->save()];
    return $result;
  
}
function finishtime(Request $req,$id){
    //    dd($req->input('startTime'));
        $todo= AddTodo::find($id);
        $todo->endTime=$req["endTime"];
        $result =['status'=>$todo->save()];
        return $result;
      
    }
    

}
