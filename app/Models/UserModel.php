<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    protected $table = "user";

    public function allData()
    {
        return [
            [
                'userId' => '1',
                'nama' => 'Budi',
                'username' => 'budi'
            ],
            [
                'userId' => '2',
                'nama' => 'Dane',
                'username' => 'dane'
            ],
        ];
    }

    public function allDataDB()
    {
        return DB::table('user')->get();
    }

    public function detailData($id)
    {
        return DB::table('user')->where('userId', $id)->first();
    }

    public function addData($data)
    {
        DB::table('user')->insert($data);
    }

    public function editData($data, $id)
    {
        DB::table('user')->where('userId', $id)->update($data);
    }

    public function deleteData($id)
    {
        DB::table('user')->where('userId', $id)->delete();
    }
}
