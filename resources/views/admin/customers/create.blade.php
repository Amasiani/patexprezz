<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Add package</title>
</head>
<body>
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                              Add a new customer
                            <a href="{{ url('/admin/customers') }}"><div class="card-tile float-end">Back</div></a>
                        </div>
                            <div class="card-body">
                                @if(Session::has('message_sent'))
                                    <div class="alert-session" role="alert">
                                        {{Session::get('message_sent')}}
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('customer.created') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name">Name:</label>
                                        <input type="text" name="name" class="form-control" />
                                    </div>                                   
                                    <div class="mb-3">
                                        <label for="phone">Phone:</label>
                                        <input type="number" name="phone" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="address">Address:</label>
                                        <textarea name="address" class="form-control"></textarea>
                                    </div>
                                    <!---<div class="mb-3">
                                    <select name="package" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                        <option selected>Select Package</option>
                                    @foreach($packages as $package)                                        
                                        <option value="{{ $package->id}}" @if(old('package') == $package->id) selected @endif )>{{ $package->tracking_number }}</option>
                                    @endforeach
                                    </select> 
                                    </div>--->
                                    <button type="submit" class="btn btn-primary">Add Customer</button>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>