<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CPemesanan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_pesanan_ajax()
    {
        $this->load->model('Pesanan', 'mhs');

        $allpem = $this->mhs->get_datatable();
        $data = array();
        $no = $_POST['start'];
        $url = base_url();

        foreach ($allpem as $p) {
            $no++;

            $row = array();
            $row[] = $no;
            $row[] = $p->$nama;
            $row[] = $p->$metode;
            $row[] = $p->$alamat;
            $row[] = $p->$notelp;
            $row[] = $p->$tgl_peng;
            $row[] = $p->$roti1;
            $row[] = $p->$roti2;
            $row[] = $p->$roti3;
            $row[] = $p->$roti4;
            $row[] = $p->$roti5;


            $aksi  = '<a href="javascript:void();" class="btn btn-primary" onClick="edit(' . "'" . $p->nama . "'" . ')">edit</a>&emsp;';
            $aksi .= '<a href="javascript:void();" class="btn btn-danger" onClick="hapus(' . "'" . $p->nama . "'" . ')">hapus</a>';

            $row[] = $aksi;

            $data[] = $row;
        }
    }
    /*
    public function insert_pemesanan()
    {
        $nama      = $this->input->post('nama');
        $metode     = $this->input->post('metode');
        $alamat= $this->input->post('alamat');
        $notelp   = $this->input->post('notelp');
        $tgl_peng = $this->input->post('tgl_peng');
        $roti1 = $this->input->post('roti1');
        $roti2  = $this->input->post('roti2');
        $roti3 = $this->input->post('roti3');
        $roti4 = $this->input->post('roti4');
        $roti5 = $this->input->post('roti5');
        

        $tgl_time   = strtotime($tgl_peng);
        $new_format = date('Y-m-d', $tgl_time); 

        $tgl_lahir  = $new_format;

        $this->load->model('Mahasiswa_ajax');

        $cek = $this->Mahasiswa_ajax->getByNama($nama);

        $data = array(
            'nama'      => $nama,
            'metode'     => $metode,
            'alamat'=> $alamat,
            'notelp'   => $notelp,
            'tgl_peng' => $tgl_peng,
            'roti1'    => $roti1,
            'roti2'  => $roti2,
            'roti3' => $roti3,
            'roti4' => $roti4,
            'roti5' => $roti5
            
        );
        if(count($cek) == 0)
        {
            $this->Mahasiswa_ajax->insert($data);
        }
        else
        {
            $this->Mahasiswa_ajax->update($data);
        }

        $allpem = $this->Mahasiswa_ajax->getAll();

        $data = array(
            'editpem' => null,
            'dtpem'   => $allpem,
            'top'     => 'top_admin',
            'header'  => 'header_admin',
            'menu'    => 'menu_admin',
            'content' => 'register_mahasiswa_ajax',
            'footer'  => 'footer_admin',
            'bottom'  => 'bottom_admin'
        );

        $this->load->view('admin/layout', $data);
    }
    public function edit()
    {
        $this->load->model('Mahasiswa_ajax');
        $nama = $this->input->get('nama');

        $mhs = $this->Mahasiswa_ajax->getByNIM($);

        $allpem = $this->Mahasiswa_ajax->getAll();

        $tgl_time   = strtotime($mhs[0]['tgl_peng']);
        $new_format = date('m/d/Y', $tgl_time);

        $mhs[0]['tgl_peng'] = $new_format;
        
        $data = array(
            'editmhs' => $mhs,
            'dtmhs'   => $allpem,
            'top'     => 'top_admin',
            'header'  => 'header_admin',
            'menu'    => 'menu_admin',
            'content' => 'register_mahasiswa',
            'footer'  => 'footer_admin',
            'bottom'  => 'bottom_admin'
        );

        $this->load->view('admin/layout', $data);
    }
    public function hapus()
    {
        $nama = $this->input->get('nama');

        $this->load->model('Mahasiswa_ajax');

        $this->Mahasiswa_ajax->delete($nama);

        $allpem = $this->Mahasiswa_ajax->getAll();

        $data = array(
            'editmhs' => null,
            'dtmhs'   => $allpem,
            'top'     => 'top_admin',
            'header'  => 'header_admin',
            'menu'    => 'menu_admin',
            'content' => 'register_mahasiswa',
            'footer'  => 'footer_admin',
            'bottom'  => 'bottom_admin'
        );

        $this->load->view('admin/layout', $data);
    }
*/
    public function insert_pemesanan_ajax()
    {

        $nama      = $this->input->post('nama');
        $metode     = $this->input->post('metode');
        $alamat = $this->input->post('alamat');
        $notelp   = $this->input->post('notelp');
        $tgl_peng = $this->input->post('tgl_peng');
        $roti1 = $this->input->post('roti1');
        $roti2  = $this->input->post('roti2');
        $roti3 = $this->input->post('roti3');
        $roti4 = $this->input->post('roti4');
        $roti5 = $this->input->post('roti5');


        $tgl_time   = strtotime($tgl_peng);
        $new_format = date('Y-m-d', $tgl_time);

        $tgl_peng  = $new_format;

        $this->load->model('Pesanan');

        $cek = $this->Pesanan->getByNama($nama);

        $data = array(
            'nama'      => $nama,
            'metode'     => $metode,
            'alamat' => $alamat,
            'notelp'   => $notelp,
            'tgl_peng' => $tgl_peng,
            'roti1'    => $roti1,
            'roti2'  => $roti2,
            'roti3' => $roti3,
            'roti4' => $roti4,
            'roti5' => $roti5

        );

        $result = 0;
        if (count($cek) == 0) {
            $result = $this->Pesanan->insert($data);
        } else {
            $result = $this->Pesanan->update($data);
        }

        echo $result;
    }

    public function edit_ajax()
    {
        $this->load->model('Pesanan', 'mhs');

        $nama = $this->input->post('nama');
        $mhs = $this->mhs->getByNama($nama);

        if (count($mhs) > 0) {
            $tgl_time = strtotime($mhs[0]['tgl_peng']);
            $new_format = date('m-d-Y', $tgl_time);
            $mhs[0]['tgl_peng'] = $new_format;
            echo json_encode($mhs[0]);
        } else {
            echo 0;
        }
    }
    public function hapus_ajax()
    {
        $this->load->model('Pesanan', 'mhs');
        $nama = $this->input->post('nama');

        if ($this->mhs->delete($nama))
            echo 1;
        else echo 0;
    }
}
