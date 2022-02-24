<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Packages</title>
</head>
<body>
<div class="container">
<div class="row justify-content-center">
  <div class="col-12">
    <h1 class="float-start">Packages</h1>
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/home') }}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/admin/customers') }}">customers</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
    <a class="btn btn-sm btn-success float-end" href="{{ route('create') }}" role="botton">Create a new package</a>
  </div>
</div>
<div class="card">
<table class="table">
  <thead>
    <tr>
      <th scope="col"><N>S/N</N></th>
      <th scope="col">Tracking Number</th>
      <th scope="col">Current Location</th>
      <th scope="col">Destination</th>
      <th scope="col">Discription</th>
      <th scope="col">Amount</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($packages as $package)
  <tr>
      <td scope="row">{{ $package->id }}</td>
      <td>{{ $package->tracking_number }}</td>
      <td>{{ $package->current_location }}</td>
      <td>{{ $package->destination }}</td>
      <td>{{ $package->description }}</td>
      <td>{{ $package->amount }}</td>
      <td>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.packages.edit', $package->id) }}" role="botton">Edit</a>

        <button type="submit" class="btn btn-sm btn-danger"
                onClick="event.preventDefault();
                document.getElementById('delete-package-form-{{ $package->id }}').submit()">
           Delete
        </button>
        <form id="delete-package-form-{{ $package->id }}" action="{{ route('admin.packages.destroy', $package->id) }}" method="POST">
          @csrf
          @method('DELETE')
        </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{ $packages->links() }}
</div>
</container>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>