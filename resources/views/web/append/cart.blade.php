@if(user_cart_data()->count()>0)
@foreach(user_cart_data() as $key => $value)
<li class="productcart{{$value->product->id}}">
    <a href="#" class="photo"><img src="{{ asset('images/'.$value->product->images[0]->name) }}" class="cart-thumb" alt="" /></a>
    <h6><a href="#">{{$value->product->name}}</a></h6>
    <p>{{$value->quantity}}x - <span class="price">{{$value->productatter->selling_price*$value->quantity}}</span></p>
</li>
@endforeach
@else
<li>
    No Product Found
</li>
@endif
