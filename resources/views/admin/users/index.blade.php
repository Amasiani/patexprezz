@extends('main')

@section('content')
<section style="padding-top: 10px;">
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card" style="max-width: 900px;">
                <div class="card-header">
                    Staff List
                </div>
                <div class="card-body">
                        <table class="table table-sm table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Staff ID</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td><a href="#" class="btn btn-primay">Detail</a></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection