<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wearon;
use App\Models\Armor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function index() {
        $data = Wearon::all()->count();
        $data_armor = Armor::all()->count();
        $data_users = User::all()->count();
        return view('admin.index', compact('data', 'data_armor', 'data_users'));
    }
    public function tables() {
        return view('admin.wearonTable');
    }

}
