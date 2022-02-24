<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Search Your Package</title>
</head>
<body>
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                              Search Result
                            <a href="{{ url('/admin/packages') }}"><div class="card-tile float-end">Back</div></a> 
                        </div>
                            <div class="card-body">
                                @if(Session::has('message_sent'))
                                    <div class="alert-session" role="alert">
                                        {{Session::get('message_sent')}}
                                    </div>
                                @endif
                                @if($errors->any())
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                                @endif
                                <form method="GET" action="{{route('search.package')}}" >
                                    <!---@csrf-->
                                    <div class="mb-3 form-group">
                                        <label for="tracking_number">Tracking Number:</label>
                                        <input type="text" name="tracking_number" class="form-control" required  />
                                        @error('tracking_number')
                                            <span class=" invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Track</button>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
                    <div class="card">
                        <div class="card-header">
                            Your Package
                        </div>
                            <table>
                                <div class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Tracking Number</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Current Location</th>
                                        <th scope="col">Destination</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($packages->isNotEmpty())
                                        @foreach ($packages as $package)
                                            <tr>
                                                <td>{{$package->tracking_number}}</td>
                                            @foreach($packages->customers as $customer)
                                                <td>{{$customer->name}}</td>
                                            @endforeach
                                                <td>{{$package->current_location}}</td>
                                                <td>{{$package->destination}}</td>
                                            </tr>
                                        @endforeach
                                    @else 
                                        <div>
                                            <h2>No posts found</h2>
                                        </div>
                                     @endif
                                </tbody>
                            </div>
                        </table>
                    </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>