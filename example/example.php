<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		
		<title>Exemplo de Utilização do Framework Responsive</title>
		
		<link rel="stylesheet" href="css/foundation.min.css" />
		<link rel="stylesheet" href="css/responsive.css" />
		
		<script src="javascript/jquery-latest.js"></script>
		<script src="javascript/foundation.min.js"></script>
	</head>
	<body>

<?php

include("../autoload.php");

$Image = new Image("http://placehold.it/980x200");

$Menu = new Menu();
$Menu->addItem(new Link("Item 1", "#item-1"));
$Menu->addItem(new Link("Item 2", "#item-2"));
$Menu->addItem(new Link("Item 3", "#item-3"));

$Form = new Form("example.php", "post");
$Form->add("<h1>Contato</h1>");

$Form->add(new Label("NOME", "Nome"));
$Form->add(new InputText("NOME", "Matheus Lisboa de Barros"));

$Form->add(new Label("ESTADO_CIVIL", "Estado civil"));
$Form->add(new Select("ESTADO_CIVIL", 2
			, array(
				  new Option(1, "Solteiro")
				, new Option(2, "Casado")
				, new Option(3, "Separado")
				, new Option(4, "Divorciado")
				, new Option(5, "Viúvo")
			)));

$Form->add(new Label("SEXO", "Sexo"));
$Form->add(new InputRadio("SEXO", "M", true) . " Masculino ");
$Form->add(new InputRadio("SEXO", "F", false) . " Feminino ");

$Form->add(new Label("CORES", "Cores preferidas"));
$Form->add(new InputCheckbox("CORES", "Azul", true) . " Azul ");
$Form->add(new InputCheckbox("CORES", "Amarelo", false) . " Amarelo ");
$Form->add(new InputCheckbox("CORES", "Branco", false) . " Branco ");
$Form->add(new InputCheckbox("CORES", "Cinza", true) . " Cinza ");
$Form->add(new InputCheckbox("CORES", "Preto", false) . " Preto ");
$Form->add(new InputCheckbox("CORES", "Vermelho", false) . " Vermelho ");

$Form->add(new Label("SENHA", "Senha"));
$Form->add(new InputPassword("SENHA", "commbox201125"));

$Form->add(new Label("DESCRICAO", "Descrição"));
$Form->add(new Textarea("DESCRICAO", "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."));

$Form->add("<br />");
$Form->add(new Button("Salvar", "salvar-usuario"));

$Form->addStyle("padding", "20px");
$Form->addStyle("border", "1px solid #ddd");
$Form->addStyle("background-color", "#EFF5F7");

$Grid = new Grid();
$Grid->addRow(
	array(
		new Column(12, $Image . "<hr />")
	)
);
$Grid->addRow(
	array(
		  new Column(4, $Menu)
		, new Column(8, $Form)
	)
);

echo $Grid->getHtml();

?>
		
	</body>
</html>