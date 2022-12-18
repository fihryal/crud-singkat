<?php 
$conn = mysqli_connect("localhost","root","","toko");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    
    while ($row=mysqli_fetch_assoc($result)){
        $rows[] = $row;
    };
    return $rows;
}


function delete ($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM resep WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function create($data){
    global $conn;
        //ambil data dati tiap element
        $gambar = htmlspecialchars ($_POST["gambar"]);
        $keterangan = htmlspecialchars ($_POST["keterangan"]);
        $nama = htmlspecialchars ($_POST["nama"]);
        $bahan = $_POST["bahan"];
        $cara_masak = $_POST["cara_masak"];
    
    
    
    //buat query insert data
    $query = "INSERT INTO resep VALUE (0,'$gambar','$keterangan','$nama','$bahan','$cara_masak')";
    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}

function update($data){
    global $conn;
    $id = $data["id"];

    //ambil data dari setiap element nya
    $gambar = htmlspecialchars ($_POST["ugambar"]);
    $keterangan = htmlspecialchars ($_POST["uketerangan"]);
    $nama = htmlspecialchars ($_POST["unama"]);
    $bahan = $_POST["ubahan"];
    $cara_masak = $_POST["ucara_masak"];

    $query = "UPDATE resep SET
                gambar = '$gambar',
                keterangan = '$keterangan',
                nama = '$nama',
                bahan = '$bahan',
                cara_masak = '$cara_masak'
                WHERE id = $id;
                ";
                mysqli_query($conn,$query);
                return mysqli_affected_rows($conn);
    
}


if(isset($_POST["btnUbahData"])){
    if (update($_POST) > 0){
        echo "
        <script>
        alert('data berhasil di Ubah!');
        </script>
        ";
    }else{
        echo "
        <script>
        alert('data gagal di Ubah!');
        </script>
        ";
    }
  }
  
if(isset($_POST["btn"])){
    if (create($_POST) > 0){
        echo "
        <script>
        alert('data berhasil di buat!');
        </script>
        ";
    }else{
        echo "
        <script>
        alert('data gagal di buat!');
        </script>
        ";
    }
  }
?>