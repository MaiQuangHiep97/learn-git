<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Notifications\TestNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class TestController extends Controller
{
    public function index(){
        $user = User::find(1);
        $post = Post::find(1);
        $user->notify(new TestNotification($post));
        // Notification::send(User::all(),new TestNotification($post));
    }
    public function test(){
        return view('notification');
    }
}
