<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Okres;

class Main extends BaseController
{
    var $okres;
    var $data; 

    public function __construct() 
    {
        $this->okres = new Okres();
        $this->data['okresy'] = $this->okres->where('kraj', 141)->findAll(); 
    }
    public function index()
    {
        $data['okresy'] = $this->data['okresy'];
        return view('index', $data);
    }
    public function okres($kod, $pocetPolozek = 20)
    {
        
        $this->data['kod'] = $kod;
        $this->data['adresy'] = $this->okres->select('obec.nazev, count(*) as pocet')->join('obec', 'obec.okres=okres.kod')
            ->join('cast_obce', 'cast_obce.obec=obec.kod')
            ->join('ulice', 'ulice.cast_obce=cast_obce.kod')
            ->join('adresni_misto', 'adresni_misto.ulice=ulice.kod')->where('okres.kod', $kod)->groupBy('obec.kod')->paginate($pocetPolozek);
        $this->data['pager'] = $this->okres->pager;
        $this->data['perPage'] = $pocetPolozek;
        return view('okres', $this->data);
    }
}
