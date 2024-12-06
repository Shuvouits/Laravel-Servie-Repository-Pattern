<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\User\CreateUserService;
use App\Services\User\UpdateUserService;


class UserController extends Controller
{

    protected $createUserService, $updateUserService;

    public function __construct(CreateUserService $createUserService, UpdateUserService $updateUserService )
    {
        $this->createUserService = $createUserService;
        $this->updateUserService = $updateUserService;


    }

    public function index(){
        $users = User::latest()->get();
        return view('user.index', compact('users'));
    }

    public function create(){
        return view('user.create');
    }

    public function edit($id){
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function store(Request $request)
    {
        $validated = $request->only(['name', 'email', 'password']);
        $data = $this->createUserService->execute($validated);
        return redirect()->back()->with('success', 'Data store successfully');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->only(['name', 'email', 'password']);

        $data = $this->updateUserService->execute($id, $validated);

        return redirect()->route('user.index')->with('success', 'Data updated successfully');
    }


}
