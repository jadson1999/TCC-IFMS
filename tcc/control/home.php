<?php

session_start();

if(isset($_SESSION['login']) == false){
    header("Location: ../index.php");
}
include 'cabecalho.php';
?>

<div id="producao" class="col l8 s12">
    <form method="post" name="formul" action="fpdf/criarPDF.php">
        <div id="menor">
            <div id="titulo">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="imagens/fundo.jpg"> <!-- random image -->
                            <div class="caption center-align">
                                <h3>Um bom título...</h3>
                                <h5 class="light grey-text text-lighten-3">É curto, resume o texto e atrai o leitor</h5>
                                <h5 class="light grey-text text-lighten-3">Centralizado com a 1ª inicial maiúscula</h5>
                            </div>
                        </li>
                        <li>
                            <img src="imagens/fundo2.jpg"> <!-- random image -->
                            <div class="caption left-align">
                                <h5 class="light grey-text text-lighten-3">Uma palavra usada no título não pode ser usada na 1ª linha da introdução</h5>
                                <h5 class="light grey-text text-lighten-3">As aspas no título devem ser colocadas em apenas um dos termos, pois ele já está em evidência.</h5>
                            </div>
                        </li>
                        <li>
                            <img src="imagens/fundo3.jpg"> <!-- random image -->
                            <div class="caption right-align">
                                <h5 class="light grey-text text-darken-4">Não pode haver ponto final, mas outros podem ser utilizados</h5>
                                <h5 class="light grey-text text-darken-4">Se fizer uma interrogação, a resposta deve estar ao longo da redação</h5>
                            </div>
                        </li>
                        <li>
                            <img src="imagens/fundo5.jpg"> <!-- random image -->
                            <div class="caption center-align">
                                <h5 class="light grey-text text-darken-4">O título não conta para que se atinja o número mínimo de linhas exigido</h5>
                            </div>
                        </li>
                    </ul>
                </div>
                <h5 class="center-align black-text">POR ONDE COMEÇAR? TÍTULO</h5>
                <h6 class="black-text" style="line-height: 21px;">&emsp;&emsp; Sabemos que um dos grandes desafios do aluno é iniciar o texto. Dar o primeiro passo para elaborar uma redação é, também, selecionar uma forma adequada de apresentar sua produção a um leitor, seduzindo-o para as demais partes da dissertação.</h6>
            </div>

            <div class="input-field">
                <div>
                    <textarea id="titulo" name="titulo" class="materialize-textarea"></textarea></br>
                    <label for="titulo" style="margin-left: 10px;" class="black-text">Título</label>
                </div>
            </div>


            <div id="introducao">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="imagens/fundo4.jpg">
                            <div class="caption center-align">
                                <h3 class="grey-text text-darken-4">A Introdução</h3>
                                <h5 class="light grey-text text-darken-4">É o parágrafo inicial do texto e deve ter, em média, 5 linhas.</h5>
                                <h5 class="light grey-text text-darken-4">Essa etapa exige boa capacidade de síntese, pois a clareza alcançada na exposição da ideia é uma forma do leitor aderir ao texto, sem, necessariamente, concordar com a tese.</h5>
                                <h5 class="light grey-text text-darken-4">Pode ser dividida em Periférico, tema e tese.</h5>
                            </div>
                        </li>
                        <li>
                            <img src="imagens/fundo3.jpg">
                            <div class="caption left-align">
                                <a><h3 class="grey-text text-darken-4">Periférico</h3></a>
                                <h5 class="light grey-text text-darken-4">Frase de efeito para começar o texto e chamar o interesse do corretor para a leitura</h5>
                            </div>
                        </li>
                        <li>
                            <img src="imagens/fundo5.jpg">
                            <div class="caption right-align">
                                <h3 class="grey-text text-darken-4">Tema</h3>
                                <h5 class="light grey-text text-darken-4">Apresentação do tema de modo claro, sem expressar opiniões ainda</h5>
                            </div>
                        </li>
                        <li>
                            <img src="imagens/fundo.jpg">
                            <div class="caption center-align">
                                <h3>Tese</h3>
                                <h5 class="light grey-text text-lighten-3">Expressar a sua opinião sobre o tema, sem justifica-la</h5>
                            </div>
                        </li>
                    </ul>
                </div>
                <h5 class="center-align black-text">COLOCANDO AS PRIMEIRAS IDEIAS: INTRODUÇÃO</h5>
                <h6 class="black-text" style="line-height: 21px;">&emsp;&emsp;Lembramos que nem sempre o problema a ser discutido estará explícito na tese. Pense, por exemplo, no tema da prova de 2005: “O trabalho infantil na realidade brasileira”. Nele, não se encontra, à primeira vista, uma situação-problema, o que induz o candidato menos preparado a simplesmente expor essa questão social, e não a debatê-la, como é exigido pela banca. É preciso problematizar a questão, pensando, por exemplo, em algo como, “a desumanização representada pelo trabalho infantil na realidade brasileira”. Dessa forma, mostra-se ao leitor que o tema foi perfeitamente compreendido e que vai se desenvolver um posicionamento acerca dele.</h6>
            </div>

            <div class="input-field">
                <div>
                    <textarea id="introducao" name="introducao" class="materialize-textarea"></textarea></br>
                    <label for="introducao" style="margin-left: 10px;" class="black-text">Introdução</label>
                </div>
            </div>


            <div id="desenvolvimento">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="imagens/fundo2.jpg">
                            <div class="caption center-align">
                                <h3>O Desenvolvimento</h3>
                                <h5 class="light grey-text text-lighten-3">É a justificativa da tese exposta na introdução.</h5>
                                <h5 class="light grey-text text-lighten-3">Pode ser feito em 2 ou 3 parágrafos, com no mínimo 4 linhas e no máximo 6 linhas, sendo que a dica é que se utilize um argumento por parágrafo</h5>
                            </div>
                        </li>
                        <li>
                            <img src="imagens/fundo5.jpg">
                            <div class="caption left-align">
                                <h5 class="light grey-text text-darken-4">Onde deve-se provar o problema e sustentar a crítica apresentados na introdução por meio de exemplos ou argumentos de autoridade (citação ou paráfrase), fatos históricos e/ou atualidades.</h5>
                            </div>
                        </li>
                        <li>
                            <img src="imagens/fundo.jpg">
                            <div class="caption right-align">
                                <h5 class="light grey-text text-lighten-3">A citação deve ter em média 2 linhas, porém o importante é argumentar a informação que tiver com ou sem citação e exemplos.</h5>
                            </div>
                        </li>
                        <li>
                            <img src="imagens/fundo3.jpg">
                            <div class="caption center-align">
                                <h3 class="grey-text text-darken-4">Importante</h3>
                                <h5 class="light grey-text text-darken-4">Lembre-se de retomar o tema e a tese em cada parágrafo da argumentação, ralacionando-os com sua opinião.</h5>
                            </div>
                        </li>
                    </ul>
                </div>
                <h5 class="center-align black-text">ARGUMENTANDO SUA TESE: DESENVOLVIMENTO</h5>
                <h6 class="black-text" style="line-height: 21px;">&emsp;&emsp;Embora essa parte do texto seja importante, ela não precisa ser complicada. Deve ser clara o suficiente para que o leitor a compreenda. Na argumentação se responde POR QUE a tese estabelecida na introdução foi escolhida.</br>&emsp;&emsp;Os argumentos devem estar em uma ordem lógica, em que se tem a sua opinião seguida de algo que a ratifique como válida. Essa ordem é ainda mais importante quando se usa o pensamento de outra pessoa para validar o seu (argumento de autoridade), já que os limites entre a sua opinião e o argumento de autoridade devem ser bem nítidos no texto.</h6>
            </div>

            <div class="input-field">
                <div>
                    <textarea id="argumento1" name="argumento1" class="materialize-textarea"></textarea></br>
                    <label for="argumento1" style="margin-left: 10px;" class="black-text">Argumento 1</label>
                </div>
            </div>
            <div class="input-field">
                <div>
                    <textarea id="argumento2" name="argumento2" class="materialize-textarea"></textarea></br>
                    <label for="argumento2" style="margin-left: 10px;" class="black-text">Argumento 2</label>
                </div>
            </div>
            <div class="input-field">
                <div>
                    <textarea id="argumento3" name="argumento3" class="materialize-textarea"></textarea></br>
                    <label for="argumento3" style="margin-left: 10px;" class="black-text">Argumento 3</label>
                </div>
            </div>


            <div id="intervencao">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="imagens/fundo3.jpg">
                            <div class="caption center-align">
                                <h3 class="grey-text text-darken-4" style="font-family: 'Satisfy', cursive;">A Proposta de Intervenção</h3>
                                <h5 class="light grey-text text-darken-4">Lugar de solução para o problema apresentado na Introdução e não pode haver perguntas.</h5>
                            </div>
                        </li>
                        <li>
                            <img src="imagens/fundo.jpg">
                            <div class="caption left-align">
                                <h5 class="light grey-text text-lighten-3">É recomendado que não se utilize citação aqui, porém se utilizar com sabedoria pode caber muito bem.</h5>
                            </div>
                        </li>
                        <li>
                            <img src="imagens/fundo4.jpg">
                            <div class="caption right-align">
                                <h5 class="light grey-text text-darken-4">O uso de palavras de sentido conclusivo (logo, portanto, finalmente, em suma...) deve ser deslocado no resumo, não se iniciando o parágrafo com elas.</h5>
                            </div>
                        </li>
                        <li>
                            <img src="imagens/fundo2.jpg">
                            <div class="caption center-align">
                                <h3 style="font-family: 'Satisfy', cursive;">Importante</h3>
                                <h5 class="light grey-text text-lighten-3">Evite o uso de 1ª pessoa do plural (nós).</h5>
                                <h5 class="light grey-text text-lighten-3">Utilize expressões como ‘é preciso”, “é imprescindível”, “é necessário” e proponha sempre ações envolvendo a educação e a conscientização, sem atacar governos e tomando cuidado para não desrespeitar direitos humanos.</h5>
                            </div>
                        </li>
                    </ul>
                </div>
                <h5 class="center-align black-text">APRESENTANDO UMA SOLUÇÃO: INTERVENÇÃO</h5>
                <h6 class="black-text" style="line-height: 21px;">&emsp;&emsp;A conclusão pode ser dividida em resumo (resume os argumentos), tema-tese (reapresenta o tema e a tese) e chave de ouro (frase de efeito que fecha o texto de forma elegante).</br>&emsp;&emsp;• Faz-se, primeiramente, o resumo dos argumentos utilizados. Pode-se fazê-lo juntando os tópicos frasais que determinaram cada argumento. Tenha o cuidado de não repetir frases inteiras e parafrasear sempre que necessário.</br>&emsp;&emsp;•   Depois, reapresenta-se o tema-tese, de forma sucinta, tendo o cuidado de se manter a coerência. O resumo e o tema-tese podem ser colocados em uma frase só, sendo esta a forma mais recomendada.</br>&emsp;&emsp;•  Por último, coloca-se uma chave de ouro, uma frase de efeito que termine o texto de forma interessante e também aproveite a oportunidade para mostrar, mais uma vez, que você tem bagagem cultural e conhecimento sobre o assunto. Deve dar a sensação de que o texto valeu a pena ser lido.</br>&emsp;&emsp;Sobre o número de frases, normalmente usam-se duas, podendo unir o resumo e o tema tese, ou o tema tese e a chave de ouro. Em determinadas situações em que se consegue manter a coerência textual, pode-se inverter tema-tese e resumo de posição dentro do parágrafo, tomando o devido cuidado para manter a chave de ouro como a última coisa do texto.</br>&emsp;&emsp;No ENEM, a chave de ouro some e entra em seu lugar a proposta de intervenção. Cuidado, isso ocorre APENAS NO ENEM ou se estiver EXPLÍCITO NAS INSTRUÇÕES DO TEXTO.</h6>
            </div>

            <div class="input-field">
                <div>
                    <textarea id="conclusao" name="conclusao" class="materialize-textarea"></textarea>
                    <label for="conclusao" style="margin-left: 10px;" class="black-text">Conclusão</label>
                </div>
            </div>

            <div class="row">
                <div class="col s6 center">
                    <a class="btn waves-effect waves-light red center-align" type="button" value="Enviar1" onclick="envia('fpdf/criarPDF.php')">
                        <i class="material-icons right">send</i>Gerar o texto em PDF
                    </a>
                </div>
                <div class="col s6 center">
                    <a rel="externo" class="btn waves-effect waves-light red" type="button" value="Enviar2" onclick="envia('phptexto.php')">
                        <i class="material-icons right">send</i>Gerar o texto na tela
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="col l2 s12 center">
  <ul id="dicas" class="collapsible z-depth-0" data-collapsible="accordion">
   <li style="border: 1px solid #ef9a9a;">
    <div class="collapsible-header red lighten-3">Evite Clichês</div>
    <div class="collapsible-body red lighten-3"><p>Expressões muito conhecidas, como "colocar tudo em pratos limpos", "fechar com chave de ouro", etc.</p></div>
