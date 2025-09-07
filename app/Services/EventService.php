<?php

namespace App\Services;
use App\Models\Event;

class EventService
{
   //method to retrieve all data from the table
    public function getAll(){
        $events=Event::all();
        return $events;

   }
   //method to select a specific record
   public function findById($id){
    $event=Event::find($id);
    return $event;

   }
   //method to insert a record
   public function store(array $data){
    $event=new Event($data);
    return $event->save();//boolean value is returned

   }
   //method to update a record based on id
   public function update($id,array $data){
    $event=Event::find($id);
    $event->name=$data['name'];
    $event->description=$data['description'];
    $event->priority=$data['priority'];
    $event->event_date=$data['event_date'];
    return $event->save();

   }
   //method to delete
   public function delete($id){
    $event=Event::find($id);
    $event->delete();
    return true;

   }
}
