@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-3">Add project</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                Error(s):

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.projects.store') }}" method="POST" class="row g-3 mb-3">
            @csrf

            <div class="col-6">
                <label for="name">Project name</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>

            <div class="col-6">
                <label for="link">Link</label>
                <input type="text" id="link" name="link" class="form-control">
            </div>

            <div class="col-6">
                <label for="type_id" class="form-label">Type</label>
                <select name="type_id" id="type_id" class="form-select">
                    <option value="">No type</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-6">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control"></textarea>
            </div>

            <div class="col">
                <button class="btn btn-success">Add</button>
            </div>
        </form>

        <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-primary">Go back to list</a>
    </div>
@endsection
