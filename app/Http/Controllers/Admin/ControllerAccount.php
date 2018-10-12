<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/10/2018
 * Time: 12:24 AM
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ControllerAccount extends Controller
{
    public function index()
    {
        return view('admin.account.index');
    }
}