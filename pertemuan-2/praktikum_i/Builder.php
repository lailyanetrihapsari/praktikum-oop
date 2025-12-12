<?php
class Builder {
    private string $text = "";

    // Menambahkan teks dan mengembalikan objek sendiri untuk chaining
    public function add(string $s): self {
        $this->text .= $s;
        return $this;
    }

    // Mengubah teks menjadi huruf besar dan mengembalikan objek sendiri
    public function upper(): self {
        $this->text = strtoupper($this->text);
        return $this;
    }

    // Mengambil teks hasil builder
    public function get(): string {
        return $this->text;
    }
}

// Contoh penggunaan method chaining
$b = (new Builder())->add("Halo ")->add("Dunia");
echo $b->get() . PHP_EOL; // Output: Halo Dunia

// Contoh chaining dengan method upper
echo (new Builder())->add("halo ")->add("dunia")->upper()->get() . PHP_EOL; // Output: HALO DUNIA
