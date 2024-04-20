@extends('site.layout.layout')

@section('index')


<div class="main">
    <div class="container">
      <!-- BEGIN SIDEBAR & CONTENT -->
      <div class="row margin-bottom-40">
        <!-- BEGIN CONTENT -->
        <div class="col-md-12 col-sm-12">
          <h1>Shopping cart</h1>
        @if($cartItems->count() > 0)
          <div class="goods-page">
            <div class="goods-data clearfix">
              <div class="table-wrapper-responsive">
              <table summary="Shopping cart">
                <tr>
                  <th class="goods-page-image">Image</th>
                  <th class="goods-page-description">Description</th>
                  <th class="goods-page-ref-no">Ref No</th>
                  <th class="goods-page-quantity">Quantity</th>
                  <th class="goods-page-price">Unit price</th>
                  <th class="goods-page-total" colspan="2">Total</th>
                </tr>


                @foreach($cartItems as $item)
                <tr>
                  <td class="goods-page-image">
                    <a href="{{ route('product.show',['id'=>$item->id])}}"><img src="{{ asset($item->model->image) }}" alt="Berry Lace Dress"></a>
                  </td>
                  <td class="goods-page-description">
                    <h3><a href="{{ route('product.show',['id'=>$item->model->id])}}">{{ $item->model->name }}</a></h3>
                    <p><strong>Item 1</strong></p>
                    <em>More info is here</em>
                  </td>
                  <td class="goods-page-ref-no">
                    javc2133
                  </td>
                  <td class="goods-page-quantity">
                    <div class="product-quantity">
                        <input id="product-quantity" type="text" data-rowid="{{ $item->rowId }}" onchange="updateCartQty(this)" value="{{ $item->qty }}" readonly class="form-control input-sm">
                    </div>
                  </td>
                  <td class="goods-page-price">
                    <strong><span>$</span>{{ $item->price }}</strong>
                  </td>
                  <td class="goods-page-total">
                    <strong><span>$</span>{{ $item->subtotal() }}</strong>
                  </td>
                  <td class="del-goods-col">
                    <a class="del-goods" href="javascript:;" onclick="removeItemFromCart('{{ $item->rowId }}')">&nbsp;</a>
                  </td>
                </tr>
                @endforeach



              </table>
              </div>

              <div class="shopping-total">
                <ul>
                  <li>
                    <em>Sub total</em>
                    <strong class="price"><span>$</span>{{ Cart::instance('cart')->subtotal() }}</strong>
                  </li>
                  <li>
                    <em>Shipping cost</em>
                    <strong class="price"><span>$</span>{{ Cart::instance('cart')->tax() }}</strong>
                  </li>
                  <li class="shopping-total-price">
                    <em>Total</em>
                    <strong class="price"><span>$</span>{{ Cart::instance('cart')->total() }}</strong>
                  </li>
                </ul>
            </div>
            <br>
            <br>
            <a href="#" onclick="clearCart()">Clear All Items</a>
        </div>
            <button class="btn btn-default"  onclick="window.location.href='{{ route('index') }}';" type="submit">Continue shopping <i class="fa fa-shopping-cart"></i></button>
            <button class="btn btn-primary" type="submit">Checkout <i class="fa fa-check"></i></button>
          </div>
        @else
             <div class="goods-page">
                <div class="shopping-cart-page">
                    <div class="shopping-cart-data clearfix">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p style="text-align: center">Your shopping cart is empty!</p>
                        <br>
                        <button class="btn btn-default"  onclick="window.location.href='{{ route('index') }}';" type="submit">Continue shopping <i class="fa fa-shopping-cart"></i></button>
            </div>
            </div>
            </div>
        @endif
        </div>
        <!-- END CONTENT -->
      </div>

    </div>
  </div>


<form id="updateCartQtyForm" action="{{ route('cart.update') }}" method="POST">
    @csrf
    @method('put')
    <input type="hidden" id="rowId" name="rowId">
    <input type="hidden" id="quantity" name="quantity">
</form>

<form id="deleteFromCart" action="{{ route('cart.remove') }}" method="POST">
    @csrf
    @method('delete')
    <input type="hidden" id="rowId_D" name="rowId">
</form>


<form id="clearCart" action="{{ route('cart.clear') }}" method="POST">
    @csrf
    @method('delete')
</form>

@endsection

@push('scripts')
<script>
    function updateCartQty(qty)
     {
        $('#rowId').val($(qty).data('rowid'));
        $('#quantity').val($(qty).val());
        $('#updateCartQtyForm').submit();
    }


    function removeItemFromCart(rowId)
    {
        $('#rowId_D').val(rowId);
        $('#deleteFromCart').submit();
    }


    function clearCart()
    {
        $('#clearCart').submit();
    }
</script>
@endpush

