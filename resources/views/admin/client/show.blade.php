@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-white mt-5">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                <div class="card-body">
                    <h3 class="box-title pull-left">Client {{ $client->id }}</h3>
                    
                        <a class="btn btn-success pull-right" href="{{ url('/admin/client') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>

                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $client->id }}</td>
                            </tr>
                            <tr><th> Name </th><td> {{ $client->name }} </td></tr><tr><th> Designation </th><td> {{ $client->designation }} </td></tr><tr><th> Comment </th><td> <?= html_entity_decode($client->comment) ?></td></tr><tr><th> Rating </th><td> {{ $client->rate }} star </td></tr><tr><th> Image </th><td> {{ $client->image }} </td></tr>
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

