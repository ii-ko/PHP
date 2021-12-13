<?= $this->extend('layout/layout')?>
<?= $this->section('content')?>
<h1>Welcome!! <?= session()->get('username')?></h1>
<?= $this->endSection()?>