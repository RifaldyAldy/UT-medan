<?php
class database{
        private $host = "localhost";
        private $uname = "rifaldy";
        private $pass = "123";
        private $db = "db_akademik";
        private $conn;

        public function __construct(){
          $this->conn = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);

        }

        public function tampil(){
            $sql = "SELECT * FROM mahasiswa";
            $result = $this->conn->query($sql);
            $data = [];
            if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
            }
        return $data;
        }

        public function simpan($nama,$alamat,$usia){
            $sql = "INSERT INTO mahasiswa (nama,alamat,usia) VALUES(?,?,?)";

            $result = $this->conn->prepare($sql);

            $result->bind_param("ssi", $nama,$alamat,$usia);
            $result->execute();

            return $result->affected_rows;
        }

        public function hapus($id){
            $sql = "DELETE FROM mahasiswa WHERE id = $id";
            $this->conn->query($sql);
        }

}
?>