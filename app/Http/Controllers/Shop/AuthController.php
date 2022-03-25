<?php

namespace App\Http\Controllers\Shop;

use App\Models\User;
use App\Models\feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    public function RegisterForm(){

        return view('auth.register');
    }

    public function register(Request $request) {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return redirect(route('accueil'));
    }

    public function feedbackUser(Request $request){

        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName =  time().'.'.$request->image->extension();

      

         $request->image->move(public_path('feedbacks'), $newImageName);

     

        $feedback = feedback::create([
            'image_path' => $newImageName
        ]);

        //dd();
     

        return redirect('/api/Feedback');

    
    
    }

  


}
