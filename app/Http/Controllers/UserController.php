<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
use App\Http\Resources\UserResource;
 
class UserController extends Controller
{
    public function index()
    {
        $users = UserResource::collection(User::all());
 
        return inertia('Users/Index', compact('users'));
    }
}