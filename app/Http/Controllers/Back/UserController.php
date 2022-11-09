<?php

namespace App\Http\Controllers\Back;

use App\Models\User;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);

        return view('back.users.index', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('back.users.show', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('status', 'Utilisateur ' . $user->nom_utilisateur . 'supprimé');
    }

    public function activation(Request $request)
    {

        $user = User::findOrFail($request->user_id);

        $user->active = !$user->active;
        $user->save();

        return response()->json([
            'data' => [
                'success' => $user->active ? 'Utilisateur ' . $user->title . ' activé' : 'Utilisateur ' . $user->title . ' desactivé',
                'user_active' => $user->active
            ]
        ]);
    }
}
