</div>
</main>
<footer class="page-footer blue-grey darken-2" style="margin-top: 0;">
  <div class="container">
   <div class="row">
    <div class="col l6 s12">
     <h5 class="white-text">IFMS Campus Nova Andradina</h5>
     <p class="white-text">Sistema Web para auxiliar os estudantes do IFMS na produção de textos do tipo argumentativo.</p>
   </div>
   <div class="col l4 offset-l2 s12">
     <h5 class="white-text">Mapa do Site</h5>
     <ul>
      <li><a class="white-text" href="home.php">Página Home</a></li>
      <li><a class="white-text" href="paginaAluno.php">Página do Aluno</a></li>
      <li><a class="white-text" href="../index.php">Página Inicial</a></li>
    </ul>
  </div>
</div>
</div>
<div class="footer-copyright blue-grey darken-4 white-text">
 <div class="container">
  © 2017 Informática 7
</div>
</div>
</footer>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script src="../js/init.js"></script>
<script type="text/javascript">
  function envia(pag){ 
    document.formul.action= pag 
    document.formul.submit()
  } 
</script>
<script type="text/javascript">
  $(document).ready(function(){
   $('.slider').slider();
 });
</script>
</body>
</html>