<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>220030668_Kalkulator</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container vh-100">
        <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-4"> 
            <form action="220030668-Kalkulator.php" method="post">
                <div class="mb-3">
                    <label for="bilangan1" class="form-label">Bilangan Pertama</label>
                    <input type="number" name="bilangan1" id="bilangan1" placeholder="Masukkan Bilangan Pertama" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="operasi" class="form-label">Operasi</label>
                    <select name="operasi" id="operasi" class="form-select">
                        <option value="tambah">+</option>
                        <option value="kurang">-</option>
                        <option value="bagi">/</option>
                        <option value="kali">x</option>
                    </select>   
                </div>
                <div class="mb-3">
                    <label for="bilangan2" class="form-label">Bilangan Kedua</label>
                    <input type="number" name="bilangan2" id="bilangan2" placeholder="Masukkan Bilangan Kedua" class="form-control">
                </div>
                <button type="submit" class="btn btn-warning">Hitung</button>
            </form>
            <div class="mt-3 fs-3 fw-semibold">
                <?php
                if($_POST){
                    switch ($_POST ['operasi']) {
                        case 'tambah':
                           echo $_POST['bilangan1']+$_POST['bilangan2'];
                        break;
                        case 'kurang':
                            echo $_POST['bilangan1']-$_POST['bilangan2'];
                        break;
                        case 'bagi':
                            echo $_POST['bilangan1']/$_POST['bilangan2'];
                        break;
                        case 'kali':
                            echo $_POST['bilangan1']*$_POST['bilangan2'];
                        break;			
                    }
                }
                ?>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html> 