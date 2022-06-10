@section('content')
<div class="test-email" style="width:500px;margin:0 auto;
padding:15px;text-align:center">
    <h2>Hi {{$name}}</h2>
    <p>Bạn đã thêm sản phẩm thành công <br>
        xin cảm ơn bạn đã tin dùng sản phẩm!
    </p>
</div>
<table class="table" style="border:1px solid;cellspacing:0;cellpadding:10px;width:100%">
    <thead>
    <tr>
        <th>Id</th>
        <td>{{$products->id}}</td>
    </tr>
    <tr>
        <th>Product name</th>
        <td>{{$products->product_name}}</td>
    </tr>
    <tr>
        <th>Price</th>
        <td>{{$products->product_price}}$</td>
    </tr>
    <tr>
        <th>Description</th>
        <td>{{$products->product_description}}</td>
    </tr>
    <tr>
        <th>Image</th>
        <td>{{$products->product_image}}</td>
    </tr>
    <tr>
        <th>Endow_id</th>
        <td>{{$products->endow_id}}</td>
    </tr>
    </thead>
</table>
