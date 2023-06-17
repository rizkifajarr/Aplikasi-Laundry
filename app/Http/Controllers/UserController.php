<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\AuthUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        $dataUser = $user->get();
        return view('dashboard.user.index', compact('dataUser'));
    }

    public function indexAdmin(User $user)
    {
        $userId = Auth::id();
        $dataUser = $user->where('id', $userId)->get();
        return view('dashboard.index', compact('dataUser'));
        
    }

    public function tambah()
    {
        return view('dashboard.user.tambah');
    }

    public function create(User $user, StoreUserRequest $userRequest)
    {
        $data = $userRequest->all();
        $data['password'] = bcrypt($userRequest->password);
        $user->create($data);
        return redirect(route('user.index'))->with('success', 'Data user berhasil ditambahkan');
    }

    //fungsi untuk fitur register di frontend
    public function simpan(User $user, StoreUserRequest $userRequest)
    {
        $data = $userRequest->all();
        $data['password'] = bcrypt($userRequest->password);
        $user->create($data);
        return redirect(route('login'))->with('success', 'Data user berhasil ditambahkan');
    }

    public function delete(User $user)
    {
        $user->delete();
        return back()->with(['success' => 'Data berhasil dihapus']);
    }

    public function ubah(User $user)
    {
        $userId = Auth::id();
        if (Gate::allows('admin-gate')) {
            return view('dashboard.user.ubah', compact('user'));
        } else {
            if ($user->id == $userId ) {
                return view('dashboard.user.ubah', compact('user'));
            }else {
                return redirect(route('dashboard.tak-berhak'));
            }   
        }
        
    }

    public function update(User $user, UpdateUserRequest $request)
    {
        $data = $request->all();
        // dd($data);
        $user->update($data);

        if (Gate::allows('admin-gate')) {
            return redirect(route('user.index'))->with('success', 'Data user berhasil diubah');
        } else {
            return redirect(route('admin'))->with('success', 'Data user berhasil diubah');
        }
        
    }
   
    public function otentifikasi(AuthUserRequest $request)
    {
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard') 
                ->withSuccess('You have Successfully loggedin');
        }
        //return redirect("login")->withErrors('Oppes! You have entered invalid credentials');
        return Redirect::back()->with('loginError','Login gagal!');        //
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect(route('paket.landingpage'));
    }
}
