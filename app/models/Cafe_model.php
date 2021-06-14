<?php

class Cafe_model {
    private $cfe = [
        [
            "Nama Cafe" => "Otten Coffee",
            "Alamat" => "Bekasi",
            "Kelas" => "Menengah",
            "Harga" => "80K-120K"
        ],
        [
            "Nama Cafe" => "SQL Coffee",
            "Alamat" => "Pasuruan",
            "Kelas" => "Merakyat",
            "Harga" => "10K-25K"
        ],
        [
            "Nama Cafe" => "Hollywings",
            "Alamat" => "Jakarta",
            "Kelas" => "Elite",
            "Harga" => "300K-5JT"
        ],
    ];

    public function getAllCafe()
    {
        return $this->cfe;
    }



}