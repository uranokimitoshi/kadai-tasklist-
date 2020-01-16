<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TasksController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasksindex = Task::all();
        return view("tasks.index",["tasksindex" => $tasksindex]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $taskcreate = new Task;
        return view("tasks.create",["taskcreate"=>$taskcreate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request,["status"=>"required|max:10"]);
        $task = new Task;
        $task->content = $request->content;
        $task->status = $request->status;
        $task->save();
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $taskshow = Task::find($id);
        return view("tasks.show",["taskshow" => $taskshow]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $taskedit=Task::find($id);
        return view("tasks.edit",["taskedit"=>$taskedit]);
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
        $this->validate($request,["status"=> "required|max:10"]);
        $taskupdate = Task::find($id);
        $taskupdate->content = $request->content;
        $taskupdate->status = $request->status;
        $taskupdate->save();
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taskdes = Task::find($id);
        $taskdes->delete();
        return redirect("/");
    }
}
