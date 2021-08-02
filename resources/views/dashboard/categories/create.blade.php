@extends('template.template')

@section('title-page')
    Add Categorie
@endsection

@section('title')
    Add Categorie
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>
    <form action="{{ route("categories.store") }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" class="form-control" type="text" name="name">
        </div>
        <button type="submit" class="btn btn-primary">Submit Product</button>
    </form>
@endsection