<?php

class Pegawai {
    protected string $nama;
    protected float $gajiDasar;

    public function __construct(string $nama, float $gajiDasar) {
        $this->nama = $nama;
        $this->gajiDasar = $gajiDasar;
    }

    public function hitungGaji(): float {
        return $this->gajiDasar;
    }
}

class PegawaiTetap extends Pegawai {
    protected float $tunjanganTetap = 2000000;

    public function hitungGaji(): float {
        return parent::hitungGaji() + $this->tunjanganTetap;
    }
}

class Manajer extends PegawaiTetap {
    protected float $tunjanganJabatan = 3000000;

    public function hitungGaji(): float {
        return parent::hitungGaji() + $this->tunjanganJabatan;
    }
}
class Direktur extends Manajer {
    protected float $tunjanganDirektur = 3000000;

    public function hitungGaji(): float {
        return parent::hitungGaji() + $this->tunjanganDirektur;
    }
}
$andi = new Direktur("Andi", 10000000);

echo "Gaji Andi: Rp" . $andi->hitungGaji() . "\n";


// ==== TEST ====
$dina = new PegawaiTetap("Dina", 5000000);
$faris = new Manajer("Faris", 7000000);

echo "Gaji Dina: Rp" . $dina->hitungGaji() . PHP_EOL;
echo "Gaji Faris: Rp" . $faris->hitungGaji() . PHP_EOL;
