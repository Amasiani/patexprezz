@extends('main')

@section('content')
<section style="padding-top: 20px;">
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Roles
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                            </tr>
                        </thead>
                        @foreach($roles as $role)
                        <tbody>
                            <th scope="row">{{ $role->id}}</th>
                            <td>{{ $role->name }}</td>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection