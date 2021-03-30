<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="10119913-kasus1.php" method="post">
    
    <table border="1"  width="300">
        <tr>
            <td colspan="2" style="text-align:center;">PENJUALAN</td>
        </tr>
        <tr>
            <td  width="125">Nama Barang</td>
            <td  width="175"><input type="text" name="barang"></td>
        </tr>
        <tr>
            <td >Harga</td>
            <td ><input type="number" name="harga"></td>
        </tr>
        <tr>
            <td >Quantity</td>
            <td ><input type="number" name="qty"></td>
        </tr>
        <tr>
            <td >Status</td>
            <td >
                <input type="radio" name="status" checked="true" value="pelanggan"> Pelanggan </br>
                <input type="radio" name="status" value="bukan_pelanggan"> Bukan Pelanggan </br>
            </td>
        </tr>
        <tr>
            <td >Kota</td>
            <td >
                <select name="kota" id="kota">
                    <option value="32">Bandung</option>
                    <option value="31">Jakarta</option>
                    <option value="35">Surabaya</option>
                </select>
            </td>
        </tr>
        <tr>
            <td ></td>
            <td >
                <input type="submit" name="kirim" value="Hitung">
                <input type="reset" value="Reset">
            </td>
        </tr>
    </table>
</form>

<?php
  error_reporting(0);
  $barang = $_POST['barang'];
  $harga = $_POST['harga'];
  $qty = $_POST['qty'];
  $status = $_POST['status'];
  $kota = $_POST['kota'];
  $submit = $_POST['kirim'];
  $subtotal = $harga * $qty;
  $diskon = 0;
  $ongkir = 0;
  ($status == "pelanggan") ? $diskon = 0.1 * $subtotal : $diskon = 0;
  switch ($kota) {
    case '32':
        $ongkir =10000;
        break;
    case '31':
        $ongkir =20000;
        break;
    case '35':
        $ongkir =30000;
        break;
        
    default:
        $ongkir = null;
        break;
  }

  $total = ($subtotal-$diskon)+$ongkir;  

?>
<br>
<?php

  if($submit){
?>
<table border="1" width="300">
        <tr>
            <td colspan="2" style="text-align:center;">PENJUALAN</td>
        </tr>
        <tr>
            <td  width="125">Nama Barang</td>
            <td  width="175"><?= $barang;?></td>
        </tr>
        <tr>
            <td >Harga</td>
            <td >Rp. <?=  number_format($harga,0,",",".");?></td>
        </tr>
        <tr>
            <td >Quantity</td>
            <td ><?= $qty;?></td>
        </tr>
        <tr>
            <td >Status</td>
            <td ><?= ($status=="pelanggan")?"Pelanggan":"Bukan Pelanggan";?></td>
        </tr>
        <tr>
            <td >Diskon</td>
            <td >Rp. <?=  number_format($diskon,0,",",".");?></td>
        </tr>
        <tr>
            <td >Ongkos Kirim</td>
            <td >Rp. <?=  number_format($ongkir,0,",",".");?></td>
        </tr>
        <tr>
            <td >Total</td>
            <td >Rp. <?=  number_format($total,0,",",".");?></td>
        </tr>
        
    </table>
<?php }else{
?>
    <table border="1" width="300">
        <tr>
            <td colspan="2" style="text-align:center;">PENJUALAN</td>
        </tr>
        <tr>
            <td  width="125">Nama Barang</td>
            <td  width="175"></td>
        </tr>
        <tr>
            <td >Harga</td>
            <td >Rp.</td>
        </tr>
        <tr>
            <td >Quantity</td>
            <td ><?= $qty;?></td>
        </tr>
        <tr>
            <td >Status</td>
            <td ></td>
        </tr>
        <tr>
            <td >Diskon</td>
            <td >Rp.</td>
        </tr>
        <tr>
            <td >Ongkos Kirim</td>
            <td >Rp.</td>
        </tr>
        <tr>
            <td >Total</td>
            <td >Rp. </td>
        </tr>
        
    </table>
<?php
}
?>
</body>
</html>