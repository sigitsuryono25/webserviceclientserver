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

        <p><a class="btn btn-info" href="<?php echo site_url('Berita');?>">Data Berita</a></p>

          <form method="post" action="<?php echo site_url('Berita/insert');?>"
                  enctype="multipart/form-data">


<div class="form-group">
    <label for="usr">Judul:</label>
                    <input type="text" class="form-control" name="in_judul" required="">

</div>

 <div class="form-group">
                    <label for="comment">Isi :</label>
                    <textarea class="form-control" rows="5" name="in_isi" required=""></textarea>
                </div> 

<div class="form-group">
                    <label for="usr">Kategori:</label>
                    <select name="in_kategori" class="form-control">
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
                    <label for="usr">Penulis</label>
                    <input type="text" class="form-control" name="in_penulis" required="">
                </div>

 <div class="form-group">
                    <label for="usr">Gambar:</label>
                    <input type="file" class="form-control" name="gambar" required="">
                </div>

<button class="btn btn  -success" type="submit">Simpan
</button>

</form>
</div>      
 </body>
 </html>


