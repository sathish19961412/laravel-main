<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',function(){
	 return view('home');
});

Route::get('/contact',function(){
	 return view('contact');
});

Route::get('/user_post',function(){
	$title="Sent User Information";
	$title2="Easy to pass to view";
	//return view('user_from',compact('title','title2'));
	//return view('user_from')->with('title',$title)->with('title2',$title2);
	 return view('user_from')->withtitle($title)->withtitle2($title2)->withTest('Testing Magic Data');
});

Route::post('/get_userdata',function(Request $request){
	 $name=$request->input('name');
	 $age=$request->input('age');
	 $phonenumber=$request->input('phonenumber');
	 
	 //Redirect The Page
	 
	 return redirect('user_post')->with('message','UserData Successfully Submit!');
	 /*
	 return 'Hi,your name is '.$name.' and your age is' .$age. 'and your phonenumber is' .$phonenumber;
	 */
});