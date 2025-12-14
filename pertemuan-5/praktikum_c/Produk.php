<?php

class Produk {
    protected string $nama;
    protected int $harga;

    public function __construct(string $nama, int $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getHarga(): int {
        return $this->harga;
    }
}

// diskon biasa
class ProdukDiskon extends Produk {
    protected float $diskon;

    public function __construct(string $nama, int $harga, float $diskon) {
        parent::__construct($nama, $harga);
        $this->diskon = $diskon;
    }

    public function getHarga(): int {
        return (int) ($this->harga * (1 - $this->diskon));
    }
}

// diskon tambahan (promo)
class ProdukPromo extends ProdukDiskon {
    private float $diskonTambahan;

    public function __construct(
        string $nama,
        int $harga,
        float $diskon,
        float $diskonTambahan
    ) {
        parent::__construct($nama, $harga, $diskon);
        $this->diskonTambahan = $diskonTambahan;
    }

    public function getHarga(): int {
        $hargaSetelahDiskon = parent::getHarga();
        return (int) ($hargaSetelahDiskon * (1 - $this->diskonTambahan));
    }
}

// ==== TEST ====
$produk1 = new ProdukDiskon("Laptop", 10000000, 0.10);
echo "Harga diskon biasa: Rp" . $produk1->getHarga() . PHP_EOL;

$produk2 = new ProdukPromo("Laptop Promo", 10000000, 0.10, 0.05);
echo "Harga diskon + promo: Rp" . $produk2->getHarga() . PHP_EOL;
