<!DOCTYPE html>
<html>       
<head>
    <meta charset="UTF-8">   
    <title>Input Berita</title>

    <link rel="stylesheet"

    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">

    <?php
    foreach ($berita as $row) {
    ?>    

    <form method="post" action="<?php echo site_url('Berita/edit');?>"
                  enctype="multipart/form-data">


  <input type="hidden" name="id" value="<?php echo $row->id_berita; ?> ">

                    <div class="form-group">
                        <label for="comment">Judul:</label>
                        <input type="text" class="form-control" 
                               name="in_judul" required="" value="<?php echo $row->judul; ?>"> 
                    </div> 

                    <div class="form-group">
                        <label for="comment">Isi : </label>
                        <textarea class="form-control" rows="5" name="in_isi" required=""> <?php echo $row->isi; ?></textarea>


                    </div>

                    <div class="form-group">
                        <label for="usr">Kategori:</label>
                        <select name="in_kategori" <?php echo $row->kategori; ?> class="form-control">
                            <option value="Agama">
                                Agama
                            </option>
                            <option value="Budaya">
                                Budaya
                            </option>
                            <option value="Ekonomi">
                                Ekonomi
                            </option>
                            <option value="Politik">
                                Politik
                            </option>
                            <option value="Sosial">
                                Sosial
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="comment">Penulis:</label>
                        <input type="text" class="form-control" 
                               name="in_penulis" required="" value="<?php echo $row->penulis; ?>"> 
                    </div> 


                    <div clas="form_group">
                        <label for="usr">Gambar:</label>
                        <input type="file" required="" class="form-control" name="in_gambar">
                    </div>
                    
                    <div class="form-group">
                                    <label for="comment">Tanggal:</label>  
                                    <input type="text" class="form-control" 
                                           name="in_tanggal" value="<?php echo $row->tanggal; ?>">
                                </div>
                    
                    <div class="form-group">
                        <img src="<?php echo base_url();
                        
                        ?>assets/upload/<?php echo $row->gambar; ?>"
                             style="width: 80px">
                    </div>

                    <button class="btn btn-success" type="submit">Simpan</button>
                </form>
                <?php
            }
            ?>
        </div>
    </body>
    </html>
