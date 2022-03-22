<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\hellorequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\RestappController;
use App\Models\Person;
use Illuminate\Support\Facades\Auth;

class hellocontroller extends Controller
{
  

//#FOR UPDATING DATABASE AND SHOWING 

    public function edit(Request $request)
    {
        $item = DB::table('people')
              -> where('id',$request->id)->first();
        return view('hello.edit', ['form' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('people')
           ->where('id',$request->id)
           ->update($param);
        return redirect('/hello');

    }

//#FOR DELETING DATA FROM DATABASE

    public function del(Request $request)
    {
        $item = DB::table('people')
              -> where('id',$request->id)->first();
        return view('hello.del', ['form'=>$item]);
    }

    public function remove(Request $request)
    {
        DB::table('people')
           -> where('id',$request->id)->delete();
        return redirect ('/hello');
    }

     //#for ordering the database 
    //  public function index(Request $request)
    //  {
    //      $items = DB::table('people')->orderBy('age', 'asc')->get();
    //      return view ('hello.index', ['items'=> $items]);
    //  }


     //#FOR OFFSET AND LIMIT :- page limit dividin table into sets offsets
     public function show(Request $request)
     {
         $page= $request->page;
         $items = DB::table('people')
                ->offset($page * 3)
                ->limit(3)
                ->get();
        return view ('hello.show',['items' => $items]);
     }


     //#FOR SHOWING THE ADDED DATA INTO TABLE
     public function add(Request $request)
     {
         return view('hello.add');
     }
     public function create(Request $request)
     {
         $param =[
             'name' =>$request->name,
             'mail' =>$request->mail,
             'age' =>$request->age,
         ];
         DB::table('people')->insert($param);
         return redirect('/hello');
         
     }
     public function rest(Request $request)
     {
         return view ('hello.rest');
     }
     public function ses_get(Request $request)
     {
         $sesdata = $request->session()->get('msg');
         return view ('hello.session', ['session_data'=>$sesdata]);
     }
     public function ses_put(Request $request)
     {
         $msg = $request->input;
         $request->session()->put('msg',$msg);
         return redirect ('hello/session');
     }
//#FOR PAGINATION
    //  public function index(Request $request)
    //  {
    //     if(!$request->sort) {
    //         $sort = 'id';
    //     } else {
    //         $sort = $request->sort;
    //     }
    //     $items = Person::orderBy($sort, 'asc')
    //         ->paginate(5);
    //     $param = ['items'=>$items, 'sort' =>$sort];
    //     return view ('hello.index',$param);}

   //#FOR USER AUTHENTICATION LOGIN AND REGISTER 
   public function index(Request $request)
     {
         $user= Auth::user();
         if(!$request->sort) {
             $sort = 'id';
         }else{
            $sort = $request->sort;
         }
       $items = Person::orderBy($sort, 'asc')
            ->simplePaginate(5);
         $param = ['items'=>$items, 'sort' =>$sort,
        'user'=>$user ];
         return view ('hello.index',$param);
   }

   //#FOR USER AUTHENTICATION LOGIN AND REGISTER

   public function getAuth(Request $request)
   {
       $param= ['message'=> 'please login here!!'];
       return view ('hello.auth', $param);
   }

   public function postAuth(Request $request)
   {
       $email = $request->email;
       $password = $request->password;
       if (Auth::attempt(['email'=>$email,
       'password'=>$password]))
       {
           $msg = 'you are login in.(' .Auth::user()->name .')';
       }
       else {
           $msg ='try again!!';
       }
       return view ('hello.auth',['message'=>$msg]);

   }
}