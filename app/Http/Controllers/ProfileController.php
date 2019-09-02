<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\News;
use App\Profile;

class ProfileController extends Controller
    {
        public function index(Request $request)
            {
                $profile = Profile::all();
                return view('news.profile',['profile' => $profile]);
            }
    }