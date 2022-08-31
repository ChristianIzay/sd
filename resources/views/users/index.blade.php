@extends('layouts.app')

@section('content')
{!! Form::hidden('', $compteur= 1) !!}
    <main class="main-content position-relative max-height-vh-80 h-50 border-radius-lg ">
        <!-- Navbar -->
        <div class="container-fluid py-2">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">

                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <ul class="nav nav-fill ">
                                    <li class="nav-item">
                                        <a>
                                            <i class="	fas fas fa-users"></i>
                                            <span class="ms-1">Liste utilisateurs</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('form_ajoutuser') }}">
                                            <i class="	fas fa-user-plus"></i>
                                            <span class="ms-1">Ajouter un un utilisateur</span>
                                        </a>
                                    </li>

                                </ul>

                            </div>
                        </div>

                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <h4><i class="	fas fas fa-users"></i> Identité
                                            </th>
                                            </h4>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                <h4><i class="	fas fa-edit"></i> Modifier
                                            </th>
                                            </h4>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                <h4> <i class="	fas fa-trash-alt"></i> Suprimer
                                            </th>
                                            </h4>

                                        </tr>
                                    </thead>
                                    <tbody>



                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="storage/user_images/{{ $user->image }}"
                                                                class="avatar avatar-sm me-3 border-radius-lg"
                                                                alt="user1">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                                                            <h6 class="mb-0 text-sm">{{ $user->email }}</h6>
                                                            <h6>
                                                                @if(!empty($user->getRoleNames()))
                                                                    @foreach($user->getRoleNames() as $v)
                                                                        {{ $v }}
                                                                    @endforeach
                                                                @endif
                                                            </h6>
                                                            <p class="text-xs text-secondary mb-0"></p>
                                                            <p class="text-xs text-secondary mb-0"></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#"  data-toggle="modal" data-target="#ModalEdit{{$user->id}}"
                                                        id="edit">
                                                        <h3> <span class="badge bg-gradient-secondary"><i
                                                                    class="	fas fa-edit"></i></span></h3></a>


                                                </td>
                                                <td>
                                                    <a href="#"   data-toggle="modal" data-target="#ModalDelete{{$user->id}}"
                                                        id="delete">
                                                        <h3> <span class="badge bg-gradient-danger"><i
                                                                    class="	fas fa-trash-alt"></i></span></h3>


                                                </td>
                                                @include('modal.edit_user')
                                                @include('modal.delete_user')
                                            </tr>
                                            {!! Form::hidden('', $compteur = $compteur + 1) !!}
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@endsection
