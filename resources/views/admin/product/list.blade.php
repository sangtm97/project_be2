@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Id</th>
                <th>Product name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th>Endow_id</th>
            </tr>
        </thead>
        <?php
            $i = 1;
        ?>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$product->id}}</td>
                <td>{{$product->product_name}}</td>
                <td>{{$product->product_price}}</td>
                <td>{{$product->product_description}}</td>
                <td>{{$product->product_image}}</td>
                <td>{{$product->endow_id}}</td>
                <td style="display: flex;gap: 6px">
                    <a class="btn btn-primary btn-sm" href="{{route('edit', $product->id)}}">
                        Edit
                    </a>
                    <form action="{{route('destroy', $product->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!!$products->render()!!}
@endsection
