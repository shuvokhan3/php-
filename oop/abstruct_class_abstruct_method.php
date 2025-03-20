<?php
//Real world application feature(File Export System) use abstract class conceft 
abstract class FileExporter{
    abstract public function export($data);
}

class PDFExporter extends FileExporter{
    public function export($data){
        echo "Exporting data as PDF . $data";
    }
}

class CSVExporter extends FileExporter{
    public function export($data) {
        echo "Exporting data as CSV.$data";
    }
}

$pdfFormate = new PDFExporter();
$pdfFormate->export("The name of my cournty is Bangladesh");

$csvFormate = new CSVExporter();
$csvFormate->export("My name is shuvo");





