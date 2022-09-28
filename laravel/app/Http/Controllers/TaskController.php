<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task= Task::all();
        return view("index",compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name= $request->input('taskName');
        $description = $request->input('description');

        $task = Task::create([
            "taskName" => $name,
            "description" => $description


            ]);
       if($task){
        return redirect('index');
 }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        $Data = Task::select("*")->where('id',$id)->get();
        
        return view("show",compact('Data'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Data = Task::select('*')->where("id",$id)->get();
        
        return view("edit",compact('Data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task ,$id)
    {
        $name = $request->input('taskName');
        $description= $request->input('description');

        $Data = Task::where("id",$id)
            ->update([
             "taskName" => $name,
            "description" => $description
    
    ]);
    if($Data){
        return redirect('index');
        
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Task::where('id',$id)->delete();

        if ($delete) {
          return  redirect("index");
        }
    }
}
