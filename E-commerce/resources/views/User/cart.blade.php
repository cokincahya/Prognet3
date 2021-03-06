@extends('layout.cartlayout')
@section('content')

<div class="body-content outer-top-xs">
	<div class="container">
		<div class="row inner-bottom-sm">
			<div class="shopping-cart">
				<div class="col-md-12 col-sm-12 shopping-cart-table ">
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="cart-romove item">Remove</th>
					<th class="cart-description item">Image</th>
					<th class="cart-product-name item">Product Name</th>
					<th class="cart-qty item">Quantity</th>
					<th class="cart-sub-total item">Subtotal</th>
					<th class="cart-total last-item">Grandtotal</th>
				</tr>
			</thead><!-- /thead -->
			<tbody>
				<tr>
					<td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
					<td class="cart-image">
						<a class="entry-thumbnail" href="indexbd17.html?page=detail">
						    <img src="{{ url('User/images/products/shopping_cart_01.jpg')}}" alt="">
						</a>
					</td>
					<td class="cart-product-name-info">
						<h4 class='cart-product-description'><a href="indexbd17.html?page=detail">Simple Products Demo</a></h4>
						<div class="row">
							<div class="col-sm-4">
								<div class="rating rateit-small"></div>
							</div>
							<div class="col-sm-8">
								<div class="reviews">
									(06 Reviews)
								</div>
							</div>
						</div><!-- /.row -->
						<div class="cart-product-info">
							<span class="product-imel">IMEL:<span>084628312</span></span><br>
							<span class="product-color">COLOR:<span>White</span></span>
						</div>
					</td>
					<td class="cart-product-quantity">
						<div class="quant-input">
				                <div class="arrows">
				                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
				                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
				                </div>
				                <input type="text" value="1">
			              </div>
		            </td>
					<td class="cart-product-sub-total"><span class="cart-sub-total-price">$539.88</span></td>
					<td class="cart-product-grand-total"><span class="cart-grand-total-price">$539.88</span></td>
				</tr>
				<tr>
					<td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
					<td class="cart-image">
						<a class="entry-thumbnail" href="indexbd17.html?page=detail">
						    <img src="{{ url('User/images/products/shopping_cart_02.jpg')}}" alt="">
						</a>
					</td>
					<td class="cart-product-name-info">
						<h4 class='cart-product-description'><a href="indexbd17.html?page=detail">Simple Products Demo</a></h4>
						<div class="row">
							<div class="col-sm-4">
								<div class="rating rateit-small"></div>
							</div>
							<div class="col-sm-8">
								<div class="reviews">
									(06 Reviews)
								</div>
							</div>
						</div><!-- /.row -->
						<div class="cart-product-info">
							<span class="product-imel">IMEL:<span>084628312</span></span><br>
							<span class="product-color">COLOR:<span>White</span></span>
						</div>
					</td>
					<td class="cart-product-quantity">
						<div class="cart-quantity">
							<div class="quant-input">
				                <div class="arrows">
				                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
				                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
				                </div>
				                <input type="text" value="1">
			              </div>
			            </div>
		            </td>
					<td class="cart-product-sub-total"><span class="cart-sub-total-price">$539.88</span></td>
					<td class="cart-product-grand-total"><span class="cart-grand-total-price">$539.88</span></td>
				</tr>
			</tbody><!-- /tbody -->
		</table><!-- /table -->
	</div>
</div><!-- /.shopping-cart-table -->				

<div class="col-md-12 col-sm-12 cart-shopping-total">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>
					<div class="cart-sub-total">
						Subtotal<span class="inner-left-md">$600.00</span>
					</div>
					<div class="cart-grand-total">
						Grand Total<span class="inner-left-md">$600.00</span>
					</div>
				</th>
			</tr>
		</thead><!-- /thead -->
		<tbody>
				<tr>
					<td>
						<div class="cart-checkout-btn pull-right">
							<button type="submit" class="btn btn-primary">PROCCED TO CHEKOUT</button>
						</div>
					</td>
				</tr>
		</tbody><!-- /tbody -->
	</table><!-- /table -->
</div><!-- /.cart-shopping-total -->			</div><!-- /.shopping-cart -->
		</div> <!-- /.row -->
		</div><!-- /.container -->
</div><!-- /.body-content -->
@endsection