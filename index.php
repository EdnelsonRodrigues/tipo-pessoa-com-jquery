<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Exibir e ocultar DIV com JQUERY</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="my.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>

	<!-- <p>
		<a href="" id="exibir">Mostrar DIV</a>
		<a href="" id="ocultar">Ocultar DIV</a>
	</p>

	<div id="home" style="background: red; padding: 10px; margin: 0; width: 450px; height: 400px">
		<h3>Conteudo da Home</h3>
	</div>

	<h1>Conteúdo estático da página</h1> -->

	<div id="tipo_processo" class="container">
    <form>
      <div class="row">

      	<div class="form-group col-md-2">
          <label class="col-sm-0 col-form-label col-form-label-sm">Tipo/Pessoa</label>
          	<select class="custom-select form-control form-control-sm">
		   	<option value="selecione" selected>selecione</option>
				 <option value="pessoa_fisica">Fisica</option>
				 <option value="pessoa_juridica">Juridica</option>
		   </select>
        </div>

        <div id="nome" class="form-group col-sm-7">
          <label class="col-sm-0 col-form-label col-form-label-sm">Nome</label>
          <input type="text" class="form-control form-control-sm">
        </div>

	    <div id="razao_social" class="form-group col-md-5">
          <label class="col-sm-0 col-form-label col-form-label-sm">Razão Social</label>
          <input type="text" class="form-control form-control-sm">
        </div>

	    <div id="cpf" class="form-group col-md-3">
	        <label class="col-sm-0 col-form-label col-form-label-sm">CPF</label>
	        <input type="text" class="form-control form-control-sm">
	    </div>

        <div id="fantasia" class="form-group col-md-5">
          <label class="col-sm-0 col-form-label col-form-label-sm">Nome Fantasia</label>
          <input type="text" class="form-control form-control-sm">
        </div>

        <div id="rg" class="form-group col-md-2">
          <label class="col-sm-0 col-form-label col-form-label-sm">Registro Geral(RG)</label>
          <input type="text" class="form-control form-control-sm">
        </div>

        <div id="titulo" class="form-group col-md-2">
          <label class="col-sm-0 col-form-label col-form-label-sm">Titulo Eleitoral</label>
          <input type="text" class="form-control form-control-sm">
        </div>

        <div id="cnpj" class="form-group col-md-3">
          <label class="col-sm-0 col-form-label col-form-label-sm">CNPJ</label>
          <input type="text" class="form-control form-control-sm">
        </div>

        <div id="data_nasc" class="form-group col-md-2">
          <label class="col-sm-0 col-form-label col-form-label-sm">Data de Nascimento</label>
          <input type="date" class="form-control form-control-sm">
        </div>

        <div id="ie" class="form-group col-md-3">
          <label class="col-sm-0 col-form-label col-form-label-sm">Inscrição Estadual(IE)</label>
          <input type="text" class="form-control form-control-sm">
        </div>

        <div id="email" class="form-group col-md-6">
          <label class="col-sm-0 col-form-label col-form-label-sm">E-mail</label>
          <input type="email" class="form-control form-control-sm">
        </div>

        <div id="site" class="form-group col-md-10">
          <label class="col-sm-0 col-form-label col-form-label-sm">WebSite</label>
          <input type="text" class="form-control form-control-sm">
        </div>

        <div id="data_fund" class="form-group col-md-2">
          <label class="col-sm-0 col-form-label col-form-label-sm">Data de Fundação</label>
          <input type="date" class="form-control form-control-sm">
        </div>

        <div id="desc" class="form-group col-md-12">
          <label class="col-sm-0 col-form-label col-form-label-sm">Descrição</label>
          <textarea class="form-control form-control-sm" rows="3" cols="5"></textarea>
        </div>
      </div>
    </form>
  </div>

</body>
</html>