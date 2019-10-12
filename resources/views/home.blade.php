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

                    <my-button text="aaaaaaaaaaaaaa" type="submit"></my-button>
                    <p>Jobs</p>
                    <p>php artisan queue:work</p>
                    <p>php artisan queue:work > storage/logs/jobs.log &</p>
                    <p>KILL [JOB ID]</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection