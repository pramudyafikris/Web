<?php
include "conecction.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
</head>
<body>

<div class="container">
  <h2>Biodata Mahasiswa</h2>
  <div class="row mb-2"> 
</div>          
  <table id="example" class="table table-striped">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Biodata</th>
        <th>Skill</th>
        <th>Portofolio</th>
        <th>Penjelasan1</th>
        <th>Penjelasan2</th>
        <th>Contact</th>
      </tr>
    </thead>
    <tbody>
<?php
  $strSQL = "SELECT * FROM tugas";
  $execStrSQL = mysqli_query($conn, $strSQL);

  if (mysqli_num_rows($execStrSQL) > 0){
    while ($row = mysqli_fetch_assoc($execStrSQL)){
?>
      <tr>
        <td><a href="view.php?nama=<?= $row["nama"]?>"><?= $row["nama"]?></a></td>
        <td><?= $row["biodata"]?></td>
        <td><?= $row["skill"]?></td>
        <td><?= $row["portofolio"]?></td>
        <td><?= $row["penjelasan1"]?></td>
        <td><?= $row["penjelasan2"]?></td>
        <td><?= $row["contact"]?></td>
        <td>
          <a href="edit.php?nama=<?= $row["nama"] ?>" class="btn btn-primary"> Edit</a>
        </td>
      </tr> 
<?php
  }
}
?>
    </tbody>
  </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
  </script>
</body>
</html>
