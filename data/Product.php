<?php

class Product {
    
    private string $nama;
    private int $harga;

    public function __construct(string $nama, int $harga)
    {
        $this->nama = $nama;
        $this->harga = $harga;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function getHarga()
    {
        return $this->harga;
    }
}