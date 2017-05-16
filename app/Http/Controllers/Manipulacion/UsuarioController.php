<?php

namespace App\Http\Controllers\Manipulacion;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function data()
    {
        return Datatables::of(User::select('*'))->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $usuarios =  User::all();
        return view('auth.index',compact('usuarios'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->active = $request->active;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('auth.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->active = $request->active;
        $user->username = $request->username;
        $user->email = $request->email;

        if ($request->actpass) {
            $this->validate($request, [
                'name' => 'required|max:100',
                'username' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users,email,'.$id,
                'password' => 'required|confirmed|min:6',
            ]);
            $user->password = bcrypt($request->password);
        }else{
            $this->validate($request, [
                'name' => 'required|max:100',
                'username' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users,email,'.$id,
            ]);
        }


        $user->save();
        return redirect('usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('usuario');
    }
}
