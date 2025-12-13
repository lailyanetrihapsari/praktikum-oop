<?php

class Book {
    public function __construct(
        public private(set) string $title,
        public protected(set) string $author
    ) {}
}

// subclass
class Novel extends Book {
    public function changeAuthor(string $newAuthor): void {
        $this->author = $newAuthor; // BOLEH karena protected(set)
    }
}

// ==== TEST ====
$bk = new Book("How to PHP", "Ada");
echo $bk->title . PHP_EOL;

// $bk->title = "Judul Baru"; // ❌ ERROR (private set)

// pakai subclass
$nv = new Novel("OOP PHP", "Budi");
$nv->changeAuthor("Sinta");

echo $nv->title . PHP_EOL;
echo $nv->author . PHP_EOL;
