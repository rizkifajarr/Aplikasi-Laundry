<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        $dataUser = $user->get();
        return view('admin.user.index', compact('dataUser'));
    }

    public function tambah()
    {
        return view('admin.user.tambah');
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
        return view('admin.user.ubah', compact('user'));
    }

    public function update(User $user, UpdateUserRequest $request)
    {
        $data = $request->all();
        // dd($data);
        $user->update($data);
        return redirect(route('user.index'))->with('success', 'Data user berhasil diubah');
    }
    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
