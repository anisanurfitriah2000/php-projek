<?php

namespace App\Controllers;

use App\models\FreshFishModel; //Menggunakan file model yang bernama freshfishModel


class Home extends BaseController
{
	public function index()
	{
        $freshfish = new freshfishModel();
		
        $cart = cart();
        $data['carttotal'] = $cart->totalItems();
        $data['freshfishx'] = $freshfish->findAll();
        
		return view('home', $data);
	}

}

