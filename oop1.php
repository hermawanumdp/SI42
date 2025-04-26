<?php

class Nilai{
    private $status;

    public function setStatus($nilai){
        if($nilai>=50){
            $this->status="Lulus";
        }else{
            $this->status="Tidak Lulus";
        }
    }

    public function getStatus(){
        return $this->status;
    }
}

$objekNilai = new Nilai();
$objekNilai->setStatus(20);
echo $objekNilai->getStatus();

echo "Hello dari repository Lokal";
?>
