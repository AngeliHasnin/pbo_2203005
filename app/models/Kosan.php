<?php

namespace App\Models;

use App\Core\Model;

class Kosan extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_kosans";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $nama_kosan = $_POST['nama_kosan'];
            $alamat = $_POST['alamat'];
            $fasilitas = $_POST['fasilitas'];
            $harga = $_POST['harga'];
            

            $sql = "INSERT INTO tb_kosans
            SET nama_kosan=:nama_kosan, alamat=:alamat, fasilitas=:fasilitas, harga=:harga";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama_kosan", $nama_kosan);
            $stmt->bindParam(":alamat", $alamat);
            $stmt->bindParam(":fasilitas", $fasilitas);
            $stmt->bindParam(":harga", $harga);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_kosans WHERE kosan_id=:kosan_id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":kosan_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
        $nama_kosan = $_POST['nama_kosan'];
        $alamat = $_POST['alamat'];
        $fasilitas = $_POST['fasilitas'];
        $harga = $_POST['harga'];
        $id = $_POST['id'];

            if (!empty($password)) {
                  $sql = "UPDATE tb_kosans
                  SET nama_kosan=:nama_kosan, alamat=:alamat, harga=:harga
                  WHERE kosan_id=:kosan_id";
            } else {
                  $sql = "UPDATE tb_kosans
                  SET nama_kosan=:nama_kosan, alamat=:alamat, fasilitas=:fasilitas, harga=:harga
                  WHERE kosan_id=:kosan_id";
            }

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama_kosan", $nama_kosan);
            $stmt->bindParam(":alamat", $alamat);
            $stmt->bindParam(":fasilitas", $fasilitas);
            $stmt->bindParam(":harga", $harga);
            $stmt->bindParam(":kosan_id", $id);

            $stmt->execute();
      }
            public function delete($id)
        {
            $sql = "DELETE FROM tb_kosans WHERE kosan_id=:kosan_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":kosan_id", $id);
            $stmt->execute();
        }
      }


