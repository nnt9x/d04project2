<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class LoginController extends Controller
    {
        function viewLogin()
        {
            return view('login');
        }

        function login(Request $request)
        {
            $email = $request->get('email');
            $password = $request->get('password');

            $rs = Auth::attempt(
                ['email' => $email, 'password'=>$password]
            );
            if($rs == true){
                // Can xac dinh ai dang dang nhap
                $user = Auth::user();
                if($user->isAdmin == 1){
                   return redirect('admin/home');
                }
                else{
                    return redirect('/home');
                }
            }
            else{
                // Đăng nhập thất bại
                dd("Dang nhap that bai");
            }
        }

        function logout(Request $request){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        }
    }
