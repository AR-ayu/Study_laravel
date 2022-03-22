<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    // public function index(Request $request)
    // {
    //     $items = Person::all();
    //     return view ('person.index', ['items' => $items]);
    // }
    
    public function find(Request $request)
    {
        return view('person.find',['input'=>'']);
    }
    #FIND
    public function search(Request $request)
    {
        $item = Person::find($request->input);
        $param =['input' => $request->input, 'item'=> $item];
        return view('person.find', $param);
    }

    // #FIND BY WHERE NAME
    // public function search(Request $request)
    // {
    //      $item = Person::where('name', $request->input)->first();
    //      $param = ['input'=> $request->input, 'item' =>$item];
    //      return view('person.find', $param);
    // }
    // #FOR FIND WITH SCOPE AGE
    // public function search(Request $request)
    // {
    //     $min =$request->input * 1;
    //     $max =$min +10;
    //     $item = Person::ageGreaterThan($min)->
    //     ageLessThan($max)->first();
    //     $param =['input'=>$request->input, 'item' =>$item];
    //     return view('person.find', $param);
    // }

    public function add(Request $request)
    {
        return view ('person.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = new Person;
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/person');
    }

    public function edit(Request $request)
    {
        $person = Person::find($request->id);
        return view('person.edit',['form' => $person]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = Person::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/person');
    }

    public function delete(Request $request)
    {
        $person = Person::find($request->id);
        return view('person.del',['form' => $person]);
    }

    public function remove(Request $request)
    {
        Person::find($request->id)->delete();
        return redirect ('/person');
    }

    public function index(Request $request)
    {
        $hasItems = Person::has('boards')->get();
        $noItems = Person::doesntHave('boards')->get();
        $param = ['hasItems'=> $hasItems, 'noItems'=> $noItems];
        return view ('person.index', $param);
    }

}
