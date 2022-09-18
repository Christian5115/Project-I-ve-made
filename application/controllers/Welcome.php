<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->show_menu();
	}
/*
	public function show_home()
	{
		$data = array(
			'top'     => 'top_admin',
			'header'  => 'header_admin',
			'menu'    => 'menu_admin',
			'content' => 'home',
			'footer'  => 'footer_admin',
			'bottom'  => 'bottom_admin'
		);

		$this->load->view('admin/layout', $data);
	}
*/
	public function show_menu()
	{
		$data = array(
			'top'     => 'top_admin',
			'header'  => 'header_admin',
			'menu'    => 'menu_admin',
			'content' => 'menuRoti',
			'footer'  => 'footer_admin',
			'bottom'  => 'bottom_admin'
		);

		$this->load->view('admin/layout', $data);
	}
	public function show_register()
	{
		$this->load->model('Pesanan');

		$allmhs = $this->Pesanan->getAll();

		$data = array(
			'editmhs' => null,
			'dtmhs'   => $allmhs,
			'top'     => 'top_admin',
			'header'  => 'header_admin',
			'menu'    => 'menu_admin',
			'content' => 'register_pesanan_ajax',
			'footer'  => 'footer_admin',
			'bottom'  => 'bottom_admin'
		);

		$this->load->view('admin/layout', $data);
	}
}
