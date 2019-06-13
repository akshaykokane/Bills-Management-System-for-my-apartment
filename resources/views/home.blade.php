@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h1>Click here to add a Bill</h1>
             <a href="/bills/create"  class="btn btn-danger">Add Bill</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
