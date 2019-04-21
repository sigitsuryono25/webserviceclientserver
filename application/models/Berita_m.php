<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Berita_m
 *
 * @author Lenovo
 */
class Berita_m extends CI_Model{
    
    function insert_db($data){
        $this->db->insert('berita', $data);
    }
    
    function select_db(){
        return $this->db->query("select * FROM berita")->result();
    }
    
    function delete_db($id){
        $this->db->where('id_berita',$id);
        $this->db->delete('berita');
    }
    
//    function select_by_db($id){
//        return $this->db->query("select * from berita where id_berita='$id'")->result();
//    }
//    
//    function edit_db($id,$data){
//        $this->db->where('id_berita',$id);
//        $this->db->update('berita',$data);
//    }
    
    function select_by_db($id) {
        return $this->db  ->query("Select * FROM berita WHERE id_berita='$id'")->result();
    
    } 
    
    function edit_db($id, $data){   
        $this->db  ->where('id_berita', $id);   
        $this->db  ->update('berita', $data);
    
    }
     function select_berita() {
        $query = $this->db->query("SELECT * FROM berita order by tanggal DESC limit 5");
        return $query->result();
    }
    
    function select_berita_where($id) {
        $query = $this->db->query("SELECT * FROM berita WHERE id_berita='$id'");
        return $query->result();
    }

    function select_name($judul){
        $query = $this->db->query("SELECT * FROM berita WHERE judul like '%$judul%' ");
        return $query->result();
    }
    
}
