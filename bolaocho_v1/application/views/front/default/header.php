
	<body>
	   <span class="ir-arriba icon-eject "></span>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?= base_url()?>" style='text-decoration:none;color:white;'>
							<img width="120" height="40" src="<?= base_url("img/logo3.png")?>" class="img-responsive center-block" alt="Anamar Beauty Lounge">
						</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="menu_extra_padding"><a href="<?= site_url("nosotras")?>" style='text-decoration:none;color:white;'>Nosotras</a>
							</li>
							<li class="dropdown menu_extra_padding">
								<a class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style='text-decoration:none;color:white;'>Servicios <span class="caret"></span></a>
								<?=$navbar?>
							</li>

							<li class="menu_extra_padding"><a href="<?= site_url("contacto")?>" style='text-decoration:none;color:white;'>Contacto</a>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li>
								<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fanamarmty%2F%3Ffref%3Dts&width=165&layout=button_count&action=like&show_faces=true&share=true&height=46&appId" height="30" width="200" style="border:none;overflow:hidden;margin-top: 25px;" class="center-block"></iframe>
							</li>
						</ul>
					</div>
					<!--/.nav-collapse -->
				</div>
			</nav>
		</header>
