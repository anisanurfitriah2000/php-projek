<?php
namespace App\Controllers;

use App\Models\UsersModel;
class Login extends BaseController
{
	protected $session;
	public function index()
	{
		return view('login');
	}
	public function process()
	{
		$users = new UsersModel();

		$username = $this->request->getVar('username');
		$password = $this->request->getVar('password');

		$dataUser = $users->where([
			'username' => $username,
		])->first();
		
		if (! empty($dataUser)) {
			$session = session();
			if (password_verify($password, $dataUser->password)){
				session()->set([
					'username' => $dataUser->username,
					'name' => $dataUser->name,
					'logged_in' => TRUE
				]);
				$this->session = \Config\Services::session();
    			$this->session->set('sudahlogin','sudah');
    			$this->session->set('tipeuser',$dataUser->tipeuser);
				
				//die($this->session->get('sudahlogin'));
				return redirect()->to(base_url('home'));
			}else{
				session()->setFlashdata('error', 'Username', 'Password Salah');
				return redirect ()->back();
			}
		}else{
			session()->setFlashdata('error', 'Username', 'Password Salah');
			return redirect ()->back();
		}
	}
	function logout()
	{
		session()->destroy();
		return redirect()->to('/login');
	}
}