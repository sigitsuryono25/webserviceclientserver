<!DOCTYPE html>
<html>       
<head>
    <meta charset="UTF-8">  
     <title></title>
     <link rel="stylesheet" 

     href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   </head>
   <body>
       
       <div class="container">

        <p><a class="btn btn-success" href="<?php echo site_url('Berita/form'); ?>">Tambah</a></p>

        <div class="table-responsive"><table class="table table-striped">

            <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Isi</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>


  <tbody>
                       <?php 
                       $berita = $this->Berita_m->select_db();
                       $no = 1;
                       foreach ($berita as $row) {
                       ?> 

 <tr>
                            <th scope="row"><?php echo $no++;?></th>
                            <td><?php echo $row->judul;?></td>
                            <td><?php echo $row->isi;?></td>
                            <td><?php echo $row->kategori;?></td>
                            <td><?php echo $row->penulis;?></td>
                            <td>
                                <img src="<?php echo base_url(); ?>assets/upload/<?php 
                                 echo $row->gambar; ?>" style="width:80px">
                            </td>
                            <td><?php echo $row->tanggal;?>
                            </td>
                              <td>
                                <a class="btn btn-danger" href="<?php echo 
                            site_url('Berita/delete/'.$row->id_berita); ?>"
                            onclick="return confirm('Apakah anada yakin akan menghapus?')"> Hapus </a>
                                
                                <a class="btn btn-info" href="<?php 
                                echo site_url('Berita/select_by/'.$row->id_berita);?>">Edit</a>
                            </td>
                        </tr>

                         <?php } ?>

                     </tbody>
                 </table>
             </div>
         </div>
   </body>
   </html>