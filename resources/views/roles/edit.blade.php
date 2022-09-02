@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row align-items-center my-4">
                    <div class="col">
                        <h2 class="h3 mb-0 page-title">{{ __('Créer un nouveau role') }}</h2>
                    </div>
                    <div class="col-auto">

                        <a href="{{ route('roles.index') }}" class="btn btn-primary" style="color:white">
                            <span style="color:white"></span> {{ __('Back') }}
                        </a>

                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('roles.update', $role->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <strong>{{ __('Name') }}:</strong>

                            <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text"
                                name="name" id="name" value="{{ old('description') }}" required>
                            @if ($errors->has('title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">

                            @foreach ($permission as $value)
                                <br>
                                <input class="form-check-input" type="checkbox" value="{{ $value->id }}"
                                    id="flexCheckDefault" name="permission">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ $value->name }}
                                </label>
                                <br>
                            @endforeach
                        </div>



                    
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">
                            {{ __('Edit') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div> <!-- .col-12 -->
    </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
