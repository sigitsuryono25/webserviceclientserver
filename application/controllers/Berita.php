<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Berita
 *
 * @author Lenovo
 */
class Berita extends CI_Controller {

    function form() {
        $this->load->view('berita_form_v');
    }

    function insert() {
        $nm_file = time() . '.png';
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data();
            $data = array(
                'judul' => $this->input->post('in_judul'),
                'isi' => $this->input->post('in_isi'),
                'kategori' => $this->input->post('in_kategori'),
                'penulis' => $this->input->post('in_penulis'),
                'gambar' => $gambar['file_name']);

            $this->Berita_m->insert_db($data);
            redirect('Berita/form');
        } else {
            $error = array(
                'error' => $this->upload->display_errors()
            );
            echo json_encode($error);
        }
    }

    function index() {
        $this->load->view('berita_v');
    }

    function delete($id) {
        $this->Berita_m->delete_db($id);
        redirect('Berita');
    }

    function select_by($id) {
        $data['berita'] = $this->Berita_m->select_by_db($id);
        $this->load->view('berita_form_edit_v', $data);
    }

//    function edit(){
//        $id_berita = $this->input->post('id_berita');
//        $nm_file = $this->input->post('nm_foto');
//        $config['upload_path'] = './assets/upload/';
//        $config['allowed_types'] = 'jpg|jpeg|png';
//        $config['file_name'] = $nm_file;
//        $config['overwrite'] = TRUE;
//        $this->upload->initialize($config);
//
//        if ($this->upload->do_upload('in_gambar')) {
//            $gambar = $this->upload->data();
//            $data = array(
//                'judul' => $this->input->post('in_judul'),
//                'isi' => $this->input->post('in_isi'),
//                'kategori' => $this->input->post('in_kategori'),
//                'penulis' => $this->input->post('in_penulis'),
//                'gambar' => $gambar['file_name'],
//                'tanggal'=> date('Y-m-d H:i:s'));
//        } else {
//            $data = array(
//                'judul' => $this->input->post('in_judul'),
//                'isi' => $this->input->post('in_isi'),
//                'kategori' => $this->input->post('in_kategori'),
//                'penulis' => $this->input->post('in_penulis'),
//                'tanggal'=>$this->input->post('in_tanggal'));
//        }
//
//
//        $this->Berita_m->edit_db($id_berita, $data);
//        redirect('Berita');
//    }

    function edit() {
        $id = $this->input->post('id');
        $nm_file = $this->input->post('nm_foto');
        $config['upload_path'] = './assets/upload/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $nm_file;
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('in_gambar')) {
            $gambar = $this->upload->data();
            $data = array(
                'judul' => $this->input->post('in_judul'),
                'isi' => $this->input->post('in_isi'),
                'kategori' => $this->input->post('in_kategori'),
                'penulis' => $this->input->post('in_penulis'),
                'gambar' => $gambar['file_name'],
                'tanggal' => date('Y-m-d H:i:s')
            );
        } else {
            $data = array(
                'judul' => $this->input->post('in_judul'),
                'isi' => $this->input->post('in_isi'),
                'kategori' => $this->input->post('in_kategori'),
                'penulis' => $this->input->post('in_penulis'),
                'tanggal' => $this->input->post('in_tanggal'),
            );
        }
        $this->Berita_m->edit_db($id, $data);
        redirect('Berita');
    }
    
    //WEB SERVICE
    function select() {
        //menampilkan semua data dari tabel berita
        $response = array();
        $data['data'] = array();

        $result = $this->Berita_m->select_berita();

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_berita'] = $value->id_berita;
                $response['judul'] = $value->judul;
                $response['isi'] = $value->isi;
                $response['kategori'] = $value->kategori;
                $response['penulis'] = $value->penulis;
                $response['tanggal'] = $value->tanggal;
                $response['gambar'] = $value->gambar;

                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }
    
    function select_by_get($id) {
        //menampilkan data dari tabel berita berdasarkan id_berita
        //id_berita dapat dari get
        $response = array();
        $data['data'] = array();

        $result = $this->Berita_m->select_berita_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_berita'] = $value->id_berita;
                $response['judul'] = $value->judul;
                $response['isi'] = $value->isi;
                $response['kategori'] = $value->kategori;
                $response['penulis'] = $value->penulis;
                $response['tanggal'] = $value->tanggal;
                $response['gambar'] = $value->gambar;



                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }
    
    function select_by_post() {
        //menampilkan semua data dari tabel berita berdasarkan id_berita
        //id_berita dapat dari post
        
        $id = $this->input->post('id_berita');
        
        $response = array();
        $data['data'] = array();

        $result = $this->Berita_m->select_berita_where($id);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_berita'] = $value->id_berita;
                $response['judul'] = $value->judul;
                $response['isi'] = $value->isi;
                $response['kategori'] = $value->kategori;
                $response['penulis'] = $value->penulis;
                $response['tanggal'] = $value->tanggal;

                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }

    function select_name(){
        $judul = $this->input->get('judul');
        
        $response = array();
        $data['data'] = array();

        $result = $this->Berita_m->select_name($judul);

        if (sizeof($result) > 0) {
            foreach ($result as $value) {
                $response['id_berita'] = $value->id_berita;
                $response['judul'] = $value->judul;
                $response['isi'] = $value->isi;
                $response['kategori'] = $value->kategori;
                $response['penulis'] = $value->penulis;
                $response['tanggal'] = $value->tanggal;
                $response['gambar'] = $value->gambar;

                array_push($data['data'], $response);
            }

            $data['status'] = 0;
            $data['response'] = 'Data Ditemukan';

            die(json_encode($data));
        } else {
            $response['status'] = 1;
            $response['response'] = 'Tidak data yang ditampilkan';

            die(json_encode($response));
        }
    }

    
    

}
