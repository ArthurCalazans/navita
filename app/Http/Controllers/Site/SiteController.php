<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class SiteController extends Controller {

    public function index() {
        return view('home.index');
    }
    public function cadastroConfiguracao() {
        return view('cadastro.configuracao.index');
    }

}
