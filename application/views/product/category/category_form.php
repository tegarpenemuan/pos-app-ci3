<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Categories
        <small>Kategori Barang</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">categories</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?= ucfirst($page) ?> Categories</h3>
            <div class="pull-right">
                <a href="<?= site_url('category') ?>" class="btn btn-danger btn-flat"><i class="fa fa-undo"></i> Back</a>
            </div>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?php //echo validation_errors(); 
                    ?>
                    <form action="<?= site_url('category/process') ?>" method="post">
                        <div class="form-group">
                            <label for="category_name">Categories Name *</label>
                            <input type="hidden" name="id" value="<?= $row->category_id ?>">
                            <input type="text" name="category_name" class="form-control" id="category_name" value="<?= $row->name ?>" autocomplete="off" required>
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