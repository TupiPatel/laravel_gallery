<?php

namespace App\Http\Controllers;



use App\Models\Photos;
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

        print_r(json_encode(Photos::get()->toArray()));
    }
}
