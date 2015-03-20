StrToSlug
=========

Um conversor de string para slug em PHP + Boostrap Twitter

Exemplo
-------

```php
<?php
	require_once('strtoslug.php');

	$string = "Uma frase com muitos espaços!";

	$slug = new strtoslug($string);
	$result = $slug->getResult();
	
	// uma-frase-com-muitos-espacos
?>
```

On-line
-------

http://projetos.dotenorio.com/strtoslug/
