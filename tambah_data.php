<htmll>
    <head>
        <style type="text/css">
            #header {
                margin: 0 auto;
                width: 300px;
                text-align: left;
            }
            input {
                margin: 2px 2px;
            }
            h1 {
                text-align: center;
                border-bottom: groove 2px;
            }
        </style>
    </head>
    <?php
        include "koneksi.php";
        $succes = ""; 
        if(isset($_POST['submit'])) {
            $objek = $_POST['objek'];
            $nama_objek = $_POST['nama_objek'];
            $lintang = $_POST['lintang'];
            $bujur = $_POST['bujur'];
            $jenis = $_POST['jenis'];
            $sql = mysql_query("insert into penanda values('','$objek','$nama_objek','$lintang','$bujur','$jenis')");
            if($sql) {
                $succes = "Tambah data berhasil";
            } 
        }
    ?>
    <body>
        <div id="header">
            <h1>Tambah data : </h1>
            <form action="" method="post">
                Objek : <br> <input type="text" name="objek" id="id_objek" required="required"> <br>
                Nama Objek : <br> <input type="text" name="nama_objek" id="id_nama_objek" required="required"> <br>
                Lintang : <br> <input type="text" name="lintang" id="id_lintang" required="required"> <br>
                Bujur : <br> <input type="text" name="bujur" id="id_bujur" required="required"> <br>
                Jenis : <br> <input type="text" name="jenis" id="id_jenis" required="required"> <br>
                <input type="submit" value="Tambah" name="submit">
                <input type="reset" value="Batal"> <br><br>
                 <a href="index.php">Kembali</a>   
                    <?php
                        echo $succes;                      
                    ?>
            </form>
        </div>
    </body>
</htmll>