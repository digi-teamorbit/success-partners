@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-white mt-5">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                <div class="card-body">
                    <h3 class="box-title pull-left">Team #{{ $team->id }}</h3>
                    
                        <a class="btn btn-success pull-right" href="{{ url('/admin/team') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $team->id }}</td>
                            </tr>
                            <tr><th> Name </th><td> {{ $team->name }} </td></tr><tr><th> Information </th><td><?= html_entity_decode($team->information) ?></td></tr><tr><th> Role </th><td> {{ $team->role }} </td></tr><tr><th> Image </th><td> {{ $team->image }} </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.admin.footer')
</div>
@endsection

