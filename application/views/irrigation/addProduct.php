

  <h2>Adicionar Produto</h2>
   <?php 
    if ($formerror) {
      echo "<p>".$formerror."</p>";
    }
  ?>
  <form class="form-horizontal" action="create-irrigation-product" method="POST" enctype="multipart/form-data" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="name_product">Nome:</label>
      <div class="col-sm-10">
        <input type="text" style="width:50%;" class="form-control" name="name_product" placeholder="Digite o nome do produto">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="width">Largura:</label>
      <div class="col-sm-10">
        <input type="number" style="width:100px;" class="form-control" name="width" placeholder="999.00">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="height">Altura:</label>
      <div class="col-sm-10">
        <input type="number" style="width:100px;" class="form-control" name="height">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="circunference">Circunferência:</label>
      <div class="col-sm-10">
        <input type="number" style="width:100px;" class="form-control" name="circunference">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="radius">Radio:</label>
      <div class="col-sm-10">
        <input type="number" style="width:100px;" class="form-control" name="radius">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="screw">Tamanho da Rosca:</label>
      <div class="col-sm-10">
        <input type="number" style="width:100px;" class="form-control" name="screw">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="flow">Largura:</label>
      <div class="col-sm-10">
        <input type="number" style="width:100px;" class="form-control" name="flow">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="aspersor">Aspersor:</label>
      <div class="col-sm-10">
        <input type="text" style="width:50%;" class="form-control" name="aspersor">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="flow" >Foto:</label>
      <input type="file" style="width:50%;" class="form-control"  name="foto">
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Salvar</button>
      </div>
    </div>
  </form>


