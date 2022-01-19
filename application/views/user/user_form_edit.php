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
            <h3 class="box-title">Edit Users</h3>
            <div class="pull-right">
                <a href="<?= site_url('user') ?>" class="btn btn-danger btn-flat"><i class="fa fa-undo"></i> Back</a>
            </div>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?php //echo validation_errors(); 
                    ?>
                    <form action="" method="post">
                        <div class="form-group <?= form_error('fullname') ? 'has-error' : null ?>">
                            <label for="name">Name *</label>
                            <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
                            <input type="text" name="fullname" class="form-control" id="name" value="<?= $this->input->post('fullname') ?? $row->name ?>" autocomplete="off">
                            <?= form_error('fullname') ?>
                        </div>
                        <div class="form-group <?= form_error('username') ? 'has-error' : null ?>">
                            <label for="username">Username *</label>
                            <input type="text" name="username" class="form-control" id="username" value="<?= $this->input->post('username') ?? $row->username ?>" autocomplete="off">
                            <?= form_error('username') ?>
                        </div>
                        <div class="form-group <?= form_error('password') ? 'has-error' : null ?>">
                            <label for="pass">Password</label> <small>(Biarkan kosong jika tidak diganti)</small>
                            <input type="password" name="password" class="form-control" id="pass" value="<?= $this->input->post('password') ?>" autocomplete="off">
                            <?= form_error('password') ?>
                        </div>
                        <div class="form-group <?= form_error('passconf') ? 'has-error' : null ?>">
                            <label for="cpass">Password Confirmation</label>
                            <input type="password" name="passconf" class="form-control" id="cpass" value="<?= $this->input->post('passconf') ?>" autocomplete="off">
                            <?= form_error('passconf') ?>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" cols="30" rows="10" class="form-control" autocomplete="off"><?= $this->input->post('address') ?? $row->address ?></textarea>
                        </div>
                        <div class="form-group <?= form_error('level') ? 'has-error' : null ?>">
                            <label for="level">Level *</label>
                            <select name="level" class="form-control" id="level">
                                <?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
                                <!-- <option value="">- Pilih -</option> -->
                                <option value="1" <?= $level == 1 ? 'selected' : null ?>>Admin</option>
                                <option value="2" <?= $level == 2 ? 'selected' : null ?>>Kasir</option>
                            </select>
                            <?= form_error('level') ?>
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