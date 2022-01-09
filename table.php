<?php
include 'index.php';
$setData = ambilData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel PW9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container p-5">
        <button type="button" class="btn btn-primary"><a href="form.php" class="text-white">Add Data</a></button>
        <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Position</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php if ($setData) : ?>
            <?php foreach ($setData as $no => $datum) : ?>
              <tr class="hover">
                <td><?= $no + 1; ?></td>
                <td><?= $datum['name']; ?></td>
                <td><?= $datum['email']; ?></td>
                <td><?= $datum['address']; ?></td>
                <td><?= $datum['gender']; ?></td>
                <td><?= $datum['position']; ?></td>
                <td><?= $datum['status']; ?></td>
                <td>
                  <a class="btn bg-danger text-white" href="hapus-data.php?id=<?= $datum["id"]; ?>">Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
            </tbody>
          </table>

    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>