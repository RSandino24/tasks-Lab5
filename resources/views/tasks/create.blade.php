@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Task</div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('tasks.store') }}" method="POST">
                        @csrf

                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">Titulo</label>
                            <div class="col-md-6">
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Title">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="priority" class="col-md-4 col-form-label text-md-end">Prioridad</label>
                            <div class="col-md-6">
                                <select name="priority" class="form-control">
                                    <option value="baja" @if(old('priority') == 'baja') selected @endif>Baja</option>
                                    <option value="media" @if(old('priority') == 'media') selected @endif>Media</option>
                                    <option value="alta" @if(old('priority') == 'alta') selected @endif>Alta</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nombre Usuario</label>
                            <div class="col-md-6">
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Name">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Correo Electrónico</label>
                            <div class="col-md-6">
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>
                            <div class="col-md-6">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password_confirmation" class="col-md-4 col-form-label text-md-end">Confirmar Contraseña</label>
                            <div class="col-md-6">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Crear
                                </button>
                                <a class="btn btn-secondary" href="{{ route('tasks.index') }}">Regresar</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
