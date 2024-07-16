@extends('client.layouts.app')

@section('content')
<div class="breadcrumb-area ml-110">
<div class="container-fluid p-0">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb-bg d-flex justify-content-center align-items-center">
<div class="breadcrumb-shape1 position-absolute top-0 end-0">
<img src="assets/images/shapes/bs-right.png" alt>
</div>
<div class="breadcrumb-shape2 position-absolute bottom-0 start-0">
<img src="assets/images/shapes/bs-left.png" alt>
</div>
<div class="breadcrumb-content text-center">
<h2 class="page-title">Cart</h2>
<ul class="page-switcher d-flex ">
<li><a href="index.html">Home</a> <i class="flaticon-arrow-pointing-to-right"></i></li>
<li>Cart</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="cart-area mt-100 ml-110">
<div class="container">
<div class="row justify-content-center">
<div class="col-xxl-12 col-xl-12 col-md-12 col-sm-8">
<table class="table cart-table">
<thead>
<tr>
<th scope="col">Image</th>
<th scope="col">Product Title</th>
<th scope="col">Unite Price</th>
<th scope="col">Discount Price</th>
<th scope="col">Quantity</th>
<th scope="col">Subtotal</th>
<th scope="col">Delete</th>
</tr>
</thead>
<tbody>
<tr>
<td class="image-col">
<img src="assets/images/product/cart-p4.png" alt>
</td>
<td class="product-col"><a href="product-details.html" class="product-title">Something Yellow Party Dress</a></td>
<td class="unite-col"><del><span class="unite-price-del">$32.36</span></del> <span class="unite-price"></span></td>
<td class="discount-col"><span class="discount-price">$22.36</span></td>
<td class="quantity-col">
<div class="quantity">
<input type="number" min="1" max="90" step="10" value="1">
</div>
</td>
<td class="total-col">$22.36</td>
<td class="delete-col">
<div class="delete-icon">
<a href="#"><i class="flaticon-letter-x"></i></a>
</div>
</td>
</tr>
<tr>
<td class="image-col">
<img src="assets/images/product/cart-p6.png" alt>
</td>
<td class="product-col"><a href="product-details.html" class="product-title">Woamn Something Navy Jens</a></td>
<td class="unite-col"><del><span class="unite-price-del">$32.36</span></del> <span class="unite-price"></span></td>
<td class="discount-col"><span class="discount-price">$22.36</span></td>
<td class="quantity-col">
<div class="quantity">
<input type="number" min="1" max="90" step="10" value="1">
</div>
</td>
<td class="total-col">$22.36</td>
<td class="delete-col">
<div class="delete-icon">
<a href="#"><i class="flaticon-letter-x"></i></a>
</div>
</td>
</tr>
<tr>
<td class="image-col">
<img src="assets/images/product/cart-p5.png" alt>
</td>
<td class="product-col"><a href="product-details.html" class="product-title">Men Casual Summer Sale</a></td>
<td class="unite-col"><del><span class="unite-price-del"></span></del> <span class="unite-price">$32.36</span></td>
<td class="discount-col"><span class="discount-price">$22.36</span></td>
<td class="quantity-col">
<div class="quantity">
<input type="number" min="1" max="90" step="10" value="1">
</div>
</td>
<td class="total-col">$22.36</td>
<td class="delete-col">
<div class="delete-icon">
<a href="#"><i class="flaticon-letter-x"></i></a>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="row mt-60">
<div class="col-xxl-4 col-lg-4">
<div class="cart-coupon-input">
<h5 class="coupon-title">Coupon Code</h5>
<form class="coupon-input d-flex align-items-center">
<input type="text" placeholder="Coupon Code">
<button type="submit">Apply Code</button>
</form>
</div>
</div>
<div class="col-xxl-8 col-lg-8">
<table class="table total-table">
<tbody>
<tr>
<td class="tt-left">Cart Totals</td>
<td></td>
<td class="tt-right">$128.70</td>
</tr>
<tr>
<td class="tt-left">Shipping</td>
<td>
<ul class="cart-cost-list">
<li>Shipping Fee</li>
<li>Total ( tax excl.)</li>
<li>Total ( tax incl.)</li>
<li>Taxes</li>
<li>Shipping Enter your address to view shipping options. <a href="#">Calculate shipping</a>
</li>
</ul>
</td>
<td class="tt-right cost-info-td">
<ul class="cart-cost">
<li>Free</li>
<li>$15</li>
<li>$15</li>
<li>$5</li>
<li></li>
</ul>
</td>
</tr>
<tr>
<td class="tt-left">Subtotal</td>
<td>
</td>
<td class="tt-right">$162.70</td>
</tr>
</tbody>
</table>
<div class="cart-proceed-btns">
<a href="checkout" class="cart-proceed">Proceed to Checkout</a>
<a href="product" class="continue-shop">Continue to shopping</a>
</div>
</div>
</div>
</div>
</div>


<div class="newslatter-area ml-110 mt-100">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="newslatter-wrap text-center">
<h5>Connect To EG</h5>
<h2 class="newslatter-title">Join Our Newsletter</h2>
<p>Hey you, sign up it only, Get this limited-edition T-shirt Free!</p>
<form action="#" method="POST">
<div class="newslatter-form">
<input type="text" placeholder="Type Your Email">
<button type="submit">Send <i class="bi bi-envelope-fill"></i></button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection