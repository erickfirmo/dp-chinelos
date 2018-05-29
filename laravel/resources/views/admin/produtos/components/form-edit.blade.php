
   
   <div class="box box-danger">
      <div class="row">
         <div class="col-md-6">
            <div class="form-group">
               <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
               <label>Nome do Produto</label>
               <input value="{{ $produto->nome }}" name="nome" type="text" class="form-control" style="width: 100%;">
            </div>
            <div class="form-group">
               <label>Categoria</label>
               <select class="form-control select2" style="width: 100%;">
                  <option disabled selected value> -- </option>
                  <option>Times</option>
                  <option>Casamento</option>
                  <option>Formatura</option>
               </select>
            </div>
         </div>

         <div class="col-md-6">
            <div class="form-group">
               <label>Quantidade</label>
               <input value="{{ $produto->unidades }}" name="quantidade" type="number" min="0" class="form-control" style="width: 100%;">
            </div>
            <div class="form-group">
               <label>Preço</label>
               <input value="{{ $produto->nome }}" onkeypress="return(MascaraMoeda(this, '.', ',', event))" name="preco" type="text" class="form-control mask-real" style="width: 100%;">
            </div>
         </div>
         
         <div class="col-md-12">
            <div class="form-group">
               <label>Descrição</label>
               <textarea  value="{{ $produto->descricao }}" name="descricao" class="form-control" style="width:100%;"></textarea>
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-md-12">
         
         <button type="submit" class="btn btn-success r-button">Adicionar Produto</button>
         
            <a href="{{ url('admin/produtos/') }}">
               <button type="button" class="btn btn-danger r-button">Cancelar</button>
            </a>
         </div>
      </div>
   </div>

   
   

