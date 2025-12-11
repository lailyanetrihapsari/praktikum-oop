<?php

// ---------------- TIGHT COUPLING ----------------
class PDFExporter_Tight {
    public function export($data) {
        return "PDF (Tight): " . $data;
    }
}

class Report_Tight {
    private PDFExporter_Tight $exporter;

    public function __construct() {
        // Terikat ke satu class → tight coupling
        $this->exporter = new PDFExporter_Tight();
    }

    public function generate($data) {
        return $this->exporter->export($data);
    }
}

// ---------------- LOOSE COUPLING ----------------
interface Exporter {
    public function export($data);
}

class PDFExporter implements Exporter {
    public function export($data) { return "PDF (Loose): " . $data; }
}

class ExcelExporter implements Exporter {
    public function export($data) { return "Excel (Loose): " . $data; }
}

class Report {
    private Exporter $exporter;

    public function __construct(Exporter $exporter) {
        // Bisa diganti-ganti eksporternya → loose coupling
        $this->exporter = $exporter;
    }

    public function generate($data) {
        return $this->exporter->export($data);
    }
}

// ---------------- TEST ----------------
echo "--- TIGHT COUPLING ---\n";
$rt = new Report_Tight();
echo $rt->generate("Data A") . "\n";

echo "\n--- LOOSE COUPLING ---\n";
$rl1 = new Report(new PDFExporter());
echo $rl1->generate("Data B") . "\n";

$rl2 = new Report(new ExcelExporter());
echo $rl2->generate("Data B") . "\n";
