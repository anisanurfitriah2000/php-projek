<?php
namespace App\Controllers;

use App\models\FreshFishModel; //Menggunakan file model yang bernama freshfishModel
use CodeIgniter\Exceptions\PageNotFoundException; //Menggunakan error handling

class freshfish extends BaseController // class freshfish merupakan varian dari BaseController
{
    protected $freshfish;
    function __construct()
    {
        $this->prodfreshfishuct = new freshfishModel();
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


    $this->prodfreshfishuct->insert([
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
		$ikan = new freshfishModel();
        $data['freshfish'] = $ikan->where('id_ikan', $id)->first();
		
        if (empty($data)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data freshfish tidak ditemukan !');
        }
		
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

    $this->prodfreshfishuct->update($id, [
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
         $datafreshfish = $this->prodfreshfishuct->find($id);
        if (empty($datafreshfish)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data freshfishtidak ditemukan !');
        }

        $this->prodfreshfishuct->delete($id);
        session()->setFlashdata('message', 'Berhasil menghapus data freshfish !');
        return redirect()->to('/freshfish');
    }
}


