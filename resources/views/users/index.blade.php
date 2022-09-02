@extends('layouts.app')

@section('content')
    <!-- Button trigger modal -->
    <!--<button type="button" class="btn btn-primary" >
                                                                      Launch demo modal
                                                                    </button> -->

    <!-- Modal -->


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
                                    <h6 class="text-white text-capitalize ps-3" class="ms-2">Utilisateurs</h6>
                                </a>
                                <div class="text-right">
                                    <button class="btn btn-success badge-pill" data-bs-toggle="modal"
                                        data-bs-target="#Ajouter" style=width:100px;> @can('role-create')
                                            <a href="{{ route('users.create') }}" style="color:white">
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
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    {{ __('Name') }}
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    {{ __('email') }}
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    {{ __('Roles') }}
                                                </th>
                                                <th
                                                    width="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    {{ __('Action') }}</th>

                                            </tr>
                                        </thead>
                                        @foreach ($data as $key => $user)
                                            <tbody>
                                                <tr>

                                                    <td>{{ $user->id }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                        @if (!empty($user->getRoleNames()))
                                                            @foreach ($user->getRoleNames() as $v)
                                                                {{ $v }}
                                                            @endforeach
                                                        @endif
                                                    </td>




                                                    <td class="align-middle text-left text-sm">
                                                        <a
                                                            class="btn btn-primary badge-pill" data-bs-toggle="modal"
                                                            data-bs-target="#Modifier"
                                                                href="{{ route('users.show', $user->id) }}">{{ __('Show') }}</a>
                                                    </td>

                                                    <td class="align-middle text-center text-sm">
                                                        @can('user-edit')
                                                            <a class="btn btn-primary badge-pill"
                                                                href="{{ route('users.edit', $user->id) }}">{{ __('Edit') }}</a>
                                                        @endcan
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        
                                                            @can('user-delete')
                                                                <form action="{{ url('/users', ['id' => $user->id]) }}"
                                                                    method="post">
                                                                    <input class="btn btn-danger badge-pill" data-bs-toggle="modal"
                                                                    data-bs-target="#Modifier" style=width:100px; type="submit"
                                                                        value="Delete" />
                                                                    @method('delete')
                                                                    @csrf
                                                                </form>
                                                            @endcan
                                                            </a>
                                                        


                                                    </td>
                                                </tr>


                                            </tbody>
                                        @endforeach
                                    </table>
                                    {!! $data->render() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
