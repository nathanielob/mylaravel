@extends('layouts.app')

@section('content')
<div cclass='col-sm-8 blog-main'>
    <h1>{{post->tilte}}</h1>

    {{$post->body}}

    
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
