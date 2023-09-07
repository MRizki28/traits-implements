<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Repositories\MahasiswaRepositories;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    protected $mahasiswaRepositories;

    public function __construct(MahasiswaRepositories $mahasiswaRepositories)
    {
        $this->mahasiswaRepositories = $mahasiswaRepositories;
    }

    public function getAllData(){
        return $this->mahasiswaRepositories->getAllData();
    }

    public function createData(Request $request)
    {
        return $this->mahasiswaRepositories->createData($request);
    }
}
