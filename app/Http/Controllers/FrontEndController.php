<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\ContactMessages;
use	Illuminate\Support\Facades\Redirect;


class FrontEndController extends Controller {

	public function indexView(){
		
		return view('main')->with('page','index');
	
	}
	public function aboutView(){
		
		return view('main')->with('page','about');
	
	}
	public function postView(){
		
		return view('main')->with('page','post');
	
	}

	public function contactView(){
		
		return view('main')->with('page','contact');
	
	}
	
	public function saveMessage(){
	
		$messageTable = new ContactMessages();
		$messageTable->name		=	Input::get('name');
		$messageTable->email	=	Input::get('email');
		$messageTable->telephone=	Input::get('telephone');
		$messageTable->message	=	Input::get('message');
		$messageTable->save();
		
		return Redirect::back();
		
	}

}
