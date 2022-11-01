<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $datasend = [];
        $result = $this->curl('/list-user', 'POST', $datasend);
        $data = [];
        if ($result['error_code'] == '200') {
            $data = $result["payload"];
        }
        return view('user', ['data' => $data]);
    }

    public function tambah()
    {
        return view('tambah-user');
    }
    public function store(Request $request)
    {
        $datasend = [
            'name' => $request->nama,
            'email' => $request->email,
            'password' => $request->password
        ];
        $result = $this->curl('/create-user', 'POST', $datasend);
        if (!empty($result)) {
            if ($result['error_code'] == '200') {
                $message = "Berhasil Menambahkan User";
                session(['error' => $message]);
                return redirect('/user');
            }else {
                $message = "";
                foreach ($result['payload'] as $msg)
                {
                    $message .= $msg[0];
                }
                
                session(['error' => $message]);
                return redirect('/user');
            }
        }

        $message = "Gagal Menambahkan User";
        session(['error' => $message]);
        return redirect('/user');
    }

    public function edit($id)
    {
        $datasend = [];
        $result = $this->curl('/user/' . $id, 'POST', $datasend);
        $data = [];
        if ($result['error_code'] == '200') {
            $data = $result["payload"];
        }
        return view('edit-user', ['user' => $data]);
    }

    public function update(Request $request)
    {
        try {
            $datasend = [
                'name' => $request->nama,
                'email' => $request->email,
            ];
            if (!empty($request->password)) {
                $datasend['password'] = $request->password;
            }
            // print_r($datasend);die();
            $result = $this->curl('/update-user/' . $request->id, 'POST', $datasend);
            if (!empty($result)) {
                if ($result['error_code'] == '200') {
                    $message = "Berhasil Mengubah User";
                    session(['error' => $message]);
                    return redirect('/user');
                }
            }
            $message = "Gagal Mengubah User";
            session(['error' => $message]);
            return redirect('/user');
        } catch (Exception $e) {
            $message = "Gagal Mengubah User";
            session(['error' => $message]);
            return redirect('/user');
        }
    }

    public function hapus($id)
    {
        $datasend = [];
        $result = $this->curl('/delete-user/' . $id, 'POST', $datasend);
        $data = [];
        if (!empty($result)) {
            if ($result['error_code'] == '200') {
                $message = "Berhasil Hapus User";
                session(['error' => $message]);
                return redirect('/user');
            } 
        }

        $message = "Gagal Hapus User";
        session(['error' => $message]);
        return redirect('/user');
    }
}
