<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileAvatarController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $attributes = request()->validate([
            'avatar' => ['required', 'image', 'dimensions:min_width=100,min_height=200'],
        ]);

        $attributes['avatar'] = request('avatar')->store('avatars');

        $user->update($attributes);

        return redirect()->route('profile.edit', $user)->with('success', 'Avatar is changed.');
    }
}
