<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Admin</h2>
<?php
include "conecction.php";
include "fungsi.php";
$nama = $biodata = $skill =$portofolio = $penjelasan1 = $penjelasan2 = $contact = "";
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $nama = bersihkan_input($_POST['nama']);
    $biodata = bersihkan_input($_POST['biodata']);
    $skill = bersihkan_input($_POST['skill']);
    $portofolio = bersihkan_input($_POST['portofolio']);
    $penjelasan1 = bersihkan_input($_POST['penjelasan1']);
    $penjelasan2 = bersihkan_input($_POST['penjelasan2']);
    $contact = bersihkan_input($_POST['contact']);
    $strSQL = "UPDATE tugas SET
    biodata='$biodata',  
    skill='$skill',
    portofolio='$portofolio',
    penjelasan1='$penjelasan1',
    penjelasan2='$penjelasan2', 
    contact='$contact',
    nama='$nama'";
    
    //echo "Query = ". $strSQL;
    $execStrSQL = mysqli_query($conn, $strSQL);
    if ($execStrSQL){
?>
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <b>Data Sukses</b> dimasukkan ke dalam DataBase
        </div>
<?php
    }
    else {
?>
        <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <b>Data Gagal</b> dimasukkan ke dalam DataBase<br>
            <?php echo "Error: ".$execStrSQL. "<br>".mysqli_error($conn); ?>
        </div>

<?php
        
    }
}
else{
    if(isset($_GET['nama'])){
        $nama = bersihkan_input($_GET['nama']);
        $strSQL = "SELECT * FROM tugas WHERE nama='$nama'";
        $execStrSQL = mysqli_query($conn, $strSQL);
        if (mysqli_num_rows($execStrSQL)) {
        while ($row = mysqli_fetch_assoc($execStrSQL)){
                $biodata = $row['biodata'];
                $skill = $row['skill'];
                $portofolio = $row['portofolio'];
                $penjelasan1 = $row['penjelasan1'];
                $penjelasan2 = $row['penjelasan2'];
                $contact = $row['contact'];
            }
        }
    }
}

?>
    <form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">        
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th><input type="text" class="form-control" name="nama" value="<?= $nama ?>" ></th>       
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Biodata</td>        
                <td><input type="text" class="form-control" name="biodata" value="<?= $biodata ?>"></td>       
            </tr>
            <tr>
                <td>Skill</td>        
                <td><input type="text" class="form-control" name="skill" value="<?= $skill ?>"></td>       
            </tr>
            <tr>
                <td>Portofolio</td>        
                <td><input type="text" class="form-control" name="portofolio" value="<?= $portofolio ?>"></td>       
            </tr>
            <tr>
                <td>Penjelasan1</td>        
                <td><input type="text" class="form-control" name="penjelasan1" value="<?= $penjelasan1 ?>"></td>       
            </tr>
            <tr>
                <td>Penjelasan2</td>        
                <td><input type="text" class="form-control" name="penjelasan2" value="<?= $penjelasan2 ?>"></td>       
            </tr>
            <tr>
                <td>contact</td>        
                <td><input type="text" class="form-control" name="contact" value="<?= $contact ?>"></td>       
            </tr>
        </tbody>
    </table>
    <div class="row mb-2">
        <div class="col-sm-12">    
            <span class="m-1">                
                <button type="submit" href="viewall.php" class="btn btn-primary">
                    Simpan
                </button>
            </span>
            <td>
                <a href="viewall.php" class="btn btn-danger"> Kembali</a>
            </td>
        </div> 
    </div>
  </form>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>
</html>