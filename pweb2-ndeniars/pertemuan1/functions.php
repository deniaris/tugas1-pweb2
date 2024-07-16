<?php

$conn = mysqli_connect("localhost","root","","pweb2");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$hobi = implode(", ", $_POST['hobi']);
$agama = $_POST['agama'];
$keterangan = $_POST['keterangan'];

// Upload foto
$foto = upload();

if(!$foto){
    return false;
}

$query = "INSERT INTO biodata VALUES ('$nim','$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$hobi','$agama','$keterangan','$foto')";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);


function upload(){
    // Tangani pengunggahan file gambar
    $filename = $_FILES['foto']['name'];
    $filesize = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];


    $fileExtensionValid = ['jpg','jpeg','png'];
    $fileExtension = explode('.', $filename);
    $fileExtension = strtolower(end($fileExtension));

    if(!in_array($fileExtension, $fileExtensionValid)){
        echo "<script>
            alert('Yang anda upload bukan gambar!');
            </script>";
        return false;
    }
    if($filesize > 5000000){
        echo "<script>
            alert('Ukuran gambar terlalu besar');
            </script>";
        return false;
    }

    $newFileName = uniqid();
    $newFileName .= '.';
    $newFileName .= $fileExtension;
    // var_dump($newFileName);
    // die;

    move_uploaded_file($tmpName, 'img/'.$newFileName);
    return $newFileName;

}

// Insert data into database
$sql = "INSERT INTO biodata (nim, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, hobi, agama, foto, keterangan)
VALUES ('$nim', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$hobi', '$agama', '$target_file', '$keterangan')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
