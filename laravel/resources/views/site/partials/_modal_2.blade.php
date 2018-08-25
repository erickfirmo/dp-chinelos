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
						<h3 class="agileinfo_sign">Criar Conta</h3>
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
							<input type="submit" value="Cadastrar">
						</form>
						  
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->