@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{--------- Flash Session -------}}
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif
            
            <div class="card">
                <div class="card-header">Dashboard</div>
                @if(Auth::user()->is_admin==1)
                    <h2>Hello Admin </h2>
                @else
                    <h2>Hello {{Auth::user()->username}}</h2>
                @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
