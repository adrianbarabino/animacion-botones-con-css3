animacion-botones-con-css3
==========================

			<h2>Como funciona?</h2>

			<p>	
				Funciona mediante el uso de animaciones CSS3, con las cuales se crean 9 barras utilizando las clases .barras y .barra9 (para la barra de cada número), estas barras mediante transform:rotate, las rotamos -160deg, eso hace que queden cruzadas.
			</p>
			<p>
				Para la animación al pasarle el mouse, se utiliza animation de CSS3, y mediante el archivo colores.php creamos con PHP los colores de la animación que se reproducirá al pasarle el mouse.
			</p>
			<p>
				Como último recurso, mediante -webkit-mask-image utilizamos la imagen vectorial circulo.svg como máscara para las barras, para que no se vea el excedente de ellas, y sea más atractivo visualmente. También se puede editar esta máscara mediante este <a href="http://svg-edit.googlecode.com/svn/branches/2.6/editor/svg-editor.html" target="_blank">editor de SVG Online</a> muy fácilmente. 
			</p>


			<h2>Limitaciones</h2>
			<p>
				Esta animación solo está disponible para utilizarse mediante navegadores con motor Webkit, osea, Google Chrome o Safari, en caso de otros navegadores, hay que utilizar como máscaras imágenes .png con transparencia, como <a href="mascara.png">esta imagen</a>.
				En ese caso el código hay que agregar la clase "png" a la etiqueta &lt;ul&gt;. Con esto ya tendría que funcionar, y para hacer cambios del espacio que se quiera mostrar de las barras, hay que editar el archivo mascara.png en un editor de imágenes con Adobe Fireworks o Adobe Photoshop, siempre guardando esta imagen en .png con transparencia.
			</p>
			<h2>Para que sirve esto?</h2>

			<p>Este ejemplo/código puede ser utilizado sin ningún problema, la idea es que sirva para aprender sobre lo que se puede hacer mediante CSS3, este ejemplo puede ser llevado a algo más funcional quizás.
			</p>
			<p>
				Espero que les sea útil para usarlo o simplemente para aprender del código de esto.
			</p>

			<h2>Como usarlo?</h2>

			<p>
				Para usar estos botones, debés descargar el repositorio via github, o clonarlo mediante git clone.
				Y necesitás agregar en el head de tu sitio los link href para los archivos colores.php y botones-con-animacion.css.
			</p>
			<p>
				Tras finalizar esto, debés agregar el código que se encuentra arriba en la pestaña "código", en el cuerpo de tu sitio web. 
			</p>

			<h2>Sobre esto</h2>
			<p>La animación de colores al azar, osea, lo del archivo colores.php fue sacado del artículo <a href="http://miekd.com/articles/random-color-css3-animation/" target="_blank">Random Color CSS3 Animation</a> del blog de <a href="http://www.maykelloomans.com/" target="_blank">Maykel Loomans</a>.
			</p>
			<p>Mientras que el resto fue realizado por <a href="http://www.adrianbarabino.com.ar">Adrian Barabino</a></p>
