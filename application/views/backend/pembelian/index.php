<?php $this->load->view('backend/_layouts/header', ['title' => ucfirst(lang('purchases'))]); ?>
<?php $this->load->view('backend/_layouts/top_menu'); ?>

<div id="page-wrapper">
    <?php $this->load->view('backend/_partials/messages'); ?>
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header"><?= ucfirst(lang('purchases')); ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <?= anchor(
                site_url('backend/pembelian/create'),
                ucfirst(lang('add')),
                ['class' => 'btn btn-primary btn-sm']
            ); ?>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading"><?= ucfirst(lang('purchases')); ?></div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover table-striped" id="table" width="100%">
                        <thead>
                            <tr>
                                <th><?= ucfirst(lang('no')); ?></th>
                                <th><?= ucfirst(lang('purchase_date')); ?></th>
                                <th><?= ucfirst(lang('due_date')); ?></th>
                                <th><?= ucfirst(lang('name')); ?></th>
                                <th><?= ucfirst(lang('product_name')); ?></th>
                                <th><?= ucfirst(lang('price')); ?></th>
                                <th><?= ucfirst(lang('quantity')); ?></th>
                                <th><?= ucfirst(lang('total')); ?></th>
                                <th><?= ucfirst(lang('status')); ?></th>
                                <th><?= ucfirst(lang('action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pembelian->result() as $row) : ?>
                                <tr>
                                    <td></td>
                                    <td><?= $row->tanggal_pembelian; ?></td>
                                    <td><?= $row->tanggal_jatuh_tempo; ?></td>
                                    <td><?= $row->nama; ?></td>
                                    <td><?= $row->nama_barang; ?></td>
                                    <td><?= $row->harga; ?></td>
                                    <td><?= $row->kuantitas; ?></td>
                                    <td><?= $row->total; ?></td>
                                    <td><?= $status[$row->status]; ?></td>
                                    <td>
                                        <?= anchor(
                                            site_url('backend/pembelian/update/'.$row->id_pembelian),
                                            ucfirst(lang('edit')),
                                            ['class' => 'btn btn-sm btn-success']
                                        ); ?>
                                        <?= anchor(
                                            site_url('backend/pembelian/delete/'.$row->id_pembelian),
                                            ucfirst(lang('delete')),
                                            ['class' => 'btn btn-danger btn-sm']
                                        ); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(function () {
    var t = $('#table').DataTable({
        'columns': [
            { 'orderable': false },
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            { 'orderable': false },
        ],
        'responsive': true,
        'search': {
            'smart': false,
        },
    });
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
});
</script>

<?php $this->load->view('backend/_layouts/footer'); ?>
