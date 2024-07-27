<!DOCTYPE html>
<html>
<head>
    <title>Cek DPT - PPK Kecamatan Dawuan</title>
</head>
<style>
   div {
     width: 470px;
     height: 300px;
     border: 4px solid grey;
     margin: 10px;
   }
   .satu {border-radius: 10px;}
   .dua {border-radius: 20px;}
   .tiga {border-radius: 30px;}
   .empat {border-radius: 40px;}
</style>
<body>
<center><div class="dua">
    <br><br>
    <img src="kpu.png" width="10%"> <br>
    <h3>Data Pemilih PILKADA 2024 PPK Dawuan - Subang</h3>
    <form action="search.php" method="POST">
        <label for="nik"></label>
        <textarea style="resize:none;width:300px;height:70px;" id="nik" name="nik" required ></textarea><br>
       <font size="2"> <b>Keterangan :</b> Silahkan ketik Nomor Induk Kependudukan (NIK).</font> <br>
        <button type="submit">Cari</button>
    </form></div></center>
</body>
</html>