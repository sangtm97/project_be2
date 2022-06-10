<div class="module-6" style="padding-bottom:500px">
    <div class="container">
        <div class="row">
            <h1 class="page-header__title ">Limited Time Deals</h1><br>
            @foreach ($limiteds as $limited )
            <div class="col-md-4">
                <div class="card-product">
                    <div class="card-product-img">
                        <img class="card-img-top card-product-front" src="./upload/{{$limited->product_image}}"
                            alt="Card image cap">
                    </div>
                    <div class="product-button">
                        <div class="btn-add-to-cart mb-2">
                            <div class="btn-view-icon"><i class="fa-solid fa-unlock"></i></div>
                        </div>
                        <div class="btn-wishlist mb-2">
                            <!-- <span class="btn-wishlist-title">Wishlist</span> -->
                            <span class="btn-wishlist-icon"><i class="fa-regular fa-heart"></i></span>

                        </div>
                        <div class="btn-view mb-2">
                            <!-- <div class="btn-view-title">Quick View</div> -->
                            <div class="btn-view-icon"><i class="fa-regular fa-eye"></i></div>
                        </div>

                    </div>

                    <div class="card-content">
                        <div class="content"style="width: 250px;height: 80px;">
                        <h2 class="product-title" style="font-size:1.5em; text-align:center;padding-top: 20px;"><a href=""></a>{{$limited->product_name}} </h2>
                            <p class="card-product-price">
                            <span class="old-price">${{$limited->product_price}}</span>
                                <span class="new-price new-price-active">&pound; 14.17</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-md-4">
                <div class="card-product">
                    <div class="card-product-img">
                        <img class="card-img-top card-product-front" src="./6/public/images/anh2.jpg"
                            alt="Card image cap">
                    </div>
                    <div class="product-button">
                        <div class="btn-add-to-cart mb-2">
                            <div class="btn-view-icon"><i class="fa-solid fa-unlock"></i></div>
                        </div>
                        <div class="btn-wishlist mb-2"> -->
                            <!-- <span class="btn-wishlist-title">Wishlist</span> -->
                            <!-- <span class="btn-wishlist-icon"><i class="fa-regular fa-heart"></i></span>

                        </div>
                        <div class="btn-view mb-2"> -->
                            <!-- <div class="btn-view-title">Quick View</div> -->
                            <!-- <div class="btn-view-icon"><i class="fa-regular fa-eye"></i></div>
                        </div>

                    </div>

                    <div class="card-content">
                        <div class="content">
                            <h2 class="card-product-name">Whistler Dining Chair</h2>
                            <p class="card-product-price">
                                <span class="old-price">&pound; 184.63</span>
                                <span class="new-price new-price-active">&pound; 56.87</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-md-4">
                <div class="card-product">
                    <div class="card-product-img">
                        <img class="card-img-top card-product-front" src="./6/public/images/anh3.jpg"
                            alt="Card image cap">

                    </div>
                    <div class="product-bage-sales">
                        <span class="product-bage-sales_price">-88%</span>
                    </div>
                    <div class="product-button">
                        <div class="btn-add-to-cart mb-2">
                            <div class="btn-view-icon"><i class="fa-solid fa-unlock"></i></div>
                        </div>
                        <div class="btn-wishlist mb-2"> -->
                            <!-- <span class="btn-wishlist-title">Wishlist</span> -->
                            <!-- <span class="btn-wishlist-icon"><i class="fa-regular fa-heart"></i></span>

                        </div>
                        <div class="btn-view mb-2"> -->
                            <!-- <div class="btn-view-title">Quick View</div> -->
                            <!-- <div class="btn-view-icon"><i class="fa-regular fa-eye"></i></div>
                        </div>

                    </div>
                    <div class="card-content">
                        <div class="content">
                            <h2 class="card-product-name">Dusty Green Bar Stool</h2>
                            <p class="card-product-price">
                                <span class="old-price">&pound; 184.63</span>
                                <span class="new-price new-price-active">&pound; 56.87</span>
                            </p>
                        </div>
                    </div>
                </div> -->
            <!-- </div> -->
        </div>
    </div>
</div>