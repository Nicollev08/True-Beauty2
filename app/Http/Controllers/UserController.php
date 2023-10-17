<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'image' => 'nullable',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = User::create($request->all());

        return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente');
    }

    public function edit(User $user)
    {
        return view('admin.users.index', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'image' => 'nullable',
            'phone' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6', 
        ]);

        $user->update($request->all());

        return redirect()->route('users.index')->with('success', 'Usuario actualizado exitosamente');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuario eliminado exitosamente');
    }

    public function updateperfil(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        
        $user = auth()->user();

    
        if (!$user) {
            return redirect()->route('updateperfil')->with('error', 'Usuario no encontrado');
        }

        
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');

       
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('perfil_image', $imageName); 
            $user->image = $imageName;
        }


        if ($user instanceof \Illuminate\Database\Eloquent\Model) {
            $user->save();
        } else {
            return redirect()->route('updateperfil')->with('error', 'Error al guardar el perfil');
        }

        return redirect()->route('updateperfil')->with('success', 'Perfil actualizado exitosamente');
    }
}
