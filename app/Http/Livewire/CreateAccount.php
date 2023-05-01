<?php

namespace App\Http\Livewire;

use App\Models\SchoolPersonnel;
use Illuminate\Database\QueryException;
use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CreateAccount extends Component
{
    public function render()
    {
        return view('livewire.create-account');
    }

    public function store(Request $request)
    {
        try
        {
            DB::transaction(function () use ($request){
                $user = User::create([
                    'email' => $request->email,
                    'name' => $request->firstname.' '.$request->lastname,
                    'password' => ('secret')
                ]);

                SchoolPersonnel::create([
                    'userID' => $user->id,
                    'p_firstname' => $request->firstname,
                    'p_midname' => $request->midname,
                    'p_lastname' => $request->lastname,
                    'p_sex' => $request->sex,
                    'p_position' => $request->position
                ]);

                $user->assignRole($request->position);
            });

            return back()->with('success', 'Account created');
        }
        catch(QueryException $e)
        {
            return back()->with('error', $e->getMessage());
        }
    }
}
