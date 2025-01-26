<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
use App\Http\Resources\UserResource;
use App\Http\Requests\StoreUserRequest;
 
class UserController extends Controller
{
    public function index()
    {
        $users = UserResource::collection(User::all());
 
        return inertia('Users/Index', compact('users'));
    }

    public function create()
    {
        return inertia('Users/Create');
    }

    public function edit(User $user)
    {
        return inertia('Users/Edit', compact('user'));
    }

    public function store(StoreUserRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('users.index')->with('message', 'User created.');
    }

    public function update(StoreUserRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()->route('users.index')->with('message', 'User updated.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
            ->with('message', 'User deleted');
    }
}