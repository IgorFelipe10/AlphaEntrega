@extends('layout.app')
@section('main')
@foreach($pedidos as $pedido)


<hr size="10">
<h1 class="fw-bold mb-0 text-black">Pedido de Nº{{$pedido->PEDIDO_ID}}</h1>
  <h6 class="mb-0 text-muted">Data do pedido:{{$pedido->PEDIDO_DATA}} </h6>



    @foreach($pedido->pedidoItem as $item)
    @if($item->ITEM_QTD> 0)
    <div class="col">
                    <div class="card">
                    @if (count($produto->ProdutoImagem)>0 )
                    <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}" class="card-img-top" alt="...">
                    @else
                    <img src="../img/indisponivel.jpg" class="card-img-top" alt="...">
                    @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$produto->PRODUTO_NOME}}</h5>
                            <p class="card-text">R${{$produto->PRODUTO_PRECO}}</p>
                            <a href="{{route('produto.show', $produto->PRODUTO_ID)}}"><button type="submit" class="buttonLogin">Comprar <i class="ri-shopping-cart-line"></i></button></a>
                        </div>
                    </div>
                </div>

    @endif


      @endforeach





@endforeach
@endsection
