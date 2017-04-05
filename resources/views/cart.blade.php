@extends('layouts.app')
@section('content')


<div class="cart-banner">
		  <div class="container">
			<div class="row">
			  <div class="col-md-2">
				<img src="images/shoppingcart.png" alt="">
			  </div>
			  <div class="col-md-10">
				<h4 style="color:#fff">
				  <a href="index.php">HOME</a> <i class="fa fa-arrows-h"></i> CART
				</h4>
			  </div>
			</div>
		  </div>
		</div>


		 <div class="section-4" style="height: 100%;">
		<div class="container section4-bg">
			  <div class="col-md-12 text-center">
				<h2>SHOPPING CART</h2>
			  </div>



		 <div class="row">
			  <div style="width: 100%; padding: 0 30px;overflow: auto;">
				<div class="cart-empty">
					@if(!empty($cart))
					<table>
						<thead>
							<tr>
								<th>ITEM</th>
								<th>QUANTITY</th>
								<th>UNIT PRICE</th>
								<th>SUB TOTAL</th>
								<th>REMOVE</th>
							</tr>
						</thead>
						<tbody>
								@php $total = 0; @endphp
								@foreach($cart as $item)
									@php $foo    = isset($item['course_id']) ? 'course':'lesson';

								   if(isset($item['course_id'])){
										$bar[] = $item['course_id'];
									}
									@endphp
								<tr>
								<td>{{$item[$foo.'_name']}}</td>
								<td>
									<div class="addremove">
										<select class="ar">
											<option class="quantityTxt" value="1">1</option>
											<option class="quantityTxt" value="2">2</option>
											<option class="quantityTxt" value="3">3</option>
											<option class="quantityTxt" value="4">4</option>
											<option class="quantityTxt" value="5">5</option>
											<option class="quantityTxt" value="6">6</option>
											<option class="quantityTxt" value="7">7</option>
											<option class="quantityTxt" value="8">8</option>
											<option class="quantityTxt" value="9">9</option>
											<option class="quantityTxt" value="10">10</option>
										</select>
									</div>
								</td>
								<td>
									<sup><small>&#8358;</small></sup>
									<p data-price="{{number_format($item['price'])}}">{{number_format($item['price'])}}</p>
									<sup><small>.00</small></sup>
								</td>
								<td>
									<sup><small>&#8358;</small></sup>
									{{number_format($item['price'])}}
									<sup><small>.00</small></sup>
								</td>

								<td>
								<a href="{{asset('remove/'.$item[$foo.'_id'])}}">
											<div class="xclose">
												<i class="fa fa-times"></i>
										</div>
								</a>
								<input type="hidden" value="{{$item[$foo.'_id']}}" name="{{$foo}}[]" />
								</td>
							</tr>
									@php $total+= $item['price'] @endphp
								@endforeach

						</tbody>
					</table>

					<div class="cart-total">
						<div class="col-md-12">
							<div class="col-md-4">
								<div class="carttotal-box">
									<div class="ct-left">
										DISCOUNT
									</div>
									<div class="ct-right">
										&#8358; 0, 000:00
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="carttotal-box">
									<div class="ct-left">
										SUBTOTAL
									</div>
									<div class="ct-right">
										&#8358; 2, 000:00
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="carttotal-box">
									<div class="ct-left">
										TOTAL
									</div>
									<div class="ct-right">
										&#8358; {{number_format($total)}}:00
									</div>
								</div>
							</div>
						</div>
					</div>
					@else
						<div class="cart-body">
							<h4>Your Cart is Empty</h4>
						</div>
					@endif
				</div>
			</div>
		  </div>


		  <div class="row">
			<div class="col-md-12">

			  <div class="buy-btn">
				<a href="<?php $action = (!empty($cart))? : url('/');
                echo $action;
                ?>">
				  <div style="height: 40px;">
					<div class="buybtn-left">
						<?php $action = (!empty($cart))? 'CHECKOUT': 'CONTINUE SHOPPING';
						echo $action;
						?>
					</div>
					<div>

					</div>
					<div class="buybtn-right">
					  <img src="{{asset('images/checkout.png')}}" alt="">
					</div>
				  </div>
				</a>
			  </div>
			</div>
		  </div>
			<div class="col-md-12 text-center">
				<h2>The Resources Center</h2>
			</div>

			<div class="row">
				<div style="width: 100%; padding: 0 30px;">

					<div class="col-xs-12 col-sm-6 col-md-3">
						<a href="{{url('resource')}}">
							<div class="resource">
								<div class="res-banner">
									<img src="{{asset('images/center.png')}}" alt="">
								</div>
								<div class="res-top">
									<h3>Exam Center</h3>
								</div>
								<div class="res-btm">
									<img src="{{asset('images/right.png')}}" alt="">
								</div>
							</div>
						</a>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">
						<a href="{{url('resource')}}">
							<div class="resource">
								<div class="res-banner">
									<img src="{{asset('images/schedule.png')}}" alt="">
								</div>
								<div class="res-top">
									<h3>Fee & Schedule</h3>
								</div>
								<div class="res-btm">
									<img src="{{asset('images/right.png')}}" alt="">
								</div>
							</div>
						</a>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">
						<a href="{{url('resource')}}">
							<div class="resource">
								<div class="res-banner">
									<img src="{{asset('images/report.png')}}" alt="">
								</div>
								<div class="res-top">
									<h3>Examiners Report</h3>
								</div>
								<div class="res-btm">
									<img src="{{asset('images/right.png')}}" alt="">
								</div>
							</div>
						</a>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">
						<a href="{{url('resource')}}">
							<div class="resource">
								<div class="res-banner">
									<img src="{{asset('images/question.png')}}" alt="">
								</div>
								<div class="res-top">
									<h3>Past Question Papers</h3>
								</div>
								<div class="res-btm">
									<img src="{{asset('images/right.png')}}" alt="">
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>

		</div>
	  </div>
	<script>
        var updateTotal = function() {

            var sumtotal;
            var sum = 0;
            //Add each product price to total
            $(".product").each(function() {
                var price = $(this).data('price');
                var quantity = $('.quantityTxt', this).val();

                //Total for one product
                var subtotal = price*quantity;
                //Round to 2 decimal places.
                subtotal = subtotal.toFixed(2);
                //Display subtotal in HTML element
                $('.productTotal', this).html(subtotal);

            });
            // total
            $('.productTotal').each(function() {
                sum += Number($(this).html());
            });



            $('#sum').html(sum.toFixed(2));
        };

        //Update total when quantity changes
        $(".product .quantityTxt").keyup(function() {
            updateTotal();
        });

        //Update totals when page first loads
        updateTotal();

        // set this from local
        $('span.productTotal').each(function() {
            $(this).before("&euro;")
        });

        // unit price
        $('.product p').each(function() {
            var $price = $(this).parents("div").data('price');
            $(this).before($price);
        });

	</script>

@endsection