<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Get  quote</title>
</head>
<body>
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                              Get a Quote
                        </div>
                            <div class="card-body">
                                @if(Session::has('message_sent'))
                                    <div class="alert-session" role="alert">
                                        {{Session::get('message_sent')}}
                                    </div>
                                @endif
                                <form method="POST" action="{{route('inquiry.send')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name">Name:</label>
                                        <input type="text" name="name" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone">Phone:</label>
                                        <input type="text" name="phone" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone">Location:</label>
                                        <input type="text" name="location" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="message">Message</label>
                                        <textarea name="message" class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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