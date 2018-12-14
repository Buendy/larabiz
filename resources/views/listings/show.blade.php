@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card-header">
                    {{$listing->name}} <a href="/listings" class="btn btn-success">Back</a>
                </div>
                <div class="card-body">
                   <ul class="list-group">
                       <li class="list-group-item">
                           Address: {{$listing->address}}
                       </li>
                       <li class="list-group-item">
                           Website: {{$listing->website}}
                       </li>
                       <li class="list-group-item">
                           Email: {{$listing->email}}
                       </li>
                       <li class="list-group-item">
                           Phone: {{$listing->phone}}
                       </li>

                   </ul>
                    <hr>
                    <div class="well">
                        {{$listing->bio}}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
