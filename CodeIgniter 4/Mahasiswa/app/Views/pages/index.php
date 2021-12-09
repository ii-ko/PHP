<?= $this->extend('layout/layout')?>
<?= $this->section('content')?>
<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Majority</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>+82</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>+51</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td>+17</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td colspan="2">Mamank the destoryer</td>
      <td>@samsak</td>
      <td>+62</td>
    </tr>
  </tbody>
</table>
<?= $this->endSection()?>