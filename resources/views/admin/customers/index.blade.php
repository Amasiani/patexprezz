<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Customers</title>
</head>
<body>
<div class="container">
<div class="row justify-content-center">
  <div class="col-12">
    <h1 class="float-start">Customers</h1>
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/home') }}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/admin/packages') }}">Packages</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
    <a class="btn btn-sm btn-success float-end" href="{{ route('admin.customers.create') }}" role="botton">Create a new customer</a>
  </div>
</div>
<div class="card">
<table class="table">
  <thead>
    <tr>
      <th><N>S/N</N></th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email:</th>
      <th scope="col">Address:</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($customers as $customer)
  <tr>
      <th scope="row" type="hidden">{{ $customer->id }}</th>
      <td>{{ $customer->name }}</td>
      <td>{{ $customer->phone }}</td>
      <td>{{ $customer->email }}</td>
      <td>{{ $customer->address }}</td>
      <td>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.customers.edit', $customer->id) }}" role="botton">Edit</a>

        <button type="submit" class="btn btn-sm btn-danger"
                onClick="event.preventDefault();
                document.getElementById('delete-customer-id-{{ $customer->id }}').submit()">Delete</button>
        <form id="delete-customer-id-{{ $customer->id }}" action="{{ route('admin.customers.destroy', $customer->id) }}" method="POST">
          @csrf
          @method('DELETE')
        </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{ $customers->links() }}
</div>
</container>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>