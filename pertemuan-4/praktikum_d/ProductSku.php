<?php

class Product {
    private string $sku;

    public function __construct(string $sku) {
        $this->sku = $sku;
    }

    public function getSku(): string {
        return $this->sku;
    }

    // SETTER (sengaja ditambahkan)
    public function setSku(string $sku): void {
        $this->sku = $sku;
    }
}

$p = new Product("SKU-001");
$p->setSku("SKU-XYZ"); // sekarang bisa diubah
echo $p->getSku();
