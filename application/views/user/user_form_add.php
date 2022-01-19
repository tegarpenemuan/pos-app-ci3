<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Users
        <small>Pengguna</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Users</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Add Users</h3>
            <div class="pull-right">
                <a href="<?= site_url('user') ?>" class="btn btn-danger btn-flat"><i class="fa fa-undo"></i> Back</a>
            </div>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?php echo validation_errors(); ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" name="fullname" class="form-control" id="name" value="<?= set_value("fullname") ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="username">Username *</label>
                            <input type="text" name="username" class="form-control" id="username" value="<?= set_value("username") ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="pass">Password *</label>
                            <input type="password" name="password" class="form-control" id="pass" value="<?= set_value("password") ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="cpass">Password Confirmation *</label>
                            <input type="password" name="passconf" class="form-control" id="cpass" value="<?= set_value("passconf") ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" cols="30" rows="10" class="form-control" autocomplete="off"><?= set_value("address") ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="level">Level *</label>
                            <select name="level" class="form-control" id="level">
                                <option value="">- Pilih -</option>
                                <option value="1">Admin</option>
                                <option value="2">Kasir</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">
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