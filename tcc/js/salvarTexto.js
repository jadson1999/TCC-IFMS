window.addEventListener("load", showCavaleiros(JSON.parse(localStorage.getItem('Cavaleiros'))), false)
document.getElementById("cavaleiro").addEventListener("submit", enviar, false)
  
function enviar(e) {
  var alt = document.getElementById('enviar').alt
  if (alt != undefined) {
    updateCavaleiro()
  } else {
    addCavaleiro()
    window.location.reload()
  }
  e.preventDefault()
}

function addCavaleiro(e) {
  // Obtém valores do formulário
  var titulo = document.getElementById("titulo").value

  // Define um objeto com os valores obtidos do formulário
  var cavaleiro = {
    id: gerarIDCavaleiro(),       // Adicionar
    nome: nomeCavaleiro,
    idade: idadeCavaleiro,
    tempo: tempoCavaleiro,
    nomecavalo: nomeCavalo,
    box: boxCavaleiro
  }

  // Testa se a chave 'aluno' é nula (vazia)
  if(localStorage.getItem('Cavaleiros') === null){
    // Inicia o vetor (array)
    var cavaleiros = []
    // Adiciona objeto no array
    cavaleiros.push(cavaleiro)
    // Armazena no localStorage - JSON.stringify = converte o JavaScript em nota JSON
    localStorage.setItem('Cavaleiros', JSON.stringify(cavaleiros))
  } else {
    // Define uma nova variável e coloca o conteúdo de localStorage nela - JSON.parse = converte a notação JSON em JavaScript
    var cavaleiros = JSON.parse(localStorage.getItem('Cavaleiros'))
    // Adiciona objeto no array
    cavaleiros.push(cavaleiro)
    // Re-armazena no localStorage - JSON.stringify = converte o JavaScript em nota JSON
    localStorage.setItem('Cavaleiros', JSON.stringify(cavaleiros))
  }
  showCavaleiros(cavaleiros)
 }

 function gerarIDCavaleiro() {
  var id = JSON.parse(localStorage.getItem('idCavaleiro'))
  if(id === null){
    localStorage.setItem('idCavaleiro', 1)
  } else {
    id += 1
    localStorage.setItem('idCavaleiro', id)
  }
  return JSON.parse(localStorage.getItem('idCavaleiro'))
}

function setCavaleiro(i) {
  var cavaleiros = JSON.parse(localStorage.getItem('Cavaleiros'))
  document.getElementById('nome').value = cavaleiros[i].nome
  document.getElementById('idade').value = cavaleiros[i].idade
  document.getElementById('tempo').value = cavaleiros[i].tempo
  document.getElementById('nomecavalo' ).value = cavaleiros[i].nomecavalo
  document.getElementById('box' ).value = cavaleiros[i].box
  document.getElementById('enviar').alt = i
}

function updateCavaleiro(posicao) {
  var cavaleiros = JSON.parse(localStorage.getItem('Cavaleiros'))
  var posicao = document.getElementById('enviar').alt
  cavaleiros[posicao].nome = document.getElementById('nome').value
  cavaleiros[posicao].idade = document.getElementById('idade').value
  cavaleiros[posicao].tempo = document.getElementById('tempo').value
  cavaleiros[posicao].nomecavalo = document.getElementById('nomecavalo').value
  cavaleiros[posicao].box = document.getElementById('box').value

  localStorage.setItem('Cavaleiros', JSON.stringify(cavaleiros))
  document.getElementById('enviar').alt = ""
  showCavaleiros(cavaleiros)
}

function deleteCavaleiro(i) {
  var cavaleiros = JSON.parse(localStorage.getItem('Cavaleiros'))
  // O método splice retira itens do Array, o argumento (i) é a posição em
  // que o item está no array e o segundo argumento indica a quantidade de itens
  // que serão removidos.
  cavaleiros.splice(i, 1)
  localStorage.setItem('Cavaleiros', JSON.stringify(cavaleiros))

  showCavaleiros(cavaleiros)
}

function showCavaleiros(cavaleiros) {
  // Pegar id (elemento HTML) de onde quero mostrar os Alunos: "relatorio"
  var listarCavaleiros = document.getElementById('exibir')

  // Construir a saída
  listarCavaleiros.innerHTML = ''
  
  cavaleiros.sort(function(a,b){
      return a.tempo - b.tempo;
  });
  
  if(cavaleiros === null || cavaleiros.length === 0) {
    listarCavaleiros.innerHTML = '<h4>Nenhum registro localizado</h4>'
  } else {
    for(var i = 0; i < cavaleiros.length; i++) {
        listarCavaleiros.innerHTML += '<div class="row"><div class="col s3"><h6 style="font-size: 18px;" class="center-align">' + cavaleiros[i].nome + ' ' + '</h3></div>' + '<div class="col s3"><h6 style="font-size: 18px;" class="center-align">' + cavaleiros[i].idade +  ' ' + '</h3></div>' + '<div class="col s3"><h6 style="font-size: 18px;" class="center-align">' + cavaleiros[i].tempo + ' ' +  '</h3></div>' + '<div class="col s3"><h6 style="font-size: 18px;" class="center-align">' + cavaleiros[i].nomecavalo +  '</h6></div></div>'
            + '<div class="col s6"><a style="margin-right: 20px; font-size: 19px;" class="green-text right" onclick="deleteCavaleiro(' + i + ')">Excluir Cavaleiro</a></div>' // Adicionar
            + '<div class="col s6"><a style="font-size: 19px;" class="green-text center" onclick="setCavaleiro(' + i + ')">Editar Informações</a></div>' // Adicionar
    }
  }
}
