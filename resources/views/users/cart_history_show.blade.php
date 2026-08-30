@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center mt-3">
    <div class="w-75">
        <span>
            <a href="{{ route('mypage') }}">マイページ</a> > <a href="{{ route('mypage.cart_history') }}">注文履歴</a> > 注文詳細
        </span>

        <h1 class="mt-3">注文詳細</h1>

        <div class="row mt-3">
            <div class="col-6">
                <label>注文番号</label>
                <p>{{ $cart_info->code }}</p>
            </div>
            <div class="col-6">
                <label>購入日時</label>
                <p>{{ $cart_info->updated_at }}</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="offset-8 col-4">
                <div class="row">
                    <div class="col-6">
                        <h2>数量</h2>
                    </div>
                    <div class="col-6">
                        <h2>合計</h2>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            @foreach ($cart_contents as $product)
            <div class="col-md-2 mt-2">
                @if ($product->options->image ?? false)
                <img src="{{ asset($product->options->image) }}" class="img-fluid w-100">
                @else
                <img src="{{ asset('img/DSC_0149.JPG')}}" class="img-fluid w-100">
                @endif
            </div>
            <div class="col-md-6 mt-4">
                <h3 class="mt-4">{{ $product->name }}</h3>
            </div>
            <div class="col-md-2">
                <h3 class="w-100 mt-4">{{ $product->qty }}</h3>
            </div>
            <div class="col-md-2">
                <h3 class="w-100 mt-4">￥{{ $product->qty * $product->price }}</h3>
            </div>
            @endforeach
        </div>

        <hr>

        <div class="offset-8 col-4">
            <div class="row">
                <div class="col-6">
                    <h2>合計</h2>
                </div>
                <div class="col-6">
                    <h2>￥{{ $cart_info->price_total }}</h2>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    表示価格は税込みです（送料含む）
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
