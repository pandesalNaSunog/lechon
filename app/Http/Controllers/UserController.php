<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Address;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function currentPassword(Request $request){
        $fields = $request->validate([
            'password' => 'required'
        ]);
        $userId = auth()->user()->id;
        $user = User::where('id', $userId)->first();
        
        if(Hash::check($fields['password'], $user->password)){
            return redirect('/profile/change-password/new')->with('correct-password','okay');
        }else{
            return back()->withErrors(['password' => 'Invalid Password'])->onlyInput('password');
        }
    }

    public function newPassword(){
        if(session()->has('correct-password')){
            return view('new-password',[
                'active' => 'new password'
            ]);
        }else{
            return redirec('/');
        }
    }

    public function changePasswordView(){
        return view('change-password',[
            'active' => 'profile'
        ]);
    }
    public function updateProfile(Request $request){
        $fields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required'
        ]);

        $userId = auth()->user()->id;

        $user = User::where('id', $userId)->first();
        $user->update($fields);

        return redirect('/profile')->with('message', 'Profile updated successfully.');
    }
    public function adminCheckUser(Request $request){
        if(isset(auth()->user()->id) && auth()->user()->user_type != "admin"){
            auth()->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return view('admin.login');
        }else if(isset(auth()->user()->id) && auth()->user()->user_type == "admin"){
            return redirect('/admin/users');
        }else{
            return view('admin.login');
        }
    }
    public function showEdit(){
        $id = auth()->user()->id;
        $user = User::where('id', $id)->first();

        return view('edit-profile',[
            'active' => 'edit',
            'user' => $user
        ]);
    }
    public function viewsignup(){
        return view('sign-up');
    }
    public function profile(){
        $id = auth()->user()->id;

        $user = User::where('id', $id)->first();
        $addresses = Address::where('user_id', $id)->get();
        return view('profile',[
            'user' => $user,
            'addresses' => $addresses,
            'active' => 'profile'
        ]);
    }
    public function signup(Request $request){
        $fields = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'contact' => 'required|min:11'
        ]);
        $fields['user_type'] = 'user';
        $fields['password'] = bcrypt($fields['password']);
        $user = User::create($fields);
        auth()->login($user);

        return redirect('/')->with('message', 'You have successfully registered and logged in!');
    }
    public function customerLogin(Request $request){
        $fields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $fields['user_type'] = 'user';

        if(auth()->attempt($fields)){
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Logged in successfully!');
        }

        return back()->withErrors(['email' =>'Invalid Credentials'])->onlyInput('email');
    }
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin');
    }

    public function customerLogout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function showLogin(){
        return view('login');
    }

    public function index(){
        $users = User::where('user_type', '<>', 'admin')->paginate(5);
        return view('admin.users',[
            'active' => 'users',
            'users' => $users
        ]);
    }
    //adminlogin
    public function adminLogin(Request $request){
        $fields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $fields['user_type'] = 'admin';

        if(auth()->attempt($fields)){
            $request->session()->regenerate();
            return redirect('/admin/users');
        }
        return back()->withErrors(['email'=> 'Invalid Credentials'])->onlyInput('email');
    }

    //createadmin
    public function create(){
        $fields = [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'user_type' => 'admin',
            'contact' => ''
        ];

        $user = User::create($fields);

        return response($user, 200);
    }
}
