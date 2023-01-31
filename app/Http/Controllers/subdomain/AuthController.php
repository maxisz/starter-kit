<?php

namespace App\Http\Controllers\subdomain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    return view('subdomain.auth.signin', ['pageConfigs' => $pageConfigs]);
  }
}
