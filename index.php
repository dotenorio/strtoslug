<?php error_reporting(E_ALL); ini_set('display_errors', '1');?>
<!DOCTYPE html>
<html>
  <head>
  	<title>StrToSlug | dotenorio.com</title>
    <meta charset="utf-8">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>

		<div class="container">


			<div class="page-header">
				<h1>
					StrToSlug 
					<small>Um conversor de string para slug on-line</small>
				</h1>
			</div>

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

			<div class="span12">
				
				<form action="./" method="get" class="form-horizontal">
					
					<div class="control-group">
						<label class="control-label" for="string"><strong>String:</strong></label>
						<div class="controls">
							<input type="text" name="s" id="string" value="<?php echo $string; ?>" class="span7" />
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="slug"><strong>Slug:</strong></label>
						<div class="controls">
							<input type="text" id="slug" value="<?php echo $result; ?>" class="span7" />
						</div>
					</div>

					<div class="control-group">
						<div class="controls">
							<button type="submit" class="btn btn-success span4">
								<i class="icon-white icon-ok"></i>
								Enviar
							</button>
							<a href="./" class="btn btn-danger span2">
								<i class="icon-white icon-refresh"></i>
								Limpar
							</a>
						</div>
					</div>

				</form>

				<div class="clearfix"></div>
				<hr />

				<footer class="container">
		      <div class="pull-right">
		        <small class="muted">
		          desenvolvido por
		          <a rel="license" href="http://dotenorio.com" title="Fernando Migliorini Tenório">dotenorio.com</a>
		        </small>
		      </div>
		      <p class="muted">
		        <strong>Slug</strong> parte de um URL que identifica uma página usando palavras-chave legíveis. <small class="muted">(<a href="http://en.wikipedia.org/wiki/Clean_URL" title="Clean URL - Wikipedia, the free encyclopedia" target="_blank">Wikipédia</a>)</small>
		      </p>
		    </footer>

			</div>
		</div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>		
	</body>
</html>