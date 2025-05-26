<?php 
// Leer los archivos con los cambios guardados
$titulo = file_exists('admin/titulo.txt') ? file_get_contents('admin/titulo.txt') : 'Bienvenidos a DevNode';
$descripcion = file_exists('admin/descripcion.txt') ? file_get_contents('admin/descripcion.txt') : 'Somos un grupo de desarrolladores apasionados por la tecnología y la innovación.';
?>
<?php include 'header.php'; ?>

<main>
  <section id="inicio" class="hero">
    <div class="container">
      <h1>Bienvenidos a DevNode</h1>
      <p>Somos un grupo de desarrolladores apasionados por la tecnología y la innovación.</p>
    </div>
  </section>

  <section id="nosotros" class="about">
    <div class="container">
      <h2>Sobre Nosotros</h2>
      <p>Nos especializamos en soluciones web limpias, accesibles y modernas.</p>
    </div>
  </section>

 <section id="equipo" class="team"> 
  <div class="container">
    <h2>Nuestro Equipo</h2>
    <div class="team-members">
      <div class="member">
        <img src="imagenes/veronica.jpg" alt="Verónica Álvarez">
        <h3>Verónica Álvarez</h3>
        <p>Project Manager</p>
      </div>
      <div class="member">
        <img src="imagenes/yanina.jpg" alt="Yanina Cabrera">
        <h3>Yanina Cabrera</h3>
        <p>Frontend Developer</p>
      </div>
      <div class="member">
        <img src="imagenes/valeria.jpg" alt="Valeria Figueredo">
        <h3>Valeria Figueredo</h3>
        <p>Frontend Developer</p>
      </div>
      <div class="member">
        <img src="imagenes/sebastian.jpg" alt="Sebastián Mora">
        <h3>Sebastián Mora</h3>
        <p>Backend Developer</p>
      </div>
      <div class="member">
        <img src="imagenes/gustavo.jpg" alt="Gustavo Ayala">
        <h3>Gustavo Ayala</h3>
        <p>Database Administrator</p>
      </div>
      <div class="member">
        <img src="imagenes/hugo.jpg" alt="Hugo Brandan">
        <h3>Hugo Brandan</h3>
        <p>Database Administrator</p>
      </div>
      <div class="member">
        <img src="imagenes/noelia.jpg" alt="Noelia Chávez">
        <h3>Noelia Chávez</h3>
        <p>Documentación</p>
      </div>
    </div>
  </div>
</section>

 <section id="idiomas" class="languages">
  <div class="container">
      <h2 style="text-align: center;">Idiomas</h2>
      <p style="text-align: center;">
         Español (nativo)<br>
         Inglés (avanzado)<br>
         Portugués (básico)
      </p>
    </div>
  </div>
</section>

  <section id="proyectos" class="projects">
    <div class="container">
      <h2>Proyectos</h2>
      <div class="project-list">
        <div class="project">
          <h3>Landing Page</h3>
          <p>Diseño de una landing rápida y responsiva.</p>
        </div>
        <div class="project">
          <h3>Gestor de Tareas</h3>
          <p>App web simple con PHP y MySQL.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="herramientas" class="tools">
    <div class="container">
      <h2>Herramientas y Tecnologías</h2>
      <div class="tools-logos">
        <i class="fab fa-html5 fa-3x"></i>
        <i class="fab fa-css3-alt fa-3x"></i>
        <i class="fab fa-js-square fa-3x"></i>
        <i class="fab fa-php fa-3x"></i>
        <i class="fas fa-database fa-3x"></i>
        <i class="fab fa-git-alt fa-3x"></i>
      </div>
    </div>
  </section>

  <section id="testimonios" class="testimonials">
    <div class="container">
      <h2>Testimonios</h2>
      <div class="testimonial">
        <p>"Excelente trabajo. Supieron captar mi idea al instante."</p>
        <h4>- Martín R.</h4>
      </div>
      <div class="testimonial">
        <p>"Rápidos, responsables y muy profesionales."</p>
        <h4>- Laura G.</h4>
      </div>
      <div class="testimonial">
        <p>"DevNode transformó por completo mi sitio web."</p>
        <h4>- Javier M.</h4>
      </div>
    </div>
  </section>

  <section id="contacto" class="contact">
    <div class="container">
      <h2>Contacto</h2>
      <form action="mailto:contacto@devnode.com" method="post" enctype="text/plain">
        <input type="text" name="nombre" placeholder="Tu nombre" required>
        <input type="email" name="email" placeholder="Tu correo" required>
        <textarea name="mensaje" placeholder="Tu mensaje..." required></textarea>
        <button type="submit">Enviar</button>
      </form>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>
