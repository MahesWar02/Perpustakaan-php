<?php

include_once ("./connect.php");

$query = mysqli_query($db, "SELECT * FROM buku");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <h1 class="my-4">Daftar Buku</h1>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nama Buku</th>
      <th scope="col">ISBN</th>
      <th scope="col">Unit</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($query as $buku) { ?>
            <tr>
                <td><?php echo $buku["nama"] ?></td>
                <td><?php echo $buku["isbn"] ?></td>
                <td><?php echo $buku["unit"] ?></td>
                <td><?php echo $buku["penerbit"] ?></td>
                <td><a href=<?php echo "edit-buku.php?id=" . $buku["id"] ?>>Edit</a>
                    <a href=<?php echo "delete-buku.php?id=" . $buku["id"] ?>>Hapus</a>
                </td>
            </tr>

        <?php } ?>

<!--
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
    -->

  </tbody>
</table>




    <table border="1">

        <tr>
            <td>Nama</td>
            <td>ISBN</td>
            <td>Unit</td>
            <td>Penerbit</td>
            <td>Action</td>
        </tr>


        <?php foreach ($query as $buku) { ?>
            <tr>
                <td><?php echo $buku["nama"] ?></td>
                <td><?php echo $buku["isbn"] ?></td>
                <td><?php echo $buku["unit"] ?></td>
                <td><?php echo $buku["penerbit"] ?></td>
                <td><a href=<?php echo "edit-buku.php?id=" . $buku["id"] ?>>Edit</a>
                    <a href=<?php echo "delete-buku.php?id=" . $buku["id"] ?>>Hapus</a>
                </td>
            </tr>

        <?php } ?>

    </table>

    <br>
    <a href="tambah-buku.php">Tambah buku</a>
    <br>
    <a href="index.php">Kembali ke halaman utama</a>
    </div>

</body>

</html>