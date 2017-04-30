<?php
/**
 * Created by PhpStorm.
 * User: dyyhobby
 * Date: 2017/4/30
 * Time: 18:42
 */

namespace App\Http\Controllers;
use App\Events\ServerCreated;
use App\User;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index(User $user){

        Auth::attempt(['email' => 'dyy@dyy.name','password' => 'secret']);

        event(new ServerCreated($user->first()));

        return view('welcome');

    }
}