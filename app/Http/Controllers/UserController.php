<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller {

    public function create(Request $request) {

        Users::create([
            "type" =>
                $request->user_type,
            "username" =>
                $request->user_username,
            "name" =>
                $request->user_name,
            "surname" =>
                $request->user_surname,
            "phoneNumber" =>
                $request->user_phoneNumber,
            "mail" =>
                $request->user_mail,
            "password" =>
                $request->user_password
        ]);

        return response()->json(Users::latest()->first());

    }

    public function list() {

        $usersList = Users::with('type')->latest()->get();

        foreach ($usersList as $user) {
            dd($user);
        }

        
        // return response()->json($usersList);
        
    }

    public function banned(Request $request) {

        $userId = $request->id;

        Users::where('id' , $userId)->update([
            "is_banned" => "TRUE"
        ]);

        return Users::latest('updated_at')->first();
    }

    public function unbanned(Request $request) {

        $userId = $request->id;

        Users::where('id' , $userId)->update([
            "is_banned" => "FALSE"
        ]);

        return Users::latest('updated_at')->first();
    }

}
