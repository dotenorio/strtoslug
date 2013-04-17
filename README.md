StrToSlug
=========

Um conversor de *string* para *slug* em _PHP_ + _Boostrap Twitter_

Exemplo
-------

```php
<?php
	require_once('strtoslug.php');

	if ( isset($_GET['s']) ) {
		$string = $_GET['s'];
	} else {
		$string = "Digite uma frase!";
	}

	$slug = new strtoslug($string);
	$result = $slug->getResult();
?>
```