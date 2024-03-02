<?php

namespace App\Http\Controllers;

use App\Models\UsersLocation;
use App\Models\UsersNumber;
use App\Models\UsersPersonalData;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function getNumber(Request $request)
    {
        $request->validate([
            'number' => 'required|max:13'
        ]);
        $phoneNumber = new UsersNumber();
        $phoneNumber->number = $request->number;
        $phoneNumber->save();

        return view('login.login_step_two');
    }

    public function getNameInfo(Request $request)
    {

        $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'name_father' => ['required', 'string'],
            'birthday' => ['required', 'date'],
            'email' => ['required', 'email'],
            'number_passport' => ['required', 'string'],
            'ipn' => ['required', 'string'],
        ]);

        $personalData = new UsersPersonalData();
        $personalData->first_name = $request->input('first_name');
        $personalData->last_name = $request->input('last_name');
        $personalData->name_father = $request->input('name_father');
        $personalData->birthday = $request->input('birthday');
        $personalData->email = $request->input('email');
        $personalData->episode_and_number = $request->input('episode_and_number');
        $personalData->number_passport = $request->input('number_passport');
        $personalData->ipn = $request->input('ipn');

        $personalData->save();
        return view('login.login_step_three');
    }

    public function getLocation(Request $request)
    {
        $request->validate([
            'region' => ['required', 'string'],
            'district' => ['required', 'string'],
            'city' => ['required', 'string'],
            'post_index' => ['required', 'string'],
            'street' => ['required', 'string'],
            'house' => ['required', 'string'],
            'apartment' => ['required', 'string'],
            'actual_address_differs' => ['required', 'boolean'],
        ]);

        $personalLocation = new UsersLocation();
        $personalLocation->region = $request->input('region');
        $personalLocation->district = $request->input('district');
        $personalLocation->city = $request->input('city');
        $personalLocation->post_index = $request->input('post_index');
        $personalLocation->street = $request->input('street');
        $personalLocation->house = $request->input('house');
        $personalLocation->apartment = $request->input('apartment');
        $personalLocation->actual_address_differs = $request->input('actual_address_differs');

        $personalLocation->save();
        dd($request->all());
        return view('login.login_step_three');
    }
}
