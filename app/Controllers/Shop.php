<?php
namespace App\Controllers;

use App\models\FreshFishModel; //Menggunakan file model yang bernama freshfishModel
use CodeIgniter\Exceptions\PageNotFoundException; //Menggunakan error handling

class shop extends BaseController // class freshfish merupakan varian dari BaseController
{
    protected $freshfish;
    function __construct()
    {
        $this->prodfreshfishuct = new freshfishModel();
    }

 public function co() //membuat fungsi index dengan sifat public
    {
		error_reporting(0);
		$db      = \Config\Database::connect();
        $cart = cart();
		foreach($cart->contents() as $c){
		
		
			$query   = $db->query("INSERT INTO tb_cart
				(kdikan, namaikan, qty, jumla) values (
					'".$c['id']."',
					'".$c['name']."',
					'".$c['qty']."',
					'".$c['price']."'
				)
			");
			
			$queryr = $db->query($query );
			
		}
		
		
        $cart->destroy();
   }
    public function beli() //membuat fungsi index dengan sifat public
    {
        //echo 'tes';

        $cart = cart();

		$db      = \Config\Database::connect();
		        // 'mytablename' is the name of your table

		$query   = $db->query('SELECT harga, nama_ikan FROM tb_freshfish where id_ikan = '.$this->request->getVar('id'));
		$results = $query->getResultArray();

        // Insert an array of values

        $cart->insert(array(

        'id'      => $this->request->getVar('id'),

        'qty'     => 1,

        'price'   => $results[0]['harga'],

        'name'    => $results[0]['nama_ikan'],

        'options' => array('Size' => 'L', 'Color' => 'Red')

        ));



        $datapembelian = $cart->contents();
        echo '<pre>';
        print_r($datapembelian);
        echo '</pre>';

    }

    public function keranjang() //membuat fungsi index dengan sifat public
    {
        $cart = cart();
        $data['carttotal'] = $cart->totalItems();
        $data['cartt'] = $cart->contents();
		return view('keranjang', $data);
    }

    public function koson() //membuat fungsi index dengan sifat public
    {
        $cart = cart();
        $cart->destroy();
    }

    public function index() //membuat fungsi index dengan sifat public
    {
        //membuat object model $freshfish
        $freshfish = new freshfishModel();

        $this->session = \Config\Services::session();
        if( $this->session->get('tipeuser')!='admin')
        {
                die('maaf anda bukan admin.');
        }  
        /*
        menyiapkan data untuk dikirim ke view dengan nama $freshfishx
        dengan ketentuan yang mempunyai status published pada data yang ada di database
        */
//    $data['freshfishx'] = $freshfish->where('status', 'published')->findAll();
        $data['freshfishx'] = $freshfish->findAll();
        //mengirim data ke view
        echo view('freshfish', $data);
    }
    
    public function add() //membuat fungsi add dengan sifat public
    {
      $freshfish = new freshfishModel();
	    $data['freshfishx'] = $freshfish->findAll();
        return view('freshfish-add', $data);
    }

    public function save() //membuat fungsi save dengan sifat public
    {
        if (!$this->validate([
            'id_ikan' => [
                'rules' => 'required|is_unique[tb_freshfish.id_ikan]',
                'errors' => [
                    'required' => 'ID ikan harus diisi!',
	        		'is_unique' => 'sudah ada {field} yang sama'
                ]
            ],
            'nama_ikan' => [
                'rules' => 'required',
                'errors' => [
                   'required' => 'Nama ikan harus diisi!'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!'
                ]
            ],
            'stok' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!'
                ]
            ],
    ])) {
        session()->setFlashdata('error', $this->validator->listErrors());
        return redirect()->back()->withInput();
    }

    $this->freshfish->insert([
        'id_ikan' => $this->request->getVar('id_ikan'),
        'nama_ikan' => $this->request->getVar('nama_ikan'),
        'harga' => $this->request->getVar('harga'),
        'stok' => $this->request->getVar('stok'),
        'status' => $this->request->getVar('status')
    ]);
     session()->setFlashdata('message', 'Data freshfishberhasil ditambahkan !');
        return redirect()->to('/freshfish');
    }

    function edit($id)
    {
        $datafreshfish = $this->freshfish->edit->find($id);
        if (empty($datafreshfish)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data freshfish tidak ditemukan !');
        }

        $data['freshfish'] = $datafreshfish;
        return view('freshfish-edit', $data);
    }

    public function saveEdit($id)
    {
        if (!$this->validate([
            'nama_ikan' => [
                'rules' => 'required',
                'errors' => [
                   'required' => 'Nama ikan harus diisi!'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!'
                ]
            ],
            'stok' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!'
                ]
            ],
    ])) {
        session()->setFlashdata('error', $this->validator->listErrors());
        return redirect()->back();
    }

    $this->freshfish->update($id, [
        'nama_ikan' => $this->request->getVar('nama_ikan'),
        'harga' => $this->request->getVar('harga'),
        'stok' => $this->request->getVar('stok'),
        'status' => $this->request->getVar('status')
    ]);
     session()->setFlashdata('message', 'Data freshfish berhasil diperbaikin !');
        return redirect()->to('/freshfish');
    }

    function delete($id)
    {
         $datafreshfish = $this->pfreshfish->find($id);
        if (empty($datafreshfish)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data freshfishtidak ditemukan !');
        }

        $this->freshfish->delete($id);
        session()->setFlashdata('message', 'Berhasil menghapus data freshfish !');
        return redirect()->to('/freshfish');
    }
}


