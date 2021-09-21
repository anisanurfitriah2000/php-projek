<?php

namespace App\Controllers;

use App\models\FreshFishModel; //Menggunakan file model yang bernama freshfishModel


class History extends BaseController
{
	public function index()
	{
        $freshfish = new freshfishModel();

        $data['freshfishx'] = $freshfish->findAll();
        $data['nama'] = 'ANISA';
        
		return view('history', $data);
	}

}

