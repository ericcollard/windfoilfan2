<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Yajra\DataTables\Facades\DataTables;

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

        return view('users.index', compact('users'));
    }

    /**
     * Service providing data for jQueryDatatable
     * @return mixed
     */
    public function jsonIndex()
    {

        $query = User::query();

        return DataTables::of(
            $query
        )
            ->editColumn('name', function($user) {
                return "<a href='".route('user.profile', $user)."'>".$user->name."</a>";
            })
            ->rawColumns(['link','name'])
            ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.profile', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //$this->authorize('update',$user);

        $this->validate(request(), [
                'discipline_start' =>  'required|date_format:d/m/Y|',
                'weight' =>  'required',
            ]
        );

        $data = request()->all();
        $data['discipline_start'] = Carbon::createFromFormat('d/m/Y', $data['discipline_start'])->format('Y-m-d');
        if (array_key_exists('email_verified_at',$data) )
        {
            $data['email_verified_at'] = Carbon::createFromFormat('d/m/Y', $data['email_verified_at'])->format('Y-m-d');
        };
        $user->update($data);

        return redirect(route('user.profile',['user' => $user]))->with('flash', 'Your profile has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
