@extends('template.template')

@section('title-page')
    Products
@endsection

@section('title')
    Products
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <a href="{{ route("products.create") }}">
                <button class="btn btn-primary" type="button">Add Product</button>
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
                        <th>Categorie</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->categorie->name }}</td>
                            <td>Rp{{ number_format($item->price) }}</td>
                            <td>{{ $item->stock }}</td>
                            <td>
                                <img src="{{ asset($item->image) }}" width="100px" alt="">
                            </td>
                            <td class="d-flex">
                                <form action="{{ route("products.destroy", $item) }}" method="POST">
                                    @csrf
                                    @method("delete")

                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{ route("products.edit", $item) }}">
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
            {{ $products->links() }}
        </div>
    </div>

    @if (session("success"))
        <script>
            alert("{{ session("success") }}");
        </script>
    @endif
@endsection