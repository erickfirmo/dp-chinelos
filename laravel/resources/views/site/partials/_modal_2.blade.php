<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Cadastre-se <span>Agora</span></h3>
						 <form action="{{ route('register') }}" method="post">
						 	{{ csrf_field() }}
							<div class="styled-input">
								<input type="text"  name="name" value="{{ old('name') }}" required autofocus>
								<label>Nome</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text"  name="lastname" value="{{ old('lastname') }}" required>
								<label>Sobrenome</label>
								<span></span>
							</div>
							<div class="styled-input-date">
								<label>Nascimento</label><br>
								<input type="date" name="nascimento" value="{{ old('nascimento') }}" required>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text"  name="telefone" value="{{ old('telefone') }}" required>
								<label>Telefone</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text"  name="celular" value="{{ old('celular') }}" required>
								<label>Celular</label>
								<span></span>
							</div>
							<div class="styled-input">
							<input type="email" name="email" value="{{ old('email') }}" required>
								<label>Email</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="password" required>
								<label>Senha</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="password_confirmation" required>
								<label>Confirmar Senha</label>
								<span></span>
							</div> 
							<input type="submit" value="Cadastrar - se">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">Ao clicar em registrar, concordo com os termos e condições</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->