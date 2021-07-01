<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\UserTypes;
use Illuminate\Http\Request;

class TryController extends Controller
{
    public function TryController() {
        $users = UserTypes::get();
        return response()->json($users);
    }
}
