<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        
        $member = DB::table('tb_member')->get();
        return view('member/index',compact('member'));
    }

    public function store(Request $request)
    {
    

            DB::table('tb_member')->insert([
                'nama_member'=> $request->nama_member,
                'alamat_member' => $request->alamat_member,
                'jk'=>$request->jk,
                'tlp' => $request->tlp,
            ]);
        
        return redirect()->back()->with('masuk','Data Berhasil Di Input');
    }

    public function edit($id)
    {
        $member = DB::table('tb_member')->where('id_member',$id)->first();
        return view('member/edit',compact('member'));
    }

    public function update(Request $request)
    {
        
        DB::table('tb_member')->where('id_member',$request->id_member)->update([
            'nama_member'=> $request->nama_member,
            'alamat_member' => $request->alamat_member,
            'jk'=>$request->jk,
            'tlp' => $request->tlp,
        ]);

        return redirect('member')->with('update','Data Berhasil Di Update');
    }

}
