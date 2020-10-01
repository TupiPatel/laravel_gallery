<?php

namespace App\Http\Controllers;



use App\Models\Photos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    //
    public function index(){
        return view('app');
    }

    // Retrieve all photos

    public function getPhotos(){

        //print_r(json_encode(Photos::get()->toArray()));

       // Array of fields you want to remove
        $fields_to_remove = ['email_verified_at', 'password', 'remember_token', 'created_at'];

        // Get the result of database
        $userId = auth()->user()->id;

        print_r($userId);
     
        $user = User::find($userId);

        // Transform user object to array
         $user = $user->toArray();

        // Create a collection with the user inside
        $collection = collect($user);

        // Get all fields of our collection except these fields we don't want
        $result = $collection->except($fields_to_remove);

        // Return
        print_r( $result);
       // print_r(json_encode(User::get()->exclude(['	email_verified_at', 'password', 'remember_token', 'created_at'])->toArray()));
    }
}
