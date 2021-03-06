<?php $this->load->view('backend/_layouts/header', ['title' => ucfirst(lang('add')).' '.lang('customer')]); ?>
<?php $this->load->view('backend/_layouts/top_menu'); ?>

<div id="page-wrapper">
    <?php $this->load->view('backend/_partials/messages'); ?>
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header"><?= ucfirst(lang('add')).' '.lang('customer'); ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <?= form_open(); ?>
            <div class="panel panel-default">
                <div class="panel-heading"><?= ucfirst(lang('add')).' '.lang('customer'); ?></div>
                <div class="panel-body">
                    <div class="form-group">
                        <?= form_label(ucfirst(lang('name')).' (*)'); ?>
                        <?= form_input('nama', set_value('nama'), array('class' => 'form-control')); ?>
                        <?= form_error('nama', '<p class="text-danger">', '</p>'); ?>
                    </div>
                    <div class="form-group">
                        <?= form_label(ucfirst(lang('phone_number')).' (*)'); ?>
                        <?= form_input('nomor_telepon', set_value('nomor_telepon'), array('class' => 'form-control')); ?>
                        <?= form_error('nomor_telepon', '<p class="text-danger">', '</p>'); ?>
                    </div>
                    <div class="form-group">
                        <?= form_label(ucfirst(lang('handphone_number')).' (*)'); ?>
                        <?= form_input('nomor_handphone', set_value('nomor_handphone'), array('class' => 'form-control')); ?>
                        <?= form_error('nomor_handphone', '<p class="text-danger">', '</p>'); ?>
                    </div>
                    <div class="form-group">
                        <?= form_label(ucfirst(lang('address')).' (*)'); ?>
                        <?= form_input('alamat', set_value('alamat'), array('class' => 'form-control')); ?>
                        <?= form_error('alamat', '<p class="text-danger">', '</p>'); ?>
                    </div>
                    <div class="form-group">
                        <?= form_label(ucfirst(lang('email')).' (*)'); ?>
                        <?= form_input('email', set_value('email'), array('class' => 'form-control')); ?>
                        <?= form_error('email', '<p class="text-danger">', '</p>'); ?>
                    </div>
                </div>
                <div class="panel-footer">
                    <?= form_submit('save', ucfirst(lang('save')), ['class' => 'btn btn-primary btn-sm']); ?>
                </div>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>

<?php $this->load->view('backend/_layouts/footer'); ?>