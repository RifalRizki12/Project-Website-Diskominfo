<?php

namespace App\Http\Controllers\cAdmins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DataDiri;
use Auth;

class DataAdminController extends Controller
{
    public function index()
    {
        $data_diri = DataDiri::all();

        return view('vAdmins.dataAdmin',compact(['data_diri']));
    }

    public function add(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email|unique:users',
            'avatar' => 'mimes:jpg,png,jpeg',
        ]);
        
        //insert ke tabel Users
        $user = new \App\User;

        if (Auth::user()->role=='admin utama') {
            $user->role = $request->role;
        } elseif (Auth::user()->role=='admin') {
            $user->role = 'admin';
        }
        
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('12345678');
        $user->remember_token = str_random(60);
        $user->save();
        
        //insert ke tabel control
        $request->request->add(['user_id' => $user->id ]);
        $datadiri = \App\models\DataDiri::create($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/profile/data-diri/',$request->file('avatar')->getClientOriginalName());
            $datadiri->avatar = $request->file('avatar')->getClientOriginalName();
            $datadiri->save();
        }
        $datadiri->save();

        return redirect('/dataAdmin');
    }

    public function edit($id)
    {
        $admin = \App\Models\DataDiri::find($id);
        return view('vAdmins.editAdmin',['admin'=>$admin]);
    }

    public function update(Request $request,$id)
    {
        
        $this->validate($request,[
            'avatar' => 'mimes:jpg,png,jpeg'
        ]);
        

        $admin = \App\Models\DataDiri::find($id);
        \App\User::find($admin->user_id)->update(['email'=>$request->email]);
        $data=$request->all();
        // unset($data['email']);
        $admin->update($data);
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/profile/data-diri/',$request->file('avatar')->getClientOriginalName());
            $admin->avatar = $request->file('avatar')->getClientOriginalName();
            $admin->save();
        }

        return redirect('dataAdmin');
        
    }

    public function delete($id)
    {
        $data = DataDiri::where('id',$id)->first();
        $user = \App\User::find($data->user_id);

        $data->delete();
        $user->delete();
        return redirect()->back();
    }

    public function profileSaya()
    {
        return view('vAdmins.profile');
    }

    public function profile($id)
    {
        $data = DataDiri::where('id',$id)->first();

        return view('vAdmins.adminProfile',compact(['data']));
    }

}
