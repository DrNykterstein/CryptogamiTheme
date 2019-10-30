<?php
	include 'templates/header.php';
?>
	<header class="site-header">
		<div class="contenedor">
			<div class="barra">
				<a href="#"><img class="centrar-imagen imagen-mediana" src="img/banner_grande.png" alt=""></a>
				<h1>De la consola a la calle</h1>
			</div><!--Barra -->
			<div class="alinear-derecha">
				<a href="#" class="botones verde">Ver Blog</a>
			</div>
		</div><!-- Contenedor -->
	</header>
	<!-- Contenido principal -->
	<div class="contenido-principal contenedor"><!--Le aplicare Flexbox -->
		<main class="blog">
			<article class="entrada-blog mt-30">
				<div class="imagen">
					<img src="img/blog1.jpg">
				</div><!--imagen -->
				<!-- contenido de los articulos -->
				<div class="contenido-blog">
					<h3>Metasploit: El arte del Pentesting</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, quibusdam cupiditate sequi saepe, placeat tempore voluptatibus accusantium quos laboriosam architecto repellendus aspernatur inventore, numquam animi quo perspiciatis velit adipisci voluptas.

					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, dolorem, autem. Minus facere labore veniam quo, magni, vero maiores officia laborum explicabo, fuga nesciunt rerum commodi necessitatibus! Quisquam, consequatur, quae.
					
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur deleniti, nihil, porro architecto itaque ex, ut praesentium asperiores, et veniam blanditiis cumque amet quisquam fuga voluptatibus perspiciatis repellat magnam sed!
					</p>
					<a href="entrada.html" class="btn btn-primary">Leer Entrada</a>
				</div><!--Contenido blog -->
			</article>
			
			<article class="entrada-blog mt-30">
				<div class="imagen">
					<img src="img/blog1.jpg">
				</div><!--imagen -->
				<!-- contenido de los articulos -->
				<div class="contenido-blog">
					<h3>Dame un PowerShell y PowerSploit</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, quibusdam cupiditate sequi saepe, placeat tempore voluptatibus accusantium quos laboriosam architecto repellendus aspernatur inventore, numquam animi quo perspiciatis velit adipisci voluptas.

					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, dolorem, autem. Minus facere labore veniam quo, magni, vero maiores officia laborum explicabo, fuga nesciunt rerum commodi necessitatibus! Quisquam, consequatur, quae.
					
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur deleniti, nihil, porro architecto itaque ex, ut praesentium asperiores, et veniam blanditiis cumque amet quisquam fuga voluptatibus perspiciatis repellat magnam sed!
					</p>
					<a href="entrada.html" class="btn btn-primary">Leer Entrada</a>
				</div><!--Contenido blog -->
			</article>

			<article class="entrada-blog mt-30">
				<div class="imagen">
					<img src="img/blog1.jpg">
				</div><!--imagen -->
				<!-- contenido de los articulos -->
				<div class="contenido-blog">
					<h3>Ingenieria Social</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, quibusdam cupiditate sequi saepe, placeat tempore voluptatibus accusantium quos laboriosam architecto repellendus aspernatur inventore, numquam animi quo perspiciatis velit adipisci voluptas.

					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, dolorem, autem. Minus facere labore veniam quo, magni, vero maiores officia laborum explicabo, fuga nesciunt rerum commodi necessitatibus! Quisquam, consequatur, quae.
					
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur deleniti, nihil, porro architecto itaque ex, ut praesentium asperiores, et veniam blanditiis cumque amet quisquam fuga voluptatibus perspiciatis repellat magnam sed!
					</p>
					<a href="entrada.html" class="btn btn-primary">Leer Entrada</a>
				</div><!--Contenido blog -->
			</article>
		</main><!-- Blog -->

		<aside class="categoria fondo-gris mt-30">
			<h4 class="centrar color-blanco">Entradas destacadas</h4>
			<article class="pt-20 entrada-blog-destacada mt-10">
				<div class="imagen">
					<img src="img/blog1.jpg">
				</div><!--imagen -->
				<!-- contenido de los articulos -->
				<div class="contenido-blog-destacado color-blanco">
					<h4>Hacking con python</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, quibusdam cupiditate sequi saepe
					</p>
					<a href="entrada.html" class="btn btn-primary">Leer Entrada</a>
				</div><!--Contenido blog destacada-->
			</article>

			<article class="pt-20 entrada-blog-destacada mt-10">
				<div class="imagen">
					<img src="img/blog1.jpg">
				</div><!--imagen -->
				<!-- contenido de los articulos -->
				<div class="contenido-blog-destacado color-blanco">
					<h4>Hacking con Ruby</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, quibusdam cupiditate sequi saepe
					</p>
					<a href="entrada.html" class="btn btn-primary">Leer Entrada</a>
				</div><!--Contenido blog destacada-->
			</article>
			
		</aside>
		
	</div><!--contenido principal -->
	<!-- Footer -->
<?php
	include 'templates/footer.php';		
?>