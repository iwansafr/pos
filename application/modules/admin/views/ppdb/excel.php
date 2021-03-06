<?php
header('Content-type: application/vnd-ms-excel');
header('Content-Disposition: attachment:filename:data_peserta.xls');

$count = $this->db->count_all('ppdb');
$form = new ecrud();

$form->init('roll');

$form->setTable('ppdb');

$form->setHeading('Daftar Siswa Baru');

$form->setLimit($count);

$form->addInput('id','plaintext');
$form->addInput('nisn', 'plaintext');
$form->setLabel('nisn', 'NISN');
// $form->setLink('nisn',base_url('admin/ppdb_edit/'),'id');

$form->addInput('nama', 'plaintext');

$form->addInput('jenis_kelamin', 'plaintext');
// $form->setOptions('jenis_kelamin', array('1'=>'Laki-Laki', '0'=>'Perempuan'));
$form->setLabel('jenis_kelamin', 'Jenis Kelamin');

$form->addInput('tempat_lahir','plaintext');
$form->setLabel('tempat_lahir','Tempat Lahir');

$form->addInput('agama', 'plaintext');
// $form->setOptions('agama', array('Islam','Kristen','Katolik','Hindu','Budha'));

$form->addInput('alamat', 'plaintext');

$form->addInput('telp', 'plaintext');

$form->addInput('email', 'plaintext');
$form->setType('email','email');

$form->addInput('asal_sekolah', 'plaintext');
$form->setLabel('asal_sekolah','Asal Sekolah');

$form->addInput('no_sttb', 'plaintext');
$form->setLabel('no_sttb', 'No STTB');

$form->addInput('no_skhu', 'plaintext');
$form->setLabel('no_skhu', 'No SKHU');

$form->addInput('tahun_ijazah', 'plaintext');
// $form->setLabel('tahun_ijazah','Tahun Ijazah');
// $form->setOptions('tahun_ijazah', array('2011','2012','2013','2014','2015','2016','2017','2018','2019'));

$form->addInput('nilai_un', 'plaintext');
$form->setLabel('nilai_un','Nilai UN');

$form->addInput('nama_orangtua', 'plaintext');
$form->setLabel('nama_orangtua','Nama Orangtua');

$form->addInput('alamat_orangtua', 'plaintext');
$form->setLabel('alamat_orangtua','Alamat Orang Tua');

$form->addInput('pekerjaan_orangtua', 'plaintext');
$form->setLabel('pekerjaan_orangtua','Pekerjaan Orang Tua');

$form->addInput('telp_orangtua', 'plaintext');
$form->setLabel('telp_orangtua', 'Telp Orang Tua');


$form->form();