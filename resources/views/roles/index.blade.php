@extends('layouts.app')
@section('content')
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Navbar</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit">Recherche</button>
            </form>
        </div>
    </nav>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-dark shadow-primary border-radius-lg pt-4 pb-3">

                                <a>
                                    <h6 class="text-white text-capitalize ps-3" class="ms-2">Roles</h6>
                                </a>
                                <div class="text-right">
                                    <button class="btn btn-success badge-pill" data-bs-toggle="modal"
                                        data-bs-target="#Ajouter" style=width:100px;> @can('role-create')
                                            <a href="{{ route('roles.create') }}" style="color:white">
                                                {{ __('Ajouter ') }}
                                            </a>
                                        @endcan </button>
                                </div>

                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{ __('Name') }}</th>
                                                <th width="280px">{{ __('Action') }}</th>
                                            </tr>
                                        </thead>
                                        @foreach ($roles as $key => $role)
                                            <tbody>
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $role->name }}</td>





                                                    <td class="align-middle text-left text-sm">
                                                        <button class="btn btn-primary badge-pill" data-bs-toggle="modal"
                                                            data-bs-target="#Modifier" style=width:100px;><a
                                                                class="btn btn-primary badge-pill"
                                                                href="{{ route('roles.show', $role->id) }}">{{ __('Show') }}</a></button>
                                                    </td>

                                                    <td class="align-middle text-center text-sm">
                                                        @can('role-edit')
                                                            <a class="btn btn-primary badge-pill"
                                                                href="{{ route('roles.edit', $role->id) }}">{{ __('Edit') }}</a>
                                                        @endcan
                                                    </td>
                                                    
                                                    <td class="align-middle text-center text-sm">
                                                        
                                                            @can('role-delete')
                                                                <form action="{{ url('/roles', ['id' => $role->id]) }}"
                                                                    method="post">
                                                                    <input class="btn btn-danger badge-pill" data-bs-toggle="modal"
                                                                    data-bs-target="#Modifier" style=width:100px type="submit"
                                                                        value="Supprimer" />
                                                                    @method('delete')
                                                                    @csrf
                                                                </form>
                                                            @endcan
                                                        </td>
                                                    </tr>


                                                </tbody>
                                            @endforeach
                                        </table>
                                        {!! $roles->render() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