</li>
<li style="border: 1px solid #a5d6a7;">
    <div class="collapsible-header green lighten-3">Não trocar o tipo ou gênero do texto</div>
    <div class="collapsible-body green lighten-3"><p>A prova pede uma dissertação e você faz uma narração. Isso é incontornável e resulta em nota zero.</p></div>
</li>
<li style="border: 1px solid #90caf9;">
    <div class="collapsible-header blue lighten-3">Fugir do tema</div>
    <div class="collapsible-body blue lighten-3"><p>Uma redação que foge do tema pode levar à anulação da redação. Por isso, leia com atenção a coletânea de textos e o enunciado.</p></div>
</li>
<li style="border: 1px solid #b0bec5;">
    <div class="collapsible-header blue-grey lighten-3">Uso impróprio da linguagem oral</div>
    <div class="collapsible-body blue-grey lighten-3"><p>Expressões como "né" e "ok" não caem bem numa redação. Gírias como "se ligar" e "irado" também não são adequados.</p></div>
</li>
<li style="border: 1px solid #fff59d;">
    <div class="collapsible-header yellow lighten-3">Rebuscar demais</div>
    <div class="collapsible-body yellow lighten-3"><p>Abusar de palavras rebuscadas também prejudicam sua nota. Linguagem formal não é sinônimo de linguagem complicada.</p></div>
