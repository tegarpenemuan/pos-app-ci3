<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Customers
        <small>Pelanggan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Customers</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data customers</h3>
            <div class="pull-right">
                <a href="<?= site_url('customer/add') ?>" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Create</a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?= $key + 1 ?>.</td>
                            <td><?= $data->name ?></td>
                            <td><?= $data->gender == 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
                            <td><?= $data->phone ?></td>
                            <td><?= $data->address ?></td>
                            <td class="text-center" width="160px" nowrap>
                                <a href="<?= site_url('customer/edit/' . $data->customer_id) ?>" class="btn btn-primary btn-flat btn-xs"><i class="fa fa-pencil"></i> Update</a>
                                <a href="<?= site_url('customer/del/' . $data->customer_id) ?>" onclick="return confirm('Yakin hapus data?');" class="btn btn-danger btn-flat btn-xs"><i class="fa fa-trash-o"></i> Update</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</section>
<!-- /.content -->