<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
    return view('pages.settings_admin'); // Pastikan ini sesuai dengan nama file blade
    }
}
