<form action="{{ route('admin.produtos.store') }}" method="post">

   <div class="row">
      <div class="col-md-6">
         <div class="form-group">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <label>Nome do Produto</label>
            <input name="nome" type="text" class="form-control maskRg" style="width: 100%;">
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
            <input name="quantidade" type="number" min="0" value="0" class="form-control" style="width: 100%;">
         </div>
         <div class="form-group">
            <label>Preço</label>
            <input  name="preco" type="text" class="form-control mask-real" data-thousands="." data-decimal="," data-prefix="R$ " style="width: 100%;">
         </div>
      </div>
      
      <div class="col-md-12">
         <div class="form-group">
            <label>Descrição</label>
            <textarea name="descricao" class="form-control" style="width:100%;"></textarea>
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-2">
      </div>
      <div class="col-md-2">
      </div>
      <div class="col-md-2">
      </div>
      <div class="col-md-4">
      
         
      <button type="submit" class="btn btn-success button-table">Adicionar Produto</button>
      </form>
         
         <a href="{{ url('admin/produtos/') }}">
            <button type="button" class="btn btn-danger button-table">Cancelar</button>
         </a>

         
      </div>
   </div>
