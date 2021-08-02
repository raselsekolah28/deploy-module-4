@extends('template.template')

@section('title-page')
    Categories
@endsection

@section('title')
    Categories
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <a href="{{ route("categories.create") }}">
                <button class="btn btn-primary" type="button">Add Categorie</button>
            </a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td class="d-flex">
                                <form action="{{ route("categories.destroy", $item) }}" method="POST">
                                    @csrf
                                    @method("delete")

                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{ route("categories.edit", $item) }}">
                                    <button class="btn btn-warning" type="button">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            {{ $categories->links() }}
        </div>
    </div>

    @if (session("success"))
        <script>
            alert("{{ session("success") }}");
        </script>
    @endif
@endsection