</li>
<li style="border: 1px solid #bcaaa4;">
    <div class="collapsible-header brown lighten-3">Cometer erros de Língua Portuguesa</div>
    <div class="collapsible-body brown lighten-3"><p>Expressões como "Fazem muitos anos", "há nove anos atrás" e "para mim levar" são deslizes graves numa redação. Na dúvida substitua a palavra por outra ou organize novamente a frase.</p></div>
</li>
<li style="border: 1px solid #80cbc4;">
    <div class="collapsible-header teal lighten-3">Panfletar e radicalizar</div>
    <div class="collapsible-body teal lighten-3"><p>Frases de influência ao leitor como "Devemos nos unir!" ou "Vamos reciclar o planeta!" são consideradas frágeis. É melhor organizar argumentos que permitam ao leitor chegar às próprias conclusões.</p></div>
</li>
<li style="border: 1px solid #9fa8da;">
    <div class="collapsible-header indigo lighten-3">Exagerar em informações</div>
    <div class="collapsible-body indigo lighten-3"><p>O excesso de informações pode prejudicar a coesão do texto, pois dados demais podem confundir, ao inv´´es de esclarecer. Seja seletivo.</p></div>
</li>
<li style="border: 1px solid #80deea;">
    <div class="collapsible-header cyan lighten-3">Usar citações sem cuidado</div>
    <div class="collapsible-body cyan lighten-3"><p>Evite expressões batidas como "só sei que nada sei", de Sócrates. Usar citações fora de contexto, sem que tenham uma relação efetiva com o texto ou argumentação, e citações de autoridade imcompletas ou com a grafia errada do nome do autor são erros graves dentro de uma redação.</p></div>
</li>
<li style="border: 1px solid #ffcc80;">
    <div class="collapsible-header orange lighten-3">Cair em redundância</div>
    <div class="collapsible-body orange lighten-3"><p>A redundância revela falta de repertório autor-candidato. Numa boa dissertação, a argumentação avança progressivamente, e não fica andando em círculo.</p></div>
</li>
<li style="border: 1px solid #ef9a9a;">
    <div class="collapsible-header red lighten-3">Reveja a linguagem</div>
    <div class="collapsible-body red lighten-3"><p>Caso tenha dúvidas de uma grafia, tente substituir a palavra. Verifique os acentos das palavras e as vírgulas.</p></div>
</li>
<li style="border: 1px solid #a5d6a7;">
    <div class="collapsible-header green lighten-3">Elimine repetições</div>
    <div class="collapsible-body green lighten-3"><p>Quando encontrar uma repetição, veja se a palavra precisa ser mantida ou se pode ser substituída.</p></div>
</li>
<li style="border: 1px solid #90caf9;">
    <div class="collapsible-header blue lighten-3">Atente para excesso de "ques"</div>
    <div class="collapsible-body blue lighten-3"><p>Ele pode sinalizar períodos muito longos e mal construídos. Veja se não é caso de eliminar um "que" e abrir uma nova oração. Com o verbo ter, utilize "ter de" em lugar de "ter que" para evitar sua repetição.</p></div>
