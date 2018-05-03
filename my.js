$(document).ready(function(){
	//oculta as divs
	$('#nome').hide();
	$('#cpf').hide();
	$('#rg').hide();
	$('#titulo').hide();
	$('#data_nasc').hide();
	$('#desc').hide();
	$('#razao_social').hide();
	$('#fantasia').hide();
	$('#data_fund').hide();
	$('#cnpj').hide();
	$('#ie').hide();
	$('#email').hide();
	$('#site').hide();

	


	$('select').change(function(){
		// Aqui você tem o value selecionado assim que o usuário muda o option
		var id = jQuery(this).val();

		// decisão quem ocultar e quem mostrar
		if (id == 'pessoa_fisica') {
			$('#nome').show("slow");
			$('#cpf').show("slow");
			$('#rg').show("slow");
			$('#titulo').show("slow");
			$('#data_nasc').show("slow");
			$('#desc').show("slow");
			$('#razao_social').hide();
			$('#fantasia').hide();
			$('#data_fund').hide();
			$('#cnpj').hide();
			$('#ie').hide();
			$('#email').show("slow");
			$('#site').hide();
		} else {
			$('#nome').hide();
			$('#cpf').hide();
			$('#rg').hide();
			$('#titulo').hide();
			$('#data_nasc').hide();
			$('#desc').show("slow");
			$('#razao_social').show("slow");
			$('#fantasia').show("slow");
			$('#data_fund').show("slow");
			$('#cnpj').show("slow");
			$('#ie').show("slow");
			$('#site').show("slow");
			$('#email').show("slow");
		}

		//se senhuma das opcões validas for selecionada, oculta tudo
		if (id == 'selecione' ){
			$('#cpf').hide();
			$('#cnpj').hide();
			$('#razao_social').hide();
			$('#nome').hide();
		}
	});
});