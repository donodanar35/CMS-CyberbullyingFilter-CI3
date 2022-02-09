<?php
class Phpoffice {
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    function __construct() {
        require('./application/third_party/phpoffice/vendor/autoload.php');
        include_once APPPATH . '/third_party/phpspreadsheet/src/PhpSpreadsheet/Spreadsheet.php';
    }
}
?>