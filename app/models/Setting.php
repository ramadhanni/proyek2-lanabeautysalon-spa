<?php

namespace App\Models;

use App\Core\Model;

class Setting extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_setting_perusahaan";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $nama_perusahaan = $_POST['nama_perusahaan'];
            $alamat = $_POST['alamat'];
            $pemimpin_perusahaan = $_POST['pemimpin_perusahaan'];
            $jumlah_karyawan = $_POST['jumlah_karyawan'];
            $kategori_perusahaan = $_POST['kategori_perusahaan'];

            $sql = "INSERT INTO tb_setting_perusahaan
            SET nama_perusahaan=:nama_perusahaan, alamat=:alamat, pemimpin_perusahaan=:pemimpin_perusahaan, jumlah_karyawan=:jumlah_karyawan, kategori_perusahaan=:kategori_perusahaan";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama_perusahaan", $nama_perusahaan);
            $stmt->bindParam(":alamat", $alamat);
            $stmt->bindParam(":pemimpin_perusahaan", $pemimpin_perusahaan);
            $stmt->bindParam(":jumlah_karyawan", $jumlah_karyawan);
            $stmt->bindParam(":kategori_perusahaan", $kategori_perusahaan);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_setting_perusahaan WHERE id_perusahaan=:id_perusahaan";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id_perusahaan", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $nama_perusahaan = $_POST['nama_perusahaan'];
            $alamat = $_POST['alamat'];
            $pemimpin_perusahaan = $_POST['pemimpin_perusahaan'];
            $jumlah_karyawan = $_POST['jumlah_karyawan'];
            $kategori_perusahaan = $_POST['kategori_perusahaan'];
      
            $id = $_POST['id_perusahaan'];
      
            $sql = "UPDATE tb_setting_perusahaan
                  SET nama_perusahaan=:nama_perusahaan, alamat=:alamat, pemimpin_perusahaan=:pemimpin_perusahaan,
                  jumlah_karyawan=:jumlah_karyawan, kategori_perusahaan=:kategori_perusahaan
                  WHERE id_perusahaan=:id_perusahaan";
      
            $stmt = $this->db->prepare($sql);
      
            $stmt->bindParam(":nama_perusahaan", $nama_perusahaan);
            $stmt->bindParam(":alamat", $alamat);
            $stmt->bindParam(":pemimpin_perusahaan", $pemimpin_perusahaan);
            $stmt->bindParam(":jumlah_karyawan", $jumlah_karyawan);
            $stmt->bindParam(":kategori_perusahaan", $kategori_perusahaan);
            $stmt->bindParam(":id_perusahaan", $id);
      
            $stmt->execute();
      }
      

      public function delete($id)
      {
            $sql = "DELETE FROM tb_setting_perusahaan WHERE id_perusahaan=:id_perusahaan";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id_perusahaan", $id);
            $stmt->execute();
      }
}