</li>
<li style="border: 1px solid #b0bec5;">
    <div class="collapsible-header blue-grey lighten-3">Analise seus argumentos</div>
    <div class="collapsible-body blue-grey lighten-3"><p>Veja se há coerência entre as ideias e coesão entre os elementos textuais. Observe se acertou na escolha de conjunções e preposições.</p></div>
</li>
<li style="border: 1px solid #fff59d;">
    <div class="collapsible-header yellow lighten-3">Não abuse das citações</div>
    <div class="collapsible-body yellow lighten-3"><p>Como costuma dizer um amigo meu: "Quem cita os outros não tem as próprias ideias".</p></div>
</li>
<li style="border: 1px solid #bcaaa4;">
    <div class="collapsible-header brown lighten-3">Frases com apenas uma palavra?</div>
    <div class="collapsible-body brown lighten-3"><p>Jamais!</p></div>
</li>
<li style="border: 1px solid #80cbc4;">
    <div class="collapsible-header teal lighten-3">Evite mesóclises</div>
    <div class="collapsible-body teal lighten-3"><p>Repita comigo: "mesóclises: evitá-las-ei!"</p></div>
</li>
<li style="border: 1px solid #9fa8da;">
    <div class="collapsible-header indigo lighten-3">Evite frases exageradamente longas</div>
    <div class="collapsible-body indigo lighten-3"><p>Elas dificultam a compreensão das ideias nelas contidas e, por conterem mais de uma ideia central, o que nem sempre torna o seu conteúdo acessível, forçam o pobre leitor, dessa forma, a separá-la nos seus diversos componente de forma a torná-las compreensíveis, o que não deveria ocorrer, afinal de contas, parte do processo de leitura, hábito que devemos estimular através do uso de frases mais curtas.</p></div>
</li>
<li style="border: 1px solid #80deea;">
    <div class="collapsible-header cyan lighten-3">Determinadas formas de expressar</div>
    <div class="collapsible-body cyan lighten-3"><p>Outra barbaridade que tu deves evitar tchê, é usar muitas expressões que acabem por denunciar a região onde tu moras... nada de mandar esse trem... vixe... entendeu, bichinho?</p></div>
</li>
<li style="border: 1px solid #ffcc80;">
    <div class="collapsible-header orange lighten-3">Utilização de "X" ou "versus"</div>
    <div class="collapsible-body orange lighten-3"><p>Exemplo: Sonho X Realidade.</p></div>
</li>
<li style="border: 1px solid #ef9a9a;">
    <div class="collapsible-header red lighten-3">Perguntas Excludentes</div>
    <div class="collapsible-body red lighten-3"><p>Exemplo: Educação: Direito ou privilégio?</p></div>
</li>
<li style="border: 1px solid #a5d6a7;">
    <div class="collapsible-header green lighten-3">Slogans Publicitários</div>
    <div class="collapsible-body green lighten-3"><p>Exemplo: Brasil, país de todos.</p></div>
</li>
<li style="border: 1px solid #90caf9;">
    <div class="collapsible-header blue lighten-3">Repetição do tema</div>
    <div class="collapsible-body blue lighten-3"><p>Exemplo: Injustiça no sistema penal (Tema: A injustiça no sistema penal brasileiro).</p></div>
</li>
<li style="border: 1px solid #b0bec5;">
    <div class="collapsible-header blue-grey lighten-3">Termos muito genéricos</div>
    <div class="collapsible-body blue-grey lighten-3"><p>Exemplo: Violência.</p></div>
</li>
</ul>
</div>

<?php include 'rodape.php';?>