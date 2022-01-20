<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Items
        <small>Data Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Items</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Barcode Generator <i class="fa fa-barcode"></i></h3>
            <div class="pull-right">
                <a href="<?= site_url('item') ?>" class="btn btn-danger btn-flat btn-sm"><i class="fa fa-undo"></i> Back</a>
            </div>
        </div>

        <div class="box-body">
            <?php
            $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
            echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($row->barcode, $generator::TYPE_CODE_128)) . '" style="width: 200px;">';
            ?>
            <br>
            <?= $row->barcode ?>
            <br><br>
            <a href="<?= site_url('item/barcode_print/' . $row->item_id) ?>" class="btn btn-default btn-flat btn-xs" target="_blank"><i class="fa fa-print"></i> Print</a>
        </div>
    </div>

    <div class="box no-border">
        <div class="box-header">
            <h3 class="box-title">QR-Code Generator <i class="fa fa-qrcode"></i></h3>
        </div>

        <div class="box-body">
            <?php
            $writer = new Endroid\QrCode\Writer\PngWriter();

            // Create QR code
            $qrCode = Endroid\QrCode\QrCode::create($row->barcode)
                ->setEncoding(new Endroid\QrCode\Encoding\Encoding('UTF-8'))
                ->setErrorCorrectionLevel(new Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow())
                ->setSize(300)
                ->setMargin(10)
                ->setRoundBlockSizeMode(new Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin())
                ->setForegroundColor(new Endroid\QrCode\Color\Color(0, 0, 0))
                ->setBackgroundColor(new Endroid\QrCode\Color\Color(255, 255, 255));

            $result = $writer->write($qrCode);

            // Save it to a file
            $result->saveToFile('./uploads/qrcode/item-' . $row->barcode . '.png');
            ?>

            <img src="<?= base_url('uploads/qrcode/item-' . $row->barcode . '.png') ?>" style="width: 200px;">
            <br>
            <?= $row->barcode ?>
            <br><br>
            <a href="<?= site_url('item/qrcode_print/' . $row->item_id) ?>" class="btn btn-default btn-flat btn-xs" target="_blank"><i class="fa fa-print"></i> Print</a>
        </div>
    </div>
</section>
<!-- /.content -->