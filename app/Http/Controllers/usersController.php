<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    public function index() {
    		$users = [
	   '0' => [
	      'name' => 'sanju',
	      'add'  => 'tokyo'
	     ],
	   '1' => [
	      'name' => 'pinky',
	      'add'  => 'mumbai'
	     ]
	   ];
	return view('admin.users.index', compact('users'));
    }
}
