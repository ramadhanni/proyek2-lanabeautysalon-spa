<?php

namespace App\Models;

use App\Core\Model;

class Layanan extends Model
{

    public function show()
    {
        $query = "SELECT * FROM tb_layanan ORDER BY id";

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $this->selects($stmt);
    }

    public function save()
    {
        $nama = $_POST['nama'];
        $kategori = $_POST['kategori'];
        $harga = $_POST['harga'];
        $desk = $_POST['desk'];
        $foto = $_POST['foto'];

        $sql = "INSERT INTO tb_layanan (nama, kategori, harga, desk, foto) 
                VALUES (:nama, :kategori, :harga, :desk, :foto)";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":kategori", $kategori);
        $stmt->bindParam(":harga", $harga);
        $stmt->bindParam(":desk", $desk);
        $stmt->bindParam(":foto", $foto);

        $stmt->execute();
    }

    public function edit($id)
    {
        $query = "SELECT * FROM tb_layanan WHERE id=:id";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $this->select($stmt);
    }

    public function update()
    {
        $nama = $_POST['nama'];
        $kategori = $_POST['kategori'];
        $harga = $_POST['harga'];
        $desk = $_POST['desk'];
        $foto = $_POST['foto'];
        $id = $_POST['id'];

        $sql = "UPDATE tb_layanan
                SET nama=:nama, kategori=:kategori, harga=:harga, desk=:desk, foto=:foto
                WHERE id=:id";

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":kategori", $kategori);
        $stmt->bindParam(":harga", $harga);
        $stmt->bindParam(":desk", $desk);
        $stmt->bindParam(":foto", $foto);
        $stmt->bindParam(":id", $id);

        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tb_layanan WHERE id = :id";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
}
