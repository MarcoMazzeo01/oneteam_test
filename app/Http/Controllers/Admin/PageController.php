<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index()
  {
    return view('admin.dashboard');
  }

  public function viewApartmentRegistrationForm()
  {
    return view('admin.register-apartment');
  }
}
