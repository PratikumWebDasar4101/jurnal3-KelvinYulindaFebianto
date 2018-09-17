<?php
mkdir("upload");
$file = $_FILES['filegambar']; //$_FILES[‘filegambar’] digunakan untuk mengambil file mentahnya yang kemudian dimasukan dalam variabel
$nama_file = $file['name']; 
$nama_tmp = $file['tmp_name'];
$upload_dir = "upload/";
move_uploaded_file($nama_tmp,$upload_dir.$nama_file);
echo "File berhasil diunggah."
?>
<img width="500px" src="upload/<?php echo $nama_file; ?>"> 