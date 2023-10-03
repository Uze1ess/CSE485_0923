<?php
    class SinhVien{
        private $id;
        private $tenSinhVien;
        private $email;
        private $ngaySinh;
        private $idLop;

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function gettensinhVien(){
            return $this->tenSinhVien;
        }

        public function settensinhVien($tenSinhVien){
            $this->tenSinhVien = $tenSinhVien;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getngaySinh(){
            return $this->ngaySinh;
        }

        public function setidTheLoai($ngaySinh){
            $this->ngaySinh = $ngaySinh;
        }

        public function getidLop(){
            return $this->idLop;
        }

        public function setidLop($idLop){
            $this->idLop = $idLop;
        }
    }
?>
