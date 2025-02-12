<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perhitungan Diskon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body> 
    <script>

    </script>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="text-center">Aplikasi Perhitungan Diskon</h2>
                <form class="bg-light rounded border p-2 mt-2" method="post">
                    <label class="form-label">Harga Barang(Rp)</label>
                    <input type="number" name="harga" class="form-control" min="0" step="0,01" autofocus autocomplete="off" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="Masukkan Harga Barang" >
                    <label class="form-label">Diskon Barang(%)</label>
                    <input type="text" maxlength="3" name="diskon" class="form-control" min="0" max="100" autocomplete="off" onkeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="Masukkan Diskon Barang" >

                    <button type="submit" name="hitung" class="btn btn-primary w-100 p-2 mt-2">Hitung</button>
                    <button type="reset" name="delete" class="btn btn-danger w-100 p-2 mt-2">Hapus</button>
                    

                <?php 
                    if(isset($_POST['hitung'])){
                        $harga = $_POST['harga'];
                        $diskon = $_POST['diskon'];

                        if($harga < 0){
                               echo "<script>alert('HARGA TIDAK BOLEH NEGATIF!')</script>"; 
                        }elseif($diskon < 0 || $diskon > 100){
                            echo "<script>alert('DISKON HARUS DIANTARA 1 - 100!')</script>"; 
                        }else{
                            $nilai_diskon = $harga * ($diskon/100);
                            $total_harga = $harga - $nilai_diskon;
                            $_SESSION['hasil'] = "<div class='hasil'>
                        <p>Harga: Rp. <b>" . number_format($harga, 2, ',', '.') . "</b></p>
                        <p>Diskon $diskon%: Rp. <b>" . number_format($nilai_diskon, 2, ',', '.') . "</b></p>
                        <p>Total: Rp. <b>" . number_format($total_harga, 2, ',', '.') . "</b></p>
                        <form method='post'><button type='submit' name='hapus'>Hapus</button></form>
                      </div>";
                            ?>   

                <div class="border rounded bg-light p-2 mt-2" name="hapus">
                    <p>Harga barang : <b><?php echo number_format($harga,2,',','.') ?></b></p>
                    <p>Diskon barang <b><?php echo $diskon?>% Rp:<?php echo number_format($nilai_diskon,2,',','.')?></b></p>
                    <p>Total harga setelah diskon <b><?php echo number_format($total_harga,2,',','.')?></b></p>
                    <button onclick="hapus()" class="btn btn-danger w-100 p-2 mt-1">Hapus</button>
                </div>

                <?php
                        }
                    }
                    ?>
                
            </div>
        </div>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>

        function hapus(){
            var hapus = document.getElementsByName("hapus");
            huspa.remove();
        }
    </script>
</body>
</html>