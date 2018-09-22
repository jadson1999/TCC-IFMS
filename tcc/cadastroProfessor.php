<?php require_once ("cabecalhoInicial.php");
require_once ("banco-usuario.php");?>

<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <br><br>
    <h1 class="header center teal-text text-darken-3" style="font-family: Monotype Corsiva">Cadastro de Professor</h1>
    <br><br>
  </div>
</div>

<div class="container">
  <div class="row">
  <form class="col s12" action="adiciona-professor.php" method="post">
      <div class="row">
        <div class="input-field col s12">
          <input id="nome" type="text" class="validate" name="nome">
          <label for="nome" class="black-text">Nome Completo</label>
        </div>
        <div class="input-field col s6">
            <select name="tipoUsuario">
              <option value="Aluno" selected>Aluno</option>
              <option value="Professor">Professor</option>
            </select>
            <label class="black-text">Tipo de Usuário</label>
          </div>
          <div class="input-field col s6">
            <select name="sexo">
              <option value="Feminino" selected>Feminino</option>
              <option value="Masculino">Masculino</option>
            </select>
            <label class="black-text">Sexo</label>
          </div>
        <div class="input-field col s6">
          <input id="siape" type="text" class="validate" name="siape">
          <label for="siape" class="black-text">Siape</label>
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
          <input id="formacao" type="text" class="validate" name="formacao">
          <label for="formacao" class="black-text">Formação Acadêmica</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate"  name="email">
          <label for="email" class="black-text">Email</label>
        </div>
        <div class="input-field col s12">
          <input id="senha" type="password" class="validate" name="senha">
          <label for="senha" class="black-text">Senha</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light red" type="submit" name="action">Cadastrar
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

<?php include 'rodapeInicial.php';?>