@extends('template.template')

@section('title-page')
    {{ $categorie->name }}
@endsection

@section('title')
    {{ $categorie->name }}
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
    <form action="{{ route("categories.update", $categorie) }}" method="POST">
        @csrf
        @method("patch")

        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" class="form-control" type="text" name="name" value="{{ $categorie->name }}">
        </div>
        <button type="submit" class="btn btn-primary">Edit Product</button>
    </form>
@endsection