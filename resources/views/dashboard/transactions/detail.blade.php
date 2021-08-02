@extends('template.template')

@section('title-page')
    {{ $transaction->code_transaction }}
@endsection

@section('title')
    {{ $transaction->code_transaction }}
@endsection

@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <h3>Transaction</h3>
                <h6>Customer : {{ $transaction->customer->name }}</h6>
                <h6>Code : {{ $transaction->code_transaction }}</h6>
                <h6>Date : {{ $transaction->date }}</h6>
            </div>
            <div class="col-md-6">
                <h3>Detail Transaction</h3>
                <h6>Product : {{ $transaction->detail[0]->name }}</h6>
                <h6>Qty : {{ $transaction->detail[0]->qty }}</h6>
            </div>
        </div>
    </div>
@endsection