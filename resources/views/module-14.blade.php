<div class="module-14">
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card-product">
                    <div class="card-product-img">
                        <img class="card-img-top card-product-front"
                            src="{{ asset('./upload/'.$sanpham->product_image) }}" alt="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-detail">
                    <h2 class="card-product-name">{{$sanpham->product_name}}</h2>
                    <p class="card-product-price">$ {{$sanpham->product_price}} (In stock)</p>
                    <p class="card-product-detail">{{$sanpham->product_description}}</p>
                    <div class="btn-size">
                        <svg aria-hidden="true" role="img" focusable="false" width="22" height="16" viewBox="0 0 22 16"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.53822 7.78217C9.35978 7.78217 10.8453 6.69132 10.8453 5.3549C10.8453 4.01832 9.36419 2.92747 7.53822 2.92747C5.71224 2.92747 4.23112 4.01832 4.23112 5.3549C4.23112 6.69132 5.71666 7.78217 7.53822 7.78217ZM7.53822 3.78967C8.86449 3.78967 9.96102 4.50547 9.96102 5.35474C9.96102 6.20417 8.85125 6.91982 7.53822 6.91982C6.22503 6.91982 5.11525 6.20417 5.11525 5.35474C5.11525 4.50547 6.22503 3.78536 7.53822 3.78536V3.78967Z">
                            </path>
                            <path
                                d="M21.5579 9.83887H15.0321V5.35045C15.0321 2.40144 11.6676 0 7.51614 0C3.36449 0 0 2.40144 0 5.35045V10.6537C0 13.3699 2.85171 15.6119 6.52573 15.9525H6.60095C6.90591 15.9785 7.21544 16 7.52939 16H21.5579C21.8019 16 22 15.8069 22 15.5688V10.2699C22 10.032 21.8019 9.83887 21.5579 9.83887ZM7.53822 0.866498C11.1856 0.866498 14.1701 2.87997 14.1701 5.35491C14.1701 7.8297 11.2034 9.84317 7.53822 9.84317C3.87302 9.84317 0.906365 7.8297 0.906365 5.35476C0.906365 2.87997 3.8951 0.866498 7.53822 0.866498ZM14.1701 7.86845V9.83887H11.6057C12.6066 9.39647 13.4799 8.71957 14.1478 7.86845H14.1701ZM21.1157 15.1377H20.2314V12.956C20.2314 12.7181 20.0334 12.5248 19.7894 12.5248C19.5453 12.5248 19.3473 12.7179 19.3473 12.956V15.142H17.5787V13.9562C17.5787 13.7182 17.3807 13.5251 17.1366 13.5251C16.8925 13.5251 16.6944 13.7182 16.6944 13.9562V15.142H14.926V13.9562C14.926 13.7182 14.728 13.5251 14.4839 13.5251C14.2398 13.5251 14.0417 13.7182 14.0417 13.9562V15.142H12.2731V12.956C12.2731 12.7181 12.0751 12.5248 11.831 12.5248C11.5871 12.5248 11.3888 12.7179 11.3888 12.956V15.142H9.69564V13.9562C9.69564 13.7182 9.49743 13.5251 9.2535 13.5251C9.0094 13.5251 8.81135 13.7182 8.81135 13.9562V15.142H7.5379C7.36997 15.142 7.20645 15.142 7.04277 15.142V13.9562C7.04277 13.7182 6.84472 13.5251 6.60063 13.5251C6.35654 13.5251 6.15849 13.7182 6.15849 13.9562V15.0385C3.17448 14.6073 0.92844 12.8051 0.92844 10.6494V7.86845C2.1929 9.55424 4.6821 10.7011 7.56029 10.7011H21.1157V15.1377Z">
                            </path>
                        </svg>
                        <a href="#" style="color: #111111;">Size Chart</a>
                    </div>
                    <br><br>
                    <div class="razzi-free-shipping-bar">
                        <div class="razzi-free-shipping-bar__message">
                            You are missing <strong><span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">$</span>200.00</bdi></span></strong>
                            to get <strong>free shipping!</strong> </div>
                        <div class="razzi-free-shipping-bar__progress">
                            <div class="razzi-free-shipping-bar__progress-bar" style="width:0.00%"></div>
                        </div>
                        <div class="razzi-free-shipping-bar__percent-value">0.00%</div>
                    </div>
                    <div class="button-detail">
                        <div class="button-quantity">
                            <button>
                                <div class="counter">
                                    <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                    <input type="text" value="1">
                                    <span class="up" onClick='increaseCount(event, this)'>+</span>
                                </div>
                            </button>
                            <script type="text/javascript">
                            function increaseCount(a, b) {
                                var input = b.previousElementSibling;
                                var value = parseInt(input.value, 10);
                                value = isNaN(value) ? 0 : value;
                                value++;
                                input.value = value;
                            }

                            function decreaseCount(a, b) {
                                var input = b.nextElementSibling;
                                var value = parseInt(input.value, 10);
                                if (value > 1) {
                                    value = isNaN(value) ? 0 : value;
                                    value--;
                                    input.value = value;
                                }
                            }
                            </script>
                        </div>
                        <div class="button-addtocart">
                            <button type="submit" name="add-to-cart" value="6831"
                                class="single_add_to_cart_button button alt">
                                Add to cart
                            </button>
                        </div>
                        <div class="btnBuyNow">
                            <button type="submit" class="rz-buy-now-button razzi-button button-outline">Buy Now</button>
                        </div>
                        <div class="wishlist">
                            <svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="product_meta">
                    <span class="sku_wrapper"><span class="label">SKU:</span> <span
                            class="sku">Q4TTYHTJY0</span><br></span>
                    <span class="posted_in"><span class="label">Categories:</span><a
                            href="https://demo4.drfuri.com/razzi9/product-category/living-room/furniture/"
                            rel="tag">Furniture</a>, <a
                            href="https://demo4.drfuri.com/razzi9/product-category/home-office-2/outdoor/"
                            rel="tag">Outdoor</a>, <a
                            href="https://demo4.drfuri.com/razzi9/product-category/living-room/sofas/"
                            rel="tag">Sofas</a></span><br>
                    <span class="tagged_as"><span class="label">Tags:</span><a
                            href="https://demo4.drfuri.com/razzi9/product-tag/accessories/" rel="tag">Accessories</a>,
                        <a href="https://demo4.drfuri.com/razzi9/product-tag/arm-chairs/" rel="tag">Arm Chairs</a>, <a
                            href="https://demo4.drfuri.com/razzi9/product-tag/vintage/" rel="tag">Vintage</a></span>
                </div>
                <div class="social">
                    <label for="icon">Share:</label>
                    <div class="iconsocial">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>