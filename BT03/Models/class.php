<?php
    class Classes{
        private $id;
        private $tenLop;

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function gettenTheLoai(){
            return $this->tenLop;
        }

        public function settenTheLoai($tenLop){
            $this->tenLop = $tenLop;
        }
    }
?>
