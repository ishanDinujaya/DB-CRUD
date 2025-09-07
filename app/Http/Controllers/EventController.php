<?php

namespace App\Http\Controllers;

use App\Services\EventService;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private EventService $service;
    public function __construct(EventService $service){
        $this->service=$service;

    }

    public function index(){
        $events=$this->service->getAll();
        return view('events.list',compact('events'));
    }
    public function create(){
        return view('events.create');
    }
    public function store(Request $request){
        $data=[
            'name'=>$request->name,
            'description'=>$request->description,
            'priority'=>$request->priority,
            'event_date'=>$request->event_date
        ];


        $result=$this->service->store($request->all());
        if($result){
            return redirect(url('/events'));
        }else{
            return redirect(url('/events/create'));
        }
    }
    public function delete($id){
        $this->service->delete($id);
        return redirect('/events');
    }
    public function edit($id){
        $event=$this->service->findById($id);
        return view('events.edit',compact('event'));
    }
    public function update(Request $request){
        $data=[
            'name'=>$request->name,
            'description'=>$request->description,
            'priority'=>$request->priority,
            'event_date'=>$request->event_date
        ];
        $id=$request->id;
        $result=$this->service->update($id,$data);
        if($result){
            return redirect(url('/events'));
        }else{
            return redirect(url('/events/update/'.$id));
        }

    }
}
