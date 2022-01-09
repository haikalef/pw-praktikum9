<?php
$db = mysqli_connect("localhost", "root", "", "praktikum_9");

function ambilData(){
    global $db;
    $data = mysqli_query($db, 'SELECT * FROM karyawan');
    $list_karyawan = [];
    while ($karyawan = mysqli_fetch_assoc($data)) {
      $list_karyawan[] = $karyawan;
    }
    return $list_karyawan;
}

function tambahData($data)
{
  global $db;
  $name     = $data["name"];
  $email    = $data["email"];
  $address  = $data["address"];
  $gender   = $data["gender"];
  $position = $data["position"];
  $status   = $data["status"];

  $query = "INSERT INTO karyawan(name, email, address, gender, position, status) values('$name', '$email', '$address', '$gender', '$position', '$status')";
  return mysqli_query($db, $query);
}

function hapusData($id)
{
  global $db;
  mysqli_query($db, "DELETE FROM karyawan WHERE id = $id");
  return mysqli_affected_rows($db);
}
?>