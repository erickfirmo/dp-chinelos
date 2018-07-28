@extends('site.layouts.site')
@section('title', 'DP Chinelos | Home')
@section('description', 'Loja Oficial')
@section('content')

@include('site.partials._modal_1')
@include('site.partials._modal_2')








       <!-- /banner_bottom_agile_info -->


       <!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		 <div class="container">
			 <h3>CARRINHO</h3>
			 <!--/w3_short-->
				  <div class="services-breadcrumb">
						 <div class="agile_inner_breadcrumb">
 
							 <ul class="w3_short">
								 <li><a href="#">HOME</a><i>|</i></li>
								 
								 <li>CARRINHO</li>
							 </ul>
						  </div>
				 </div>
		 <!--//w3_short-->
	 </div>
 </div>
 

  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>Produto</th>
						<th>Preço</th>
						<th>Tamanho</th>
						<th>Total</th>
						<th>Remover</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><img class="image-fluid" src="#"><br>Chinelo A</td>
						<td>R$ 20,00</td>
						<td><select name="" id="">
								<option value="#">1</option>
								<option value="#">2</option>
								<option value="#">3</option>
								<option value="#">4</option>
						
						</select></td>
						<td>R$ 200,00</td>
						<td><button class="btn btn-danger">X</button</td>
					</tr>
					<tr>
						<td><img class="image-fluid" src="#"><br>Chinelo B</td>
						<td>R$ 20,00</td>
						<td><input type="number" name="" min="1" id=""></td>
						<td>R$ 200,00</td>
						<td><button class="btn btn-danger">X</button></td>
					</tr>
				</tbody>
			</table>
		</div>

		<button href="" class="btn large-button">FECHAR COMPRA</button>
	     
							
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-4">

			</div>
			<div class="col-md-4">
				
			</div>
			<div class="col-md-4">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Total</th>
								<td>R$ 240,00</td>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
	
 </div>
<!--//single_page-->




<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>








@include('site.partials._footer')


@endsection