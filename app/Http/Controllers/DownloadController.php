<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {
        return response()->download('/OSPanel/domains/skills/public/files/'.request()->path, request()->path);
    }
}