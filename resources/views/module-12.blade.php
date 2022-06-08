<div class="module-12">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-header">
                <div class="site-breadcrumb">
                    <a href="#">Home</a>
                    <i class="fa-solid fa-angle-right size-icon"></i> Shop
                </div>
                <h1 class="page-header__title ">Shop</h1>
            </div>
        </div>
        <div class="catalog-toolbar">
            <div class="catalog-toolbar-left">
                <a href="#" class="active">All</a>
                <a href="#">Kitchen</a>
                <a href="#">Furniture</a>
                <a href="#">Living Room</a>
                <a href="#">Chairs</a>
                <a href="#">Lightings</a>
            </div>
            <div class="catalog-toolbar-right">
                <div class="catalog-filter">
                    <svg class="catalog-filter-icon" aria-hidden="true" role="img" focusable="false" width="16"
                        height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path d="M16.0001 4H7.78186V5.45457H16.0001V4Z" fill="currentColor" />
                            <path d="M2.4 4H0V5.45457H2.4V4Z" fill="currentColor" />
                            <path d="M16 10.5454H13.6V12H16V10.5454Z" fill="currentColor" />
                            <path d="M8.2182 10.5454H0V12H8.2182V10.5454Z" fill="currentColor" />
                            <path
                                d="M5.09084 1.81812C3.49085 1.81812 2.18176 3.12721 2.18176 4.72723C2.18176 6.32722 3.49085 7.63631 5.09084 7.63631C6.69083 7.63631 7.99993 6.32722 7.99993 4.72723C7.99996 3.12721 6.69087 1.81812 5.09084 1.81812ZM5.09084 6.32722C4.21812 6.32722 3.49085 5.59996 3.49085 4.72723C3.49085 3.8545 4.21812 3.12724 5.09084 3.12724C5.96357 3.12724 6.69083 3.8545 6.69083 4.72723C6.69087 5.59996 5.96357 6.32722 5.09084 6.32722Z"
                                fill="currentColor" />
                            <path
                                d="M10.9091 8.36365C9.30908 8.36365 8 9.67274 8 11.2727C8 12.8727 9.30908 14.1819 10.9091 14.1819C12.509 14.1819 13.8181 12.8728 13.8181 11.2728C13.8181 9.67278 12.509 8.36365 10.9091 8.36365ZM10.9091 12.8728C10.0363 12.8728 9.30908 12.1455 9.30908 11.2728C9.30908 10.4 10.0363 9.67274 10.9091 9.67274C11.7818 9.67274 12.509 10.4 12.509 11.2727C12.509 12.1455 11.7818 12.8728 10.9091 12.8728Z"
                                fill="currentColor" />
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="16" height="16" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span class="catalog-filter-title">Filter</span>
                </div>
                <div class="catalog-sort">
                    <form class="catalog-sort-ordering" method="get">
                        <select name="orderby" class="orderby" aria-label="Shop order">
                            <option value="menu_order" selected='selected'>Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by latest</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                        <input type="hidden" name="paged" value="1" />
                    </form>
                </div>
            </div>
        </div>
        <div class="product-filter-box">
            <a href="#" class="filtered">
                Kitchen
                <span>
                    <svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18">
                        </line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </span>
            </a>
        </div>
        <div class="row">
            <div class="col-md-3">
                    <div class="card-product">
                        <div class="card-product-img">
                            <img class="card-img-top card-product-front" src="./12/public/images/product-1-1.jpg" alt="Card image cap">
                            <img class="card-img-top card-product-back" src="./12/public/images/product-1-2.jpg" alt="Card image cap">
                        </div>
                        <div class="product-button">
                            <div class="btn-wishlist mb-2">
                                <!-- <span class="btn-wishlist-title">Wishlist</span> -->
                                <span class="btn-wishlist-icon"><i class="fa-regular fa-heart"></i></span>
                                
                            </div>
                            <div class="btn-view">
                                <!-- <div class="btn-view-title">Quick View</div> -->
                                <div class="btn-view-icon"><i class="fa-regular fa-eye"></i></div>
                            </div>
                        </div>
                        <div class="btn-add-to-cart">
                            <svg class="cart-svg" aria-hidden="true" role="img" focusable="false" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.9353 20.0337L20.7493 8.51772C20.7003 8.0402 20.2981 7.67725 19.8181 7.67725H4.21338C3.73464 7.67725 3.33264 8.03898 3.28239 8.51523L2.06458 20.0368C1.96408 21.0424 2.29928 22.0529 2.98399 22.8097C3.66874 23.566 4.63999 24.0001 5.64897 24.0001H18.3827C19.387 24.0001 20.3492 23.5747 21.0214 22.8322C21.7031 22.081 22.0361 21.0623 21.9353 20.0337ZM19.6348 21.5748C19.3115 21.9312 18.8668 22.1275 18.3827 22.1275H5.6493C5.16836 22.1275 4.70303 21.9181 4.37252 21.553C4.042 21.1878 3.88005 20.7031 3.92749 20.2284L5.056 9.55014H18.9732L20.0724 20.2216C20.1223 20.7281 19.9666 21.2087 19.6348 21.5748Z" fill="currentColor"> </path> 
                                <path d="M12.1717 0C9.21181 0 6.80365 2.40811 6.80365 5.36803V8.6138H8.67622V5.36803C8.67622 3.44053 10.2442 1.87256 12.1717 1.87256C14.0992 1.87256 15.6674 3.44053 15.6674 5.36803V8.6138H17.5397V5.36803C17.5397 2.40811 15.1316 0 12.1717 0Z" fill="currentColor"> </path> 
                            </svg>
                            <span>Add to cart</span>
                        </div>
                        <div class="card-content">
                            <h2 class="card-product-name">Highland Bedside Table</h2>
                            <p class="card-product-price">&pound; 102.66</p>
                        </div>
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="card-product">
                        <div class="card-product-img">
                            <img class="card-img-top card-product-front" src="./12/public/images/product-2-1.jpg" alt="Card image cap">
                            <img class="card-img-top card-product-back" src="./12/public/images/product-2-2.jpg" alt="Card image cap">
                            
                        </div>
                        <div class="product-button">
                            <div class="btn-wishlist mb-2">
                                <!-- <span class="btn-wishlist-title">Wishlist</span> -->
                                <span class="btn-wishlist-icon"><i class="fa-regular fa-heart"></i></span>
                                
                            </div>
                            <div class="btn-view">
                                <!-- <div class="btn-view-title">Quick View</div> -->
                                <div class="btn-view-icon"><i class="fa-regular fa-eye"></i></div>
                            </div>
                        </div>
                        <div class="btn-add-to-cart">
                            <svg class="cart-svg" aria-hidden="true" role="img" focusable="false" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.9353 20.0337L20.7493 8.51772C20.7003 8.0402 20.2981 7.67725 19.8181 7.67725H4.21338C3.73464 7.67725 3.33264 8.03898 3.28239 8.51523L2.06458 20.0368C1.96408 21.0424 2.29928 22.0529 2.98399 22.8097C3.66874 23.566 4.63999 24.0001 5.64897 24.0001H18.3827C19.387 24.0001 20.3492 23.5747 21.0214 22.8322C21.7031 22.081 22.0361 21.0623 21.9353 20.0337ZM19.6348 21.5748C19.3115 21.9312 18.8668 22.1275 18.3827 22.1275H5.6493C5.16836 22.1275 4.70303 21.9181 4.37252 21.553C4.042 21.1878 3.88005 20.7031 3.92749 20.2284L5.056 9.55014H18.9732L20.0724 20.2216C20.1223 20.7281 19.9666 21.2087 19.6348 21.5748Z" fill="currentColor"> </path> 
                                <path d="M12.1717 0C9.21181 0 6.80365 2.40811 6.80365 5.36803V8.6138H8.67622V5.36803C8.67622 3.44053 10.2442 1.87256 12.1717 1.87256C14.0992 1.87256 15.6674 3.44053 15.6674 5.36803V8.6138H17.5397V5.36803C17.5397 2.40811 15.1316 0 12.1717 0Z" fill="currentColor"> </path> 
                            </svg>
                            <span>Add to cart</span>
                        </div>
                        <div class="card-content">
                            <h2 class="card-product-name">Drift Toilet Roll Holder</h2>
                            <p class="card-product-price">&pound; 14.17</p>
                        </div>
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="card-product">
                        <div class="card-product-img">
                            <img class="card-img-top card-product-front" src="./12/public/images/product-3-1.jpg" alt="Card image cap">
                            <img class="card-img-top card-product-back" src="./12/public/images/product-3-2.jpg" alt="Card image cap">
                        </div>
                        <div class="product-bage-sales">
                            <span class="product-bage-sales_price">-88%</span>
                        </div>
                        <div class="product-button">
                            <div class="btn-wishlist mb-2">
                                <!-- <span class="btn-wishlist-title">Wishlist</span> -->
                                <span class="btn-wishlist-icon"><i class="fa-regular fa-heart"></i></span>
                                
                            </div>
                            <div class="btn-view">
                                <!-- <div class="btn-view-title">Quick View</div> -->
                                <div class="btn-view-icon"><i class="fa-regular fa-eye"></i></div>
                            </div>
                        </div>
                        <div class="btn-add-to-cart">
                            <svg class="cart-svg" aria-hidden="true" role="img" focusable="false" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.9353 20.0337L20.7493 8.51772C20.7003 8.0402 20.2981 7.67725 19.8181 7.67725H4.21338C3.73464 7.67725 3.33264 8.03898 3.28239 8.51523L2.06458 20.0368C1.96408 21.0424 2.29928 22.0529 2.98399 22.8097C3.66874 23.566 4.63999 24.0001 5.64897 24.0001H18.3827C19.387 24.0001 20.3492 23.5747 21.0214 22.8322C21.7031 22.081 22.0361 21.0623 21.9353 20.0337ZM19.6348 21.5748C19.3115 21.9312 18.8668 22.1275 18.3827 22.1275H5.6493C5.16836 22.1275 4.70303 21.9181 4.37252 21.553C4.042 21.1878 3.88005 20.7031 3.92749 20.2284L5.056 9.55014H18.9732L20.0724 20.2216C20.1223 20.7281 19.9666 21.2087 19.6348 21.5748Z" fill="currentColor"> </path> 
                                <path d="M12.1717 0C9.21181 0 6.80365 2.40811 6.80365 5.36803V8.6138H8.67622V5.36803C8.67622 3.44053 10.2442 1.87256 12.1717 1.87256C14.0992 1.87256 15.6674 3.44053 15.6674 5.36803V8.6138H17.5397V5.36803C17.5397 2.40811 15.1316 0 12.1717 0Z" fill="currentColor"> </path> 
                            </svg>
                            <span>Add to cart</span>
                        </div>
                        <div class="card-content">
                            <h2 class="card-product-name">Dusty Green Bar Stool</h2>
                            <p class="card-product-price">
                                <span class="old-price">&pound; 184.63</span>
                                <span class="new-price new-price-active">&pound; 14.17</span>
                            </p>
                        </div>
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="card-product">
                        <div class="card-product-img">
                            <img class="card-img-top card-product-front" src="./12/public/images/product-4-1.jpg" alt="Card image cap">
                            <img class="card-img-top card-product-back" src="./12/public/images/product-4-2.jpg" alt="Card image cap">
                            
                        </div>
                        <div class="product-button">
                            <div class="btn-wishlist mb-2">
                                <!-- <span class="btn-wishlist-title">Wishlist</span> -->
                                <span class="btn-wishlist-icon"><i class="fa-regular fa-heart"></i></span>
                                
                            </div>
                            <div class="btn-view">
                                {{-- <div class="btn-view-title">Quick View</div> --}}
                                <div class="btn-view-icon"><i class="fa-regular fa-eye"></i></div>
                            </div>
                        </div>
                        <div class="btn-add-to-cart">
                            <svg class="cart-svg" aria-hidden="true" role="img" focusable="false" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.9353 20.0337L20.7493 8.51772C20.7003 8.0402 20.2981 7.67725 19.8181 7.67725H4.21338C3.73464 7.67725 3.33264 8.03898 3.28239 8.51523L2.06458 20.0368C1.96408 21.0424 2.29928 22.0529 2.98399 22.8097C3.66874 23.566 4.63999 24.0001 5.64897 24.0001H18.3827C19.387 24.0001 20.3492 23.5747 21.0214 22.8322C21.7031 22.081 22.0361 21.0623 21.9353 20.0337ZM19.6348 21.5748C19.3115 21.9312 18.8668 22.1275 18.3827 22.1275H5.6493C5.16836 22.1275 4.70303 21.9181 4.37252 21.553C4.042 21.1878 3.88005 20.7031 3.92749 20.2284L5.056 9.55014H18.9732L20.0724 20.2216C20.1223 20.7281 19.9666 21.2087 19.6348 21.5748Z" fill="currentColor"> </path> 
                                <path d="M12.1717 0C9.21181 0 6.80365 2.40811 6.80365 5.36803V8.6138H8.67622V5.36803C8.67622 3.44053 10.2442 1.87256 12.1717 1.87256C14.0992 1.87256 15.6674 3.44053 15.6674 5.36803V8.6138H17.5397V5.36803C17.5397 2.40811 15.1316 0 12.1717 0Z" fill="currentColor"> </path> 
                            </svg>
                            <span>Add to cart</span>
                        </div>
                        <div class="card-content">
                            <h2 class="card-product-name">Alice Dining Chair</h2>
                            <p class="card-product-price">&pound; 184.63</p>
                        </div>
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="card-product">
                        <div class="card-product-img">
                            <img class="card-img-top card-product-front" src="./12/public/images/product-5-1.jpg" alt="Card image cap">
                            <img class="card-img-top card-product-back" src="./12/public/images/product-5-2.jpg" alt="Card image cap">
                        </div>
                        <div class="product-bage-sales">
                            <span class="product-bage-sales_price">-27%</span>
                        </div>
                        <div class="product-button">
                            <div class="btn-wishlist mb-2">
                                <!-- <span class="btn-wishlist-title">Wishlist</span> -->
                                <span class="btn-wishlist-icon"><i class="fa-regular fa-heart"></i></span>
                                
                            </div>
                            <div class="btn-view">
                                <!-- <div class="btn-view-title">Quick View</div> -->
                                <div class="btn-view-icon"><i class="fa-regular fa-eye"></i></div>
                            </div>
                        </div>
                        <div class="btn-add-to-cart">
                            <svg class="cart-svg" aria-hidden="true" role="img" focusable="false" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.9353 20.0337L20.7493 8.51772C20.7003 8.0402 20.2981 7.67725 19.8181 7.67725H4.21338C3.73464 7.67725 3.33264 8.03898 3.28239 8.51523L2.06458 20.0368C1.96408 21.0424 2.29928 22.0529 2.98399 22.8097C3.66874 23.566 4.63999 24.0001 5.64897 24.0001H18.3827C19.387 24.0001 20.3492 23.5747 21.0214 22.8322C21.7031 22.081 22.0361 21.0623 21.9353 20.0337ZM19.6348 21.5748C19.3115 21.9312 18.8668 22.1275 18.3827 22.1275H5.6493C5.16836 22.1275 4.70303 21.9181 4.37252 21.553C4.042 21.1878 3.88005 20.7031 3.92749 20.2284L5.056 9.55014H18.9732L20.0724 20.2216C20.1223 20.7281 19.9666 21.2087 19.6348 21.5748Z" fill="currentColor"> </path> 
                                <path d="M12.1717 0C9.21181 0 6.80365 2.40811 6.80365 5.36803V8.6138H8.67622V5.36803C8.67622 3.44053 10.2442 1.87256 12.1717 1.87256C14.0992 1.87256 15.6674 3.44053 15.6674 5.36803V8.6138H17.5397V5.36803C17.5397 2.40811 15.1316 0 12.1717 0Z" fill="currentColor"> </path> 
                            </svg>
                            <span>Add to cart</span>
                        </div>
                        <div class="card-content">
                            <h2 class="card-product-name">Jamie Ceiling Light</h2>
                            <p class="card-product-price">&pound; 79.20 – &pound; 144.75</p>
                        </div>
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="card-product">
                        <div class="card-product-img">
                            <img class="card-img-top card-product-front" src="./12/public/images/product-6-1.jpg" alt="Card image cap">
                            <img class="card-img-top card-product-back" src="./12/public/images/product-6-2.jpg" alt="Card image cap">
                            
                        </div>
                        <div class="product-bage-sales">
                            <span class="product-bage-sales_sold-out">sold out</span>
                        </div>
                        <div class="product-button">
                            <div class="btn-wishlist mb-2">
                                <!-- <span class="btn-wishlist-title">Wishlist</span> -->
                                <span class="btn-wishlist-icon"><i class="fa-regular fa-heart"></i></span>
                                
                            </div>
                            <div class="btn-view">
                                <!-- <div class="btn-view-title">Quick View</div> -->
                                <div class="btn-view-icon"><i class="fa-regular fa-eye"></i></div>
                            </div>
                        </div>
                        <div class="btn-add-to-cart">
                            <svg class="cart-svg" aria-hidden="true" role="img" focusable="false" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.9353 20.0337L20.7493 8.51772C20.7003 8.0402 20.2981 7.67725 19.8181 7.67725H4.21338C3.73464 7.67725 3.33264 8.03898 3.28239 8.51523L2.06458 20.0368C1.96408 21.0424 2.29928 22.0529 2.98399 22.8097C3.66874 23.566 4.63999 24.0001 5.64897 24.0001H18.3827C19.387 24.0001 20.3492 23.5747 21.0214 22.8322C21.7031 22.081 22.0361 21.0623 21.9353 20.0337ZM19.6348 21.5748C19.3115 21.9312 18.8668 22.1275 18.3827 22.1275H5.6493C5.16836 22.1275 4.70303 21.9181 4.37252 21.553C4.042 21.1878 3.88005 20.7031 3.92749 20.2284L5.056 9.55014H18.9732L20.0724 20.2216C20.1223 20.7281 19.9666 21.2087 19.6348 21.5748Z" fill="currentColor"> </path> 
                                <path d="M12.1717 0C9.21181 0 6.80365 2.40811 6.80365 5.36803V8.6138H8.67622V5.36803C8.67622 3.44053 10.2442 1.87256 12.1717 1.87256C14.0992 1.87256 15.6674 3.44053 15.6674 5.36803V8.6138H17.5397V5.36803C17.5397 2.40811 15.1316 0 12.1717 0Z" fill="currentColor"> </path> 
                            </svg>
                            <span>Add to cart</span>
                        </div>
                        <div class="card-content">
                            <h2 class="card-product-name">Jersey Bar Stool</h2>
                            <p class="card-product-price">&pound; 25.85</p>
                        </div>
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="card-product">
                        <div class="card-product-img">
                            <img class="card-img-top card-product-front" src="./12/public/images/product-7-1.jpg" alt="Card image cap">
                            <img class="card-img-top card-product-back" src="./12/public/images/product-7-2.jpg" alt="Card image cap">
                            
                        </div>
                        <div class="product-bage-sales">
                            <span class="product-bage-sales_title">Hot</span>
                            <span class="product-bage-sales_price">-33%</span>
                        </div>
                        <div class="product-button">
                            <div class="btn-wishlist mb-2">
                                <!-- <span class="btn-wishlist-title">Wishlist</span> -->
                                <span class="btn-wishlist-icon"><i class="fa-regular fa-heart"></i></span>
                                
                            </div>
                            <div class="btn-view">
                                <!-- <div class="btn-view-title">Quick View</div> -->
                                <div class="btn-view-icon"><i class="fa-regular fa-eye"></i></div>
                            </div>
                        </div>
                        <div class="btn-add-to-cart">
                            <svg class="cart-svg" aria-hidden="true" role="img" focusable="false" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.9353 20.0337L20.7493 8.51772C20.7003 8.0402 20.2981 7.67725 19.8181 7.67725H4.21338C3.73464 7.67725 3.33264 8.03898 3.28239 8.51523L2.06458 20.0368C1.96408 21.0424 2.29928 22.0529 2.98399 22.8097C3.66874 23.566 4.63999 24.0001 5.64897 24.0001H18.3827C19.387 24.0001 20.3492 23.5747 21.0214 22.8322C21.7031 22.081 22.0361 21.0623 21.9353 20.0337ZM19.6348 21.5748C19.3115 21.9312 18.8668 22.1275 18.3827 22.1275H5.6493C5.16836 22.1275 4.70303 21.9181 4.37252 21.553C4.042 21.1878 3.88005 20.7031 3.92749 20.2284L5.056 9.55014H18.9732L20.0724 20.2216C20.1223 20.7281 19.9666 21.2087 19.6348 21.5748Z" fill="currentColor"> </path> 
                                <path d="M12.1717 0C9.21181 0 6.80365 2.40811 6.80365 5.36803V8.6138H8.67622V5.36803C8.67622 3.44053 10.2442 1.87256 12.1717 1.87256C14.0992 1.87256 15.6674 3.44053 15.6674 5.36803V8.6138H17.5397V5.36803C17.5397 2.40811 15.1316 0 12.1717 0Z" fill="currentColor"> </path> 
                            </svg>
                            <span>Add to cart</span>
                        </div>
                        <div class="card-content">
                            <h2 class="card-product-name">Marlon Dining</h2>
                            <p class="card-product-price">
                                <span class="old-price">&pound; 110.78</span>
                                <span class="new-price new-price-active">&pound; 73.85</span>
                            </p>
                        </div>
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="card-product">
                        <div class="card-product-img">
                            <img class="card-img-top card-product-front" src="./12/public/images/product-8-1.jpg" alt="Card image cap">
                            <img class="card-img-top card-product-back" src="./12/public/images/product-8-2.jpg" alt="Card image cap">
                            
                        </div>
                        <div class="product-button">
                            <div class="btn-wishlist mb-2">
                                <!-- <span class="btn-wishlist-title">Wishlist</span> -->
                                <span class="btn-wishlist-icon"><i class="fa-regular fa-heart"></i></span>
                                
                            </div>
                            <div class="btn-view">
                                <!-- <div class="btn-view-title">Quick View</div> -->
                                <div class="btn-view-icon"><i class="fa-regular fa-eye"></i></div>
                            </div>
                        </div>
                        <div class="btn-add-to-cart">
                            <svg class="cart-svg" aria-hidden="true" role="img" focusable="false" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.9353 20.0337L20.7493 8.51772C20.7003 8.0402 20.2981 7.67725 19.8181 7.67725H4.21338C3.73464 7.67725 3.33264 8.03898 3.28239 8.51523L2.06458 20.0368C1.96408 21.0424 2.29928 22.0529 2.98399 22.8097C3.66874 23.566 4.63999 24.0001 5.64897 24.0001H18.3827C19.387 24.0001 20.3492 23.5747 21.0214 22.8322C21.7031 22.081 22.0361 21.0623 21.9353 20.0337ZM19.6348 21.5748C19.3115 21.9312 18.8668 22.1275 18.3827 22.1275H5.6493C5.16836 22.1275 4.70303 21.9181 4.37252 21.553C4.042 21.1878 3.88005 20.7031 3.92749 20.2284L5.056 9.55014H18.9732L20.0724 20.2216C20.1223 20.7281 19.9666 21.2087 19.6348 21.5748Z" fill="currentColor"> </path> 
                                <path d="M12.1717 0C9.21181 0 6.80365 2.40811 6.80365 5.36803V8.6138H8.67622V5.36803C8.67622 3.44053 10.2442 1.87256 12.1717 1.87256C14.0992 1.87256 15.6674 3.44053 15.6674 5.36803V8.6138H17.5397V5.36803C17.5397 2.40811 15.1316 0 12.1717 0Z" fill="currentColor"> </path> 
                            </svg>
                            <span>Add to cart</span>
                        </div>
                        <div class="card-content">
                            <h2 class="card-product-name">Mina Chair</h2>
                            <p class="card-product-price">&pound; 110.78</p>
                        </div>
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="card-product">
                        <div class="card-product-img">
                            <img class="card-img-top card-product-front" src="./12/public/images/product-9-1.jpg" alt="Card image cap">
                            <img class="card-img-top card-product-back" src="./12/public/images/product-9-2.jpg" alt="Card image cap">
                            
                        </div>
                        <div class="product-button">
                            <div class="btn-wishlist mb-2">
                                <!-- <span class="btn-wishlist-title">Wishlist</span> -->
                                <span class="btn-wishlist-icon"><i class="fa-regular fa-heart"></i></span>
                                
                            </div>
                            <div class="btn-view">
                                <!-- <div class="btn-view-title">Quick View</div> -->
                                <div class="btn-view-icon"><i class="fa-regular fa-eye"></i></div>
                            </div>
                        </div>
                        <div class="btn-add-to-cart">
                            <svg class="cart-svg" aria-hidden="true" role="img" focusable="false" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.9353 20.0337L20.7493 8.51772C20.7003 8.0402 20.2981 7.67725 19.8181 7.67725H4.21338C3.73464 7.67725 3.33264 8.03898 3.28239 8.51523L2.06458 20.0368C1.96408 21.0424 2.29928 22.0529 2.98399 22.8097C3.66874 23.566 4.63999 24.0001 5.64897 24.0001H18.3827C19.387 24.0001 20.3492 23.5747 21.0214 22.8322C21.7031 22.081 22.0361 21.0623 21.9353 20.0337ZM19.6348 21.5748C19.3115 21.9312 18.8668 22.1275 18.3827 22.1275H5.6493C5.16836 22.1275 4.70303 21.9181 4.37252 21.553C4.042 21.1878 3.88005 20.7031 3.92749 20.2284L5.056 9.55014H18.9732L20.0724 20.2216C20.1223 20.7281 19.9666 21.2087 19.6348 21.5748Z" fill="currentColor"> </path> 
                                <path d="M12.1717 0C9.21181 0 6.80365 2.40811 6.80365 5.36803V8.6138H8.67622V5.36803C8.67622 3.44053 10.2442 1.87256 12.1717 1.87256C14.0992 1.87256 15.6674 3.44053 15.6674 5.36803V8.6138H17.5397V5.36803C17.5397 2.40811 15.1316 0 12.1717 0Z" fill="currentColor"> </path> 
                            </svg>
                            <span>Add to cart</span>
                        </div>
                        <div class="card-content">
                            <h2 class="card-product-name">Rex Chair</h2>
                            <p class="card-product-price">&pound; 75.33</p>
                        </div>
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="card-product">
                        <div class="card-product-img">
                            <img class="card-img-top card-product-front" src="./12/public/images/product-10-1.jpg" alt="Card image cap">
                            <img class="card-img-top card-product-back" src="./12/public/images/product-10-2.jpg" alt="Card image cap">
                            
                        </div>
                        <div class="product-bage-sales">
                            <span class="product-bage-sales_price">-28%</span>
                        </div>
                        <div class="product-button">
                            <div class="btn-wishlist mb-2">
                                <!-- <span class="btn-wishlist-title">Wishlist</span> -->
                                <span class="btn-wishlist-icon"><i class="fa-regular fa-heart"></i></span>
                                
                            </div>
                            <div class="btn-view">
                                <!-- <div class="btn-view-title">Quick View</div> -->
                                <div class="btn-view-icon"><i class="fa-regular fa-eye"></i></div>
                            </div>
                        </div>
                        <div class="btn-add-to-cart">
                            <svg class="cart-svg" aria-hidden="true" role="img" focusable="false" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.9353 20.0337L20.7493 8.51772C20.7003 8.0402 20.2981 7.67725 19.8181 7.67725H4.21338C3.73464 7.67725 3.33264 8.03898 3.28239 8.51523L2.06458 20.0368C1.96408 21.0424 2.29928 22.0529 2.98399 22.8097C3.66874 23.566 4.63999 24.0001 5.64897 24.0001H18.3827C19.387 24.0001 20.3492 23.5747 21.0214 22.8322C21.7031 22.081 22.0361 21.0623 21.9353 20.0337ZM19.6348 21.5748C19.3115 21.9312 18.8668 22.1275 18.3827 22.1275H5.6493C5.16836 22.1275 4.70303 21.9181 4.37252 21.553C4.042 21.1878 3.88005 20.7031 3.92749 20.2284L5.056 9.55014H18.9732L20.0724 20.2216C20.1223 20.7281 19.9666 21.2087 19.6348 21.5748Z" fill="currentColor"> </path> 
                                <path d="M12.1717 0C9.21181 0 6.80365 2.40811 6.80365 5.36803V8.6138H8.67622V5.36803C8.67622 3.44053 10.2442 1.87256 12.1717 1.87256C14.0992 1.87256 15.6674 3.44053 15.6674 5.36803V8.6138H17.5397V5.36803C17.5397 2.40811 15.1316 0 12.1717 0Z" fill="currentColor"> </path> 
                            </svg>
                            <span>Add to cart</span>
                        </div>
                        <div class="card-content">
                            <h2 class="card-product-name">Small Side Table</h2>
                            <p class="card-product-price">
                                <span class="old-price">&pound; 75.27</span>
                                <span class="new-price new-price-active">&pound; 54.54</span>
                            </p>
                        </div>
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="card-product">
                        <div class="card-product-img">
                            <img class="card-img-top card-product-front" src="./12/public/images/product-11-1.jpg" alt="Card image cap">
                            <img class="card-img-top card-product-back" src="./12/public/images/product-11-2.jpg" alt="Card image cap">
                            
                        </div>
                        <div class="product-button">
                            <div class="btn-wishlist mb-2">
                                <!-- <span class="btn-wishlist-title">Wishlist</span> -->
                                <span class="btn-wishlist-icon"><i class="fa-regular fa-heart"></i></span>
                                
                            </div>
                            <div class="btn-view">
                                <!-- <div class="btn-view-title">Quick View</div> -->
                                <div class="btn-view-icon"><i class="fa-regular fa-eye"></i></div>
                            </div>
                        </div>
                        <div class="btn-add-to-cart">
                            <svg class="cart-svg" aria-hidden="true" role="img" focusable="false" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.9353 20.0337L20.7493 8.51772C20.7003 8.0402 20.2981 7.67725 19.8181 7.67725H4.21338C3.73464 7.67725 3.33264 8.03898 3.28239 8.51523L2.06458 20.0368C1.96408 21.0424 2.29928 22.0529 2.98399 22.8097C3.66874 23.566 4.63999 24.0001 5.64897 24.0001H18.3827C19.387 24.0001 20.3492 23.5747 21.0214 22.8322C21.7031 22.081 22.0361 21.0623 21.9353 20.0337ZM19.6348 21.5748C19.3115 21.9312 18.8668 22.1275 18.3827 22.1275H5.6493C5.16836 22.1275 4.70303 21.9181 4.37252 21.553C4.042 21.1878 3.88005 20.7031 3.92749 20.2284L5.056 9.55014H18.9732L20.0724 20.2216C20.1223 20.7281 19.9666 21.2087 19.6348 21.5748Z" fill="currentColor"> </path> 
                                <path d="M12.1717 0C9.21181 0 6.80365 2.40811 6.80365 5.36803V8.6138H8.67622V5.36803C8.67622 3.44053 10.2442 1.87256 12.1717 1.87256C14.0992 1.87256 15.6674 3.44053 15.6674 5.36803V8.6138H17.5397V5.36803C17.5397 2.40811 15.1316 0 12.1717 0Z" fill="currentColor"> </path> 
                            </svg>
                            <span>Add to cart</span>
                        </div>
                        <div class="card-content">
                            <h2 class="card-product-name">Walton Accent Chair</h2>
                            <p class="card-product-price">&pound; 125.55</p>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row product-post-found">
            <div class="product-post-found-inner">
                Showing 11 of 11 products
            </div>
            <span class="count-bar"></span>
        </div>
    </div>
</div>