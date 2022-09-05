<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\title;
use App\Models\feacture;
use App\Models\file;
use Illuminate\support\DB;

class BlogControllaer extends Controller
{
    public function index()
    {
        return  view('frontend.blog');
    }
}