@extends('layouts.admin')

@section('content')

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb ">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> Dashboard</a></li>
                                <li class="breadcrumb-item "><a href="{{ url('/monitoring/monitoring') }}">Monitoring</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Create</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-header">
                        <h4>Create New Monitoring </h4>
                        <div class="card-header-form">
                            <a href="{{ url('/monitoring/monitoring') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form method="POST" action="{{ url('/monitoring/monitoring') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            @csrf

                            @include ('monitoring.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
