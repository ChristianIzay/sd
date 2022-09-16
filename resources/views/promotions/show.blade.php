@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row align-items-center my-4">
                    <div class="col">

                            <h2 class="h3 mb-0 page-title">{{ $promotion->name }}</h2>




                    </div>
                    <div class="col-auto">
                        @can('user-create')
                            <a href="{{route('users.create')}}" class="btn btn-success" style="color:white">
                                <span style="color:white"></span> {{ __('New') }}
                            </a>
                        @endcan
                    </div>
                </div>
                <div class="content-header row">
                    <div class="content-header-left col-md-12 col-12 mb-2">
                        <div class="row breadcrumbs-top">
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">{{ __('Dashboard') }}</a></li>
                                    <li class="breadcrumb-item active">{{ __('Promotion') }}</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
@if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
<div class="row my-4">
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <!-- table -->
                                    <table class="table datatables" id="dataTable-1">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{ __('Name') }}</th>
                                                <th>{{ __('Email') }}</th>

                                                <th width="280px">{{ __('Address') }}</th>
                                            </tr>
                                        </thead>
                                        @foreach ($eleves as $eleve)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $eleve->user->id }}</td>
                                                    <td>{{ $eleve->user->name }}</td>
                                                    <td>{{ $eleve->user->email }}</td>
                                                    <td>{{ $eleve->address }}</td>

                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>

                                <!-- end table -->
                            </div>
                        </div>
                    </div> <!-- .col-md-12 -->
                </div> <!-- end section row my-4 -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->

@endsection
