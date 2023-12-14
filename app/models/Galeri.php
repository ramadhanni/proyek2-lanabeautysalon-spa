<?php

namespace App\Models;

use App\Core\Model;

class Galeri extends Model
{
    public function show()
    {
        $query = "SELECT * FROM tb_galeris";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $this->selects($stmt);
    }

    public function save()
    {
        $judul_kegiatan = $_POST['judul_kegiatan'];
    
        // Mengambil informasi file
        if (isset($_FILES['foto']['name'])) {
            // File dipilih, lanjutkan dengan pengolahan file
            $foto = $_FILES['foto']['name'];
            $foto_temp = $_FILES['foto']['tmp_name'];
        
            // Simpan file ke direktori tertentu
            $upload_dir = $_SERVER['DOCUMENT_ROOT'] . '/assets/img/';
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }
    
            move_uploaded_file($foto_temp, $upload_dir . $foto);
        } else {
            // File tidak dipilih, tampilkan pesan kesalahan atau atur nilai default jika diperlukan
            echo "Error: Pilih file gambar terlebih dahulu.";
        }
        
        $deskripsi = $_POST['deskripsi'];
    
        $sql = "INSERT INTO tb_galeris SET judul_kegiatan=:judul_kegiatan, foto=:foto, deskripsi=:deskripsi";
        $stmt = $this->db->prepare($sql);
    
        $stmt->bindValue(":judul_kegiatan", $judul_kegiatan);
        
        // Jika file diupload, bind path yang baru
        if (isset($_FILES['foto']['name'])) {
            $stmt->bindValue(":foto", $upload_dir . $foto);
        }
    
        $stmt->bindValue(":deskripsi", $deskripsi);
    
        $stmt->execute();
    }
    


    public function edit($id)
    {
        $query = "SELECT * FROM tb_galeris WHERE id=:id";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $this->select($stmt);
    }

    public function update()
    {
        $judul_kegiatan = $_POST['judul_kegiatan'];
        $id = $_POST['id'];
    
        // Cek apakah file diupload
        if (!empty($_FILES['foto']['name'])) {
            $foto = $_FILES['foto']['name'];
            $foto_temp = $_FILES['foto']['tmp_name'];
    
            // Simpan file ke direktori tertentu
            $upload_dir = $_SERVER['DOCUMENT_ROOT'] . '/assets/img/';
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }
    
            move_uploaded_file($foto_temp, $upload_dir . $foto);
    
            $sql = "UPDATE tb_galeris SET judul_kegiatan=:judul_kegiatan, foto=:foto WHERE id=:id";
        } else {
            // Jika file tidak diubah, tidak perlu mengubah path gambar
            $sql = "UPDATE tb_galeris SET judul_kegiatan=:judul_kegiatan WHERE id=:id";
        }
    
        $stmt = $this->db->prepare($sql);
    
        $stmt->bindParam(":judul_kegiatan", $judul_kegiatan);
    
        // Jika file diupload, bind path yang baru
        if (!empty($_FILES['foto']['name'])) {
            $stmt->bindValue(":foto", $upload_dir . $foto);
        }
    
        $stmt->bindParam(":id", $id);
    
        $stmt->execute();
    }
    
    public function delete($id)
    {
        $sql = "DELETE FROM tb_galeris WHERE id=:id";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
}
?>
