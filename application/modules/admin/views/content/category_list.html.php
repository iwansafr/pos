<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<a href="<?php echo base_url('admin/content_category') ?>"><button class="btn btn-sm btn-success">add new category</button></a>
<?php
$form = new ecrud();

$form->setView('admin/content_category');
$form->setTable('content_cat', 'id', 'DESC');
$form->init('roll');
$form->search();

$form->setField(array('id','par_id','title'));

$form->addInput('par_id','plaintext');

$form->addInput('title','link');
$form->setLink('title',base_url('admin/content_category'),'id');

$form->addInput('id','link');
$form->setLink('id',base_url('admin/content_cat_list'),'id');
$form->setPlaintext('id','list');
$form->setLabel('id','list');

// $form->addInput('description', 'plaintext');

$form->addInput('image','thumbnail');
$form->setImage('image','content_cat');

$form->addInput('created','plaintext');

$form->setDelete(true);

?>
<div class="box">
	<div class="box-body table-responsive">
		<?php $form->form();?>
	</div>
</div>