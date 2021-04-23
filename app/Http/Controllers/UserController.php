<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

        $this->UserModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'user' => $this->UserModel->allData()
        ];

        $data = [
            'userDB' => $this->UserModel->allDataDB()
        ];

        return view('v_user', $data);
    }

    public function detail($id)
    {
        if (!$this->UserModel->detailData($id)) {
            abort(404);
        }

        $data = [
            'detail' => $this->UserModel->detailData($id)
        ];
        return view('v_detailuser', $data);
    }

    public function add()
    {
        return view('v_adduser');
    }

    public function insert()
    {
        Request()->validate([
            'name' => 'required',
            'username' => 'required|unique:user,username',
            'password' => 'required|min:8',
            'photo' => 'required|mimes:jpg,jpeg,png|max:500',
        ]);

        //insert data
        $file = Request()->photo;
        $fileName = Request()->name . '.' . $file->extension();
        $file->move(public_path('img'), $fileName);

        $data = [
            'name' => Request()->name,
            'username' => Request()->username,
            'password' => Request()->password,
            'foto' => $fileName
        ];

        $this->UserModel->addData($data);
        return redirect()->route('user')->with('message', 'User is successfully inserted.');
    }

    public function edit($id)
    {
        if (!$this->UserModel->detailData($id)) {
            abort(404);
        }

        $data = [
            'user' => $this->UserModel->detailData($id)
        ];

        return view('v_edituser', $data);
    }

    public function update($id)
    {
        Request()->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required|min:8',
            'photo' => 'mimes:jpg,jpeg,png|max:500',
        ]);

        if (Request()->photo <> "") {
            //insert data
            $file = Request()->photo;
            $fileName = Request()->name . '.' . $file->extension();
            $file->move(public_path('img'), $fileName);

            $data = [
                'name' => Request()->name,
                'username' => Request()->username,
                'password' => Request()->password,
                'foto' => $fileName
            ];

            $this->UserModel->editData($data, $id);
        } else {
            $data = [
                'name' => Request()->name,
                'username' => Request()->username,
                'password' => Request()->password,
            ];

            $this->UserModel->editData($data, $id);
        }

        return redirect()->route('user')->with('message', 'User is successfully updated.');
    }

    public function delete($id)
    {
        $user = $this->UserModel->detailData($id);

        if ($user->foto <> "") {
            unlink(public_path('img/') . $user->foto);
        }

        $this->UserModel->deleteData($id);
        return redirect()->route('user')->with('message', 'User has been successfully deleted!');
    }
}
