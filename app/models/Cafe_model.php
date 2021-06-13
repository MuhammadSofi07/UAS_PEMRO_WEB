<?php 

class Cafe_model {
    private $cfe [
        [
            "Nama Cafe" => "Otten Coffee",
            "Alamat" => "Jakarta Utara",
            "Kelas" => "Menengah",
            "Harga Menu" => "80K - 120K"
        ],
        [
            "Nama Cafe" => "Talk Coffee",
            "Alamat" => "Pasuruan",
            "Kelas" => "Merakyat",
            "Harga Menu" => "15K - 30K"
        ],
        [
            "Nama Cafe" => "Barn Coffee",
            "Alamat" => "Bekasi",
            "Kelas" => "Menengah",
            "Harga Menu" => "70K - 100K"
        ],
        [
            "Nama Cafe" => "SQL Coffee",
            "Alamat" => "Pasuruan",
            "Kelas" => "Merakyat",
            "Harga Menu" => "10K - 25K"
        ]
    ];

    public function getAllCafe()
    {
        return $this->cfe;
    }
}
        