<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\UserCreateProfileRequest;
use App\Procategory;
use App\Professional;
use App\User;
use App\Country;
use App\Protype;

class UserProfessionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        
        $user = User::findOrFail($user_id);
        
        $profiles =  $user->proProfiles;
        
        
        return view('user.professional.index', compact('profiles'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Procategory::pluck('name', 'id')->all();
        $countries = Country::pluck('iso', 'id')->all();
        $types = Protype::pluck('name', 'id')->all();
        return view('user.professional.create', compact('categories', 'countries', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateProfileRequest $request)
    {
        $input = $request->all();
        
        $user = Auth::user();
        
        if ($profileFile = $request->file('profile_photo')) {
            $profilePhoto = time() . $profileFile->getClientOriginalName();
            
            $profileFile->move('images', $profilePhoto);
            
            $input['profile_photo'] = $profilePhoto;
            

        }
        
        if ($coverFile = $request->file('cover_photo')) {
            $coverPhoto = time() . $coverFile->getClientOriginalName();
            
            $coverFile->move('images', $coverPhoto);
            
            $input['cover_photo'] = $coverPhoto;
            

        }
        
        
        
        $user->proProfiles()->create($input);
        
        return redirect('user/professional');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Professional::findOrfail($id);
        
        $user_id = Auth::id();
        
        $profile_user_id = $profile->user_id;
        
        if ($user_id === $profile_user_id){
            
            return view('user.professional.show', compact('profile'));
        }
        
        return redirect('user/professional');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Professional::findOrfail($id);
        
        $user_id = Auth::id();
        
        $profile_user_id = $profile->user_id;
        
        
        if ($user_id === $profile_user_id) {
            $categories = Procategory::pluck('name', 'id')->all();
            $countries = Country::pluck('iso', 'id')->all();
            $types = Protype::pluck('name', 'id')->all();

            $profile = Professional::findOrfail($id);

            return view('user.professional.edit', compact('categories', 'countries', 'types', 'profile'));
        }
        
        return redirect('user/professional');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserCreateProfileRequest $request, $id)
    {
        
        $input = $request->all();
        
        $user = Auth::user();
        
        if ($profileFile = $request->file('profile_photo')) {
            $profilePhoto = time() . $profileFile->getClientOriginalName();
            
            $profileFile->move('images', $profilePhoto);
            
            $input['profile_photo'] = $profilePhoto;
            

        }
        
        if ($coverFile = $request->file('cover_photo')) {
            $coverPhoto = time() . $coverFile->getClientOriginalName();
            
            $coverFile->move('images', $coverPhoto);
            
            $input['cover_photo'] = $coverPhoto;
            

        }
        
        $user->proProfiles()->whereId($id)->first()->update($input);
        
        return redirect('user/professional');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Professional::findOrFail($id);
        
        unlink(public_path(). "/images/". $profile->profile_photo);
        unlink(public_path(). "/images/". $profile->cover_photo);
        
        $profile->delete();
        
        return redirect('user/professional');
    }
}















