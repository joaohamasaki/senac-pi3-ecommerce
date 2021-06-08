@extends('layouts.store')
@section('css')
<style>
    #banner
    {
        background-image: url("/img/card1.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        min-height: 400px;
    }
</style>
@endsection
@section('banner')
<section id="banner" class="row d-flex align-items-center px-4">
    <div>
        <span class="h2 d-block text-capitalize fw-bold mb-3" style="color: #5d1616">ToyShop Senac Colecionáveis</span>
        <span class="h3 d-block text-capitalize mb-3" style="color: #5d1616">Melhor Loja para Sua Coleção</span>
        {{-- <button class="btn btn-lg btn-primary">Veja nossos produtos</button> --}}
    </div>
</section>
@endsection

@section('content')
<section  class="container">
    <div class="row py-5">
        <div class="text-center">
            <h2 class="fw-bold">Produtos em Lançamento</h2>
            <span class="text-muted">Confira os produtos que acabaram de chegar!</span>
        </div>
    </div>
    <div class="row">
        @foreach(\App\Models\Product::promocoes() as $product)
            <div class="p-0 col-lg-4 col-md-6 col-sm-10 " >
                <div class="p-3 m-3" style="background-color: white; border-radius: 16px; box-shadow: 0px 0px 15px 0px rgba(122, 41, 122, 0.4);">
                    <div class="text-center" >
                        <a href="{{ route('product.show', $product->id) }}">
                            <img src="{{asset ($product->image)}}" style="height: 250px;" onclick=>
                        </a>
                    </div>
                    <div class="text-center">
                        <h3 class="d-block fw-bold">{{ $product->name }}</h3>
                        <span class="text-right text-ellipse" >{{ $product->description }}</span>
                        <span class="d-block fw-bold">R$ {{ $product->price }}</span>
                        <div class="mt-2">
                            <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary" style="background-color: #483d8b; border: none;">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<div class="container mt-5" >
        <div class="row justify-content-center mt-3" >
        <h2 class="text-center">Marcas</h2>
            <div class="col col-lg-12 col-md-8 col-sm-6" style="text-align-last: justify;" >
                <img id="marcas" src="img/bandai-vector-logo.png" class="px-3" style="width: 150px">
                <img id="marcas" src="img/funko.png" class="px-3" style="width: 150px">
                <img id="marcas" src="img/marvel.png" class="px-3" style="width: 150px">
                <img id="marcas" src="img/ubisoft.png" class="px-3" style="width: 150px">
                <img id="marcas" src="img/dc.png" class="px-3" style="width: 150px">
                <img id="marcas" src="img/naruto.png" class="px-3" style="width: 150px">
            </div>
        </div>
    </div>
    <hr style="border: 10px solid #170b3b;">
<div class="row mb-4 m-2 text-center">
  <div class="col-sm-3" >
    <div class="card" style="box-shadow: 0px 0px 15px 0px rgba(122, 41, 122, 0.4); border-radius: 16px">
      <div class="card-body">
        <h5 class="card-title">ENVIAMOS PARA</h5>
        <h4 class="card-text" id="mktColor">TODO BRASIL</h4>
        <i class="fas fa-4x fa-globe-americas"></i>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card" style="box-shadow: 0px 0px 15px 0px rgba(122, 41, 122, 0.4); border-radius: 16px">
      <div class="card-body">
        <h5 class="card-title">RECEBA DESCONTOS</h5>
        <h4 class="card-text" id="mktColor">NO BOLETO</h4>
        <i class="fas fa-4x fa-money-check-alt"></i>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card" style="box-shadow: 0px 0px 15px 0px rgba(122, 41, 122, 0.4); border-radius: 16px">
      <div class="card-body">
        <h5 class="card-title">ITENS</h5>
        <h4 class="card-text" id="mktColor" >COLECIONÁVEIS</h4>
        <i class="fas fa-4x fa-gem"></i>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card" style="box-shadow: 0px 0px 15px 0px rgba(122, 41, 122, 0.4); border-radius: 16px">
      <div class="card-body">
        <h5 class="card-title">COMPRA</h5>
        <h4 class="card-text" id="mktColor">SEGURA</h4>
        <i class="fas fa-4x fa-lock"></i>
      </div>
    </div>
  </div>
</div>
@endsection
