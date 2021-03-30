<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="10119913-kasus2.php" method="post">
        <table align="center" border="1">
            <tr>
                <td>Liter Awal</td>
                <td>Liter Akhir</td>
                <td>Bensin</td>
                <td>Solar</td>
                <td>Minyak Tanah</td>
            </tr>
            <tr>
                <td>
                    <Select name="ltawal">                    
                        <?php
                            for ($i=0; $i < 100; $i++) { 
                        ?>
                            <option value="<?= $i+1?>"><?= $i+1?></option>
                        <?php }?>
                    </Select>
                </td>
                <td>
                    <Select name="ltakhir">                    
                        <?php
                            for ($i=0; $i < 100; $i++) { 
                        ?>
                            <option value="<?= $i+1?>"><?= $i+1?></option>
                        <?php }?>
                    </Select>
                </td>
                <td><input type="checkbox" name="bensin" id="" value="Y"></td>
                <td><input type="checkbox" name="solar" id="" value="Y"></td>
                <td><input type="checkbox" name="minyak_tanah" id="" value="Y"></td>
            </tr>
            <tr>
                <td colspan="5" align="center"><input type="submit" name="hitung" value="Hitung BBM"></td>
            </tr>
        </table>
    </form>
    <br>
    <?php
        error_reporting(0);
        $hitung = $_POST['hitung'];
        $jbensin = $_POST['bensin'];
        $jsolar = $_POST['solar'];
        $jminyak = $_POST['minyak_tanah'];
        $bensin = 6000;
        $solar = 5500;
        $minyak = 2500;
        $ltawal;
        $ltakhir;
        if($hitung){
            $ltawal = $_POST['ltawal'];
            $ltakhir = $_POST['ltakhir'];
        }else{
            $ltawal = 1;
            $ltakhir = 10;
        }

    ?>

    <table align="center" border="1">
        <?php
            if($hitung){
        ?>
            <tr>
                <td>Liter</td>
                <?php
                    if($jbensin =="Y"){
                ?>
                    <td>Bensin</td>
                <?php }?>
                <?php
                    if($jsolar =="Y"){
                ?>
                    <td>Solar</td>
                <?php }?>
                <?php
                    if($jminyak =="Y"){
                ?>
                    <td>Minyak Tanah</td>
                <?php }?>
            </tr>
            <?php
                for ($i=$ltawal; $i <= $ltakhir; $i++) { 
            ?>
            <tr>
                <td><?= $i?></td>
                <?php
                    if($jbensin =="Y"){
                ?>
                    <td> <?=  number_format($bensin*$i,0,",",".");?></td>
                <?php }?>
                <?php
                    if($jsolar =="Y"){
                ?>
                    <td> <?=  number_format($solar*$i,0,",",".");?></td>
                <?php }?>
                <?php
                    if($jminyak =="Y"){
                ?>
                     <td> <?=  number_format($minyak*$i,0,",",".");?></td>
                <?php }?>
              
               
            </tr>
            <?php }?>

            <?php }else{
                
            ?>
        <tr>
            <td>Liter</td>
            <td>Bensin</td>
            <td>Solar</td>
            <td>Minyak Tanah</td>
        </tr>
        <?php
            for ($i=$ltawal; $i <= $ltakhir; $i++) { 
        ?>
        <tr>
            <td><?= $i?></td>
            <td> <?=  number_format($bensin*$i,0,",",".");?></td>
            <td> <?=  number_format($solar*$i,0,",",".");?></td>
            <td> <?=  number_format($minyak*$i,0,",",".");?></td>
        </tr>
        <?php }?>
            <?php }?>
    </table>
</body>
</html>