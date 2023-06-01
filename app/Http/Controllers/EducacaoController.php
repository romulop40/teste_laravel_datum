<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducacaoController extends Controller
{
    /**
     * Mostra a pagina home
     *
     * @return void
     */
    public function index()
    {
        return view('home');
    }
    /**
     * Mostra a pagina de sobre
     *
     * @return void
     */
    public function sobre()
    {
        echo "Conteudo dinamico Sobre";
    }
    /**
     * Mostra a pagina de contato
     *
     * @return void
     */
    public function contato()
    {
        echo "Conteudo dinamico Contato";
    }
}
