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
                              Add a new package
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
                                <form method="POST" action="{{route('package.created')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="tracking_number">Tracking Number:</label>
                                        <input type="text" name="tracking_number" class="form-control"  />
                                        @error('tracking_number')
                                            <span class=" invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">                                                                        
                                    <select name="customer" id="customer" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                        <option value="">--Select customer--</option>
                                    @foreach($customers as $customer)                                        
                                        <option value="{{ $customer->id }}" @if(old('customer') == $customer->id) selected @endif>{{ $customer->name }}</option>                                   
                                    @endforeach
                                    </select>                                                                         
                                    </div>
                                    <div class="mb-3">
                                        <label for="current_location">Current Location:</label>
                                        <input type="text" name="current_location" class="form-control @error('current-location') @enderror" />
                                    @error('current_location')
                                        <span class="invalid-feedback is-invalid" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="destination">Destination:</label>
                                        <input type="text" name="destination" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="destination">Amount:</label>
                                        <input type="text" name="amount" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Package</button>
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