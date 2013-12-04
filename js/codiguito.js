$(document).on("ready" , inicio);

function inicio()
{
	$("#mostrarSitios").on("click" , mostSitios);
	$("#mostrarServicios").on("click" , mostServicios);
	$("#mostrarConvocatorias").on("click" , mostConvocatorias);

}

function mostSitios()
{
	var cambioCSS =
	{
		display:"block"
	};
	
	$("#SitiosInteres").css(cambioCSS);
}

function mostServicios()
{
	var cambioCSS =
	{
		display:"block"
	};
	
	$("#listaServicios").css(cambioCSS);
}

function mostConvocatorias()
{
	var cambioCSS =
	{
		display:"block"
	};
	
	$("#convocatorias").css(cambioCSS);
}

