<?php

namespace App\Repositories;

use App\Interfaces\MahasiswaInterfaces;
use App\Models\MahasiswaModel;
use App\Traits\ValidationTraits;
use Illuminate\Http\Request;

class MahasiswaRepositories implements MahasiswaInterfaces{

    protected $model;
    use ValidationTraits;

    public function __construct(MahasiswaModel $model)
    {
        $this->model = $model;
    } 

    public function getAllData()
    {
        
    }

    public function createData(Request $request)
    {
        $data = $request->all();

        $validation = [
            'nama_mahasiswa' => 'required'
        ];

        $this->dataValidation($data,$validation);

        try {
            $data = new $this->model;
            $data->nama_mahasiswa = $request->input('nama_mahasiswa');
            $data->save();
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'failed',
                'errors' => $th->getMessage()
            ]);
        }

        return response()->json([
            'message' => 'success',
            'data' => $data
        ]);
    }
}