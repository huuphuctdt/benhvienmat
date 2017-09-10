<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    private $logo;
    public function __construct()
    {
        $this->logo = new Logo();
    }

    public function index(){
        $logo = $this->logo->getLogo();
        $data['logo'] = $logo;
        return view('admin.logo',$data);
    }
}
