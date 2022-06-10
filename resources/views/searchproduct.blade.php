<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>
<body>
<div class="module-1">
        <div class="container-fluid">
            <div class="container">
                <div class="tieude">
                    <div class="row pt-3 pb-1">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="hehe1 d-flex">
                                            <div class="icon pe-3">
                                                <svg width="17" height="14" viewBox="0 0 17 14" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.2273 9.66667V1H1V9.66667H11.2273ZM11.2273 9.66667H16V6.33333L13.9545 4.33333H11.2273V9.66667ZM5.77273 11.3333C5.77273 12.2538 5.00958 13 4.06818 13C3.12679 13 2.36364 12.2538 2.36364 11.3333C2.36364 10.4129 3.12679 9.66667 4.06818 9.66667C5.00958 9.66667 5.77273 10.4129 5.77273 11.3333ZM14.6364 11.3333C14.6364 12.2538 13.8732 13 12.9318 13C11.9904 13 11.2273 12.2538 11.2273 11.3333C11.2273 10.4129 11.9904 9.66667 12.9318 9.66667C13.8732 9.66667 14.6364 10.4129 14.6364 11.3333Z" fill="none" stroke="currentColor" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </div>
                                            <h6>
                                                FREE SHIPPING OVER $100
                                            </h6>
                                        </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="menu-dropdown border-end pe-3">
                                            <span class = "py-4 pe-2" style = "font-weight: 500; font-size: 14px;">USD<i class="fa-solid fa-angle-down ps-2"></i> </span>
                                            <div class="border-end"> </div>
                                            <div class="dropdown-content mt-3">
                                                <a href="#" >USD</a>
                                                <hr>
                                                <a href="#">EUR</a>
                                            </div>
                                            
                                    </div>
                                    <div class="menu-dropdown pe-3">
                                            <span class = "py-4 ps-2" style = "font-weight: 500; font-size: 14px;">English<i class="fa-solid fa-angle-down ps-2"></i> </span>
                                            <div class="border-end"> </div>
                                            <div class="dropdown-content mt-3">
                                                <a href="#" >English</a>
                                                <hr>
                                                <a href="#">France</a>
                                                <hr>
                                                <a href="#">Germany</a>
                                            </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-end " style = "font-size: 14px; font-weight: 500;">
                                <div class="danhmuc pe-2">
                                    <a href="#">Wishlist</a>
                                </div>
                                <div class="danhmuc pe-2">
                                    <a href="#">Order Tracking</a>
                                </div>
                                <div class="danhmuc pe-2">
                                    <a href="#">Shipping</a>
                                </div>
                                <div class="danhmuc pe-2">
                                    <a href="#">Contact</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="tieude2 pt-4">
                <div class="row">
                    <div class="col-md-3">
                        <h3>
                            <b>Razzi.</b>
                        </h3>
                    </div>
                    <div class="col-md-6">
                        <form action="{{route('searchproduct')}}" method="GET" role="search" id="form">
                            <input type="search" id="query" name="search"
                            placeholder="Search for items"
                            aria-label="Search through site content" style = "font-size: 14px; margin-left: 10px; font-weight: 500;">
                            <button  type="submit">
                            <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>  
                    <div class="col-md-3 text-end">
                        <div class="icon pt-2">
                            <a href="#">
                                <span class="razzi-svg-icon "><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                            </a>
                            <a href="#">
                                <span class="razzi-svg-icon "><svg aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></span>
                            </a>
                            <a href="#">
                                <span class="razzi-svg-icon icon-cart"><svg aria-hidden="true" role="img" focusable="false" width="19" height="19" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path d="M21.9353 20.0337L20.7493 8.51772C20.7003 8.0402 20.2981 7.67725 19.8181 7.67725H4.21338C3.73464 7.67725 3.33264 8.03898 3.28239 8.51523L2.06458 20.0368C1.96408 21.0424 2.29928 22.0529 2.98399 22.8097C3.66874 23.566 4.63999 24.0001 5.64897 24.0001H18.3827C19.387 24.0001 20.3492 23.5747 21.0214 22.8322C21.7031 22.081 22.0361 21.0623 21.9353 20.0337ZM19.6348 21.5748C19.3115 21.9312 18.8668 22.1275 18.3827 22.1275H5.6493C5.16836 22.1275 4.70303 21.9181 4.37252 21.553C4.042 21.1878 3.88005 20.7031 3.92749 20.2284L5.056 9.55014H18.9732L20.0724 20.2216C20.1223 20.7281 19.9666 21.2087 19.6348 21.5748Z" fill="currentColor"></path> <path d="M12.1717 0C9.21181 0 6.80365 2.40811 6.80365 5.36803V8.6138H8.67622V5.36803C8.67622 3.44053 10.2442 1.87256 12.1717 1.87256C14.0992 1.87256 15.6674 3.44053 15.6674 5.36803V8.6138H17.5397V5.36803C17.5397 2.40811 15.1316 0 12.1717 0Z" fill="currentColor"></path> </svg></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
   </div>
    @include('module-search')
    @include('module-13')
</body>