<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\participant;

class BasicController extends Controller
{
    public function registration(){
        return view('registration');
    }

    public function store(request $request){
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required | email',
                'hobby'=>'required'
            ]
            );

            // echo "<pre>";
            // print_r($request->all());
            // echo "</pre>";

            $participant=new participant;
            $participant->name=$request['name'];
            $participant->email=$request['email'];
            $participant->hobby=$request['hobby'];
            $participant->save();

            return redirect('view');

    }

    public function view(request $request){
        $search=$request['search'] ?? "";
        if($search !=null){

            $participant=participant::where('name','LIKE',"$search%")->orwhere('email','LIKE',"$search%")->get();
        }
        else{
            $participant=participant::paginate(10);
            
        }
        

        $data=compact('participant','search');
        return view('view')->with($data);
    }

    public function delete($id){
        $participant=participant::find($id);
        if(is_null($participant)){
                 return redirect('view');
        }
        else{
                $participant->delete();
                return redirect('view');
        }
    }

    public function edit($id){
        $participant=participant::find($id);
        $data=compact('participant','id');
        if(is_null($participant)){
            return redirect('view');
        }
        else{
            return view('update')->with($data);
        }
    }

    public function update($id, request $request){
        $participant=participant::find($id);

        if(is_null($participant)){
            return redirect('view');
        }
        else{
            $participant->name=$request['name'];
            $participant->email=$request['email'];
            $participant->hobby=$request['hobby'];
            $participant->save();

            return redirect('view');
        }
        
    }

    public function trash(){
        $participant=participant::onlyTrashed()->get();
        $data=compact('participant');
        return view('trash')->with($data);
    }

    public function restore($id){
        $participant=participant::withTrashed()->find($id);
        if(is_null($participant)){
                 return redirect('view');
        }
        else{
                $participant->restore();
                return redirect('view');
        }
    }

    public function forcedelete($id){
        $participant=participant::withTrashed()->find($id);
        if(is_null($participant)){
                 return redirect('view');
        }
        else{
                $participant->forceDelete();
                return redirect('view');
        }
    }
}
