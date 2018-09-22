<?php require_once ("cabecalhoInicial.php");
require_once ("banco-usuario.php");?>

<main>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center teal-text text-darken-3" style="font-family: Monotype Corsiva">Cadastro de Aluno</h1>
      <br><br>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <form class="col s12" action="adiciona-aluno.php" method="post">
        <div class="row">
          <div class="input-field col s6">
            <select required="" name="tipoUsuario">
              <option value="Aluno" selected>Aluno</option>
              <option value="Professor">Professor</option>
            </select>
            <label class="black-text">Tipo de Usuário</label>
          </div>
          <div class="input-field col s6">
            <select required="" name="sexo">
              <option value="Feminino">Feminino</option>
              <option value="Masculino" selected>Masculino</option>
            </select>
            <label class="black-text">Sexo</label>
          </div>
          <div class="input-field col s6">
            <input id="nome" required="" type="text" class="validate" name="nome">
            <label for="nome" class="black-text">Nome Completo</label>
          </div>
          <div class="input-field col s6">
            <select required="" name="curso">
              <option value="Informática" selected>Informática</option>
              <option value="Agropecuária">Agropecuária</option>
            </select>
            <label class="black-text">Curso</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input type="number" required="" min="1" max="7" name="semestre" id="semestre"/>
            <label class="black-text">Semestre</label>
          </div>
          <div class="input-field col s6">
            <select required="" name="campus">
              <option value="Nova Andradina" selected>Nova Andradina</option>
              <option value="Jardim">Jardim</option>
              <option value="Naviraí">Naviraí</option>
              <option value="Dourados">Dourados</option>
            </select>
            <label class="black-text">Campus</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" required="" type="email" name="email" class="validate">
            <label for="email" class="black-text">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="senha" required="" name="senha" type="password" class="validate">
            <label for="senha" class="black-text">Senha</label>
          </div>
        </div>
        <button class="btn waves-effect waves-light red" value="cadastrar" type="submit" name="action">Cadastrar
          <i class="material-icons right">send</i>
        </button>
      </form>
    </div>
  </div>
  <div class="fixed-action-btn horizontal click-to-toggle">
    <a class="btn-floating btn-large red">
      <i class="material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating red" href="index.html"><i class="material-icons">mode_edit</i></a></li>
      <li><a class="btn-floating yellow darken-1" href="cadastroAluno/cadastroAluno.html"><i class="material-icons">view_headline</i></a></li>
      <li><a class="btn-floating green" href="loginDeUsuario/paginaLogin.html"><i class="material-icons">shop</i></a></li>
      <li><a class="btn-floating blue" href="cadastroProfessor/cadastroProfessor.html"><i class="material-icons">supervisor_account</i></a></li>
    </ul>
  </div>
</main>

<?php include 'rodapeInicial.php';?>