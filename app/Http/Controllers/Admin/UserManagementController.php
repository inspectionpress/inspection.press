<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserManagementController extends Controller
{
	public function index()
	{
		$users = User::with('roles')->get();
		$roles = Role::all();
		return view('admin.users.index', compact('users', 'roles'));
	}

	public function assignRole(Request $request, User $user)
	{
		$request->validate([
			'role' => 'required|exists:roles,name',
		]);

		$user->syncRoles([$request->role]);

		return redirect()->route('admin.users.index')->with('success', 'Role updated successfully.');
	}
}