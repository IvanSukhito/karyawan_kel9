<?php
	include "conn.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container bg-secondary mt-5" >
    <form class="row g-3 mb-10">
  <div class="col-md-6 mt" >
    <label for="inputtanggal_penelitian4" class="form-label">tanggal_penelitian</label>
    <input type="date" class="form-control" id="inputtanggal_penelitian4">
  </div>
  <div class="col-md-6">
    <label for="inputNik" class="form-label">Nik</label>
    <input type="text" class="form-control" name="nik" id="inputNik">
  </div>
  <div class="col-12">
    <label for="inputNama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Status Kerja</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
 
  <div class="col-mb-10">
    <button type="submit" class="btn btn-primary">Submit </button>
    <button type="submit" class="btn btn-danger">Cancel </button>
  </div>
</form>
    </div>
    <h1><center>Form Perfomance</center></h1>
<table class="container table table-warning table-striped mt-5">
        <thead>
            <tr class="table-dark">
              <th scope="col">No</th>
              <th scope="col">Nim</th>
              <th scope="col">Nama</th>
              <th scope="col">Prodi</th>
              <th scope="col">Button</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>  <a href="#"><button class="btn btn-primary"> <i class="fa fa-edit"> Edit</i></button></a>
          <a href="#" onClick="return Hapus();"><button class="btn btn-danger"> <i class="fa fa-trash"> Delete</i></button></a>
       </td>
            </tr>
            <!-- <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr> -->
          </tbody>
      </table>
</body>
<script>
function Hapus(){
    if(confirm('Are you sure want to delete?'))
    return true;
    else 
    return false;
}
</script>    
</html>
