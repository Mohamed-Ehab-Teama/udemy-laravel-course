<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    
    public function testAction( Request $request )
    {

        // dd( $request );
        // dd( $request->all() );
        // dd( $request->input() );
        // dd( $request->input('name') );
        // dd( $request->input('name', "Not Found") );
        // dd( $request->input('color', "Not Found") );
        // dd( $request->query() );
        // dd( $request->query('age') );
        // dd( $request->query('id', "Not Found") );
        // dd( $request->query('color', "Not Found") );

        // $data = $request->only(['name', 'age']);
        // $data = $request->except(['name', 'age']);

        // $data = "String";
        // $data = 10 ;
        // $data = 10.7 ;
        // $data = [10, 20, 30] ;

        // return $data;

        // return response()->json(['name'=>'Mohamed', 'age'=>22, 'hairColor'=>'Brown']);
        // return view('welcome');
        // abort(403);
        // abort(404);
        // return redirect()->route('testAct2');
        // return redirect('Test/Courses/Laravel/');
        // return redirect()->away('https://www.youtube.com');
        // return redirect()->action([TestController::class,'testAction2']);

        return "We Are In Test Controller in Test Action ";
    }
    
    
    public function testAction2( Request $request )
    {
        return "We Are In Test Controller in Test Action number 222222222222222222 ";
    }

}
