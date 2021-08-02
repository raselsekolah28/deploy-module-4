@extends('template.template')

@section('title-page')
    Transactions
@endsection

@section('title')
    Transactions
@endsection

@section('content')
    <div class="row mt-3">
        <div class="col-12">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Total Price</th>
                        <th>Code Transaction</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->customer->name }}</td>
                            <td>{{ $item->date }}</td>
                            <td>Rp{{ number_format($item->detail[0]->qty * $item->detail[0]->product->price) }}</td>
                            <td>{{ $item->code_transaction }}</td>
                            <td>
                                <a href="{{ route("transactions.detail", $item->id) }}">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-eye"></i>
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
            {{ $transactions->links() }}
        </div>
    </div>
@endsection