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
    <?php $this->view('messages') ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?= ucfirst($page) ?> Items</h3>
            <div class="pull-right">
                <a href="<?= site_url('item') ?>" class="btn btn-danger btn-flat"><i class="fa fa-undo"></i> Back</a>
            </div>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?php //echo validation_errors(); 
                    ?>
                    <form action="<?= site_url('item/process') ?>" method="post">
                        <div class="form-group">
                            <label for="barcode">Barcode *</label>
                            <input type="hidden" name="id" value="<?= $row->item_id ?>">
                            <input type="text" name="barcode" class="form-control" id="barcode" value="<?= $row->barcode ?>" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Product Name *</label>
                            <input type="text" name="name" class="form-control" id="name" value="<?= $row->name ?>" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="category">Category *</label>
                            <select name="category" id="category" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php foreach ($category->result() as $key => $data) : ?>
                                    <option value="<?= $data->category_id ?>" <?= $data->category_id == $row->category_id ? "selected" : null ?>><?= $data->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="unit">Unit *</label>
                            <?php echo form_dropdown('unit', $unit, $selectedunit, ['class' => 'form-control', 'required' => 'required']); ?>
                        </div>
                        <div class="form-group">
                            <label for="price">Price *</label>
                            <input type="number" min="0" name="price" class="form-control" id="price" value="<?= $row->price ?>" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat">
                                <i class="fa fa-paper-plane"></i> Save
                            </button>
                            <button type="reset" class="btn btn-flat">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->