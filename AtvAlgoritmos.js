let perguntas = [
     {
        subtitulo:'',
        titulo: 'Você chegou ao fim!',
        alternativas:[''],
        correta:0
    },
{
    subtitulo:'Selecione a alternativa correta:',
    titulo: ' A lógica de programação consiste na organização de raciocínio. Funciona como uma receita de bolo porque:',
    alternativas:['Está sempre relacionada a deliciosos bolos.','Tem vies culinário na sua prototipagem.','Dispoe de maneira lógica os passos a serem seguidos.'],
    correta: 2
},
{
    subtitulo:'Selecione a alternativa correta:',
    titulo: 'ASSINA-LE A ALTERNATIVA QUE REPRESENTA A UTILIZAÇÃO DE ALGORITMOS NO COTIDIANO.',
    alternativas:['JOGOS DE FUTEBOL.','RECEITAS CULINÁRIAS.','HISTÓRIAS DE TERROR.'],
    correta: 1
},
{
    subtitulo:'Selecione a alternativa correta:',
    titulo: 'SÃO COMPONENTES ESSÊNCIAIS PARA A CRIAÇÃO DE UM ALGORITMO NA PROGRAMAÇÃO. ',
    alternativas:[' CIRCUITOS ELETRÓNICOS',' MATERIAIS DE PLASTICO, VIDRO E BORRACHA.',' VARIÁVEIS, CONSTANTES E FUNÇÕES LÓGICAS'],
    correta: 2
},

{
    subtitulo:'Selecione a alternativa correta:',
    titulo: 'CONSIDERE A AFIRMAÇÃO A SEGUIR:“método de organização de raciocínio com o propósito de estruturar a execução de ações, com o fim de sistematizar onde se iniciam, sesucedem e se encerram.” A AFIRMAÇÃO ACIMA REFERE-SE A:',
    alternativas:['ALGORITMOS.','VARIÁVEIS.',' CONSTANTES.'],
    correta: 0
},

]

let app = {
    start: function(){
    
        this.Atualpos = 1;
        this.Totalpontos = 0;
    
        let alts = document.querySelectorAll('.alternativa');
        alts.forEach((element,index)=>{
            element.addEventListener('click', ()=>{
                this.checaResposta(index);
            })
        })
        this.atualizaPontos();
        app.mostraquestao(perguntas[this.Atualpos]);
    },
    
    mostraquestao: function(q){
        this.qatual = q;
         // mostrando o subtitulo
         let subtitleDiv = document.getElementById('subtitulo');
         subtitleDiv.textContent = q.subtitulo;
        // mostrando o titulo
        let titleDiv = document.getElementById('titulo');
        titleDiv.textContent = q.titulo;
        // mostrando as alternativas
        let alts = document.querySelectorAll('.alternativa');
        alts.forEach(function(element,index){
            element.textContent = q.alternativas[index];
        })
    
    },
    
    Proximaperg: function(){
        this.Atualpos++;
        if(this.Atualpos == perguntas.length){
            this.Atualpos = 0;
        }
    },
    
    checaResposta: function(user){
        if(this.qatual.correta == user){
            console.log("Correta")
            this.Totalpontos++;
            this.mostraresposta(true);
        }
        else{
            console.log("Errada")
            this.mostraresposta(false);
        }
        this.atualizaPontos();
        this.Proximaperg();
        this.mostraquestao(perguntas[this.Atualpos]);
    },
    
    atualizaPontos: function(){
        let scoreDiv = document.getElementById('pontos');
        scoreDiv.textContent = `Sua pontuacao: ${this.Totalpontos}`;
    },
    
    mostraresposta: function (correto) {
        let resultDiv = document.getElementById('result');
        let result = '';
        // formate a mensagem a ser exibida
        if (correto) {
          result = 'Resposta Correta!';
        }
        else {
          // obtenha a questão atual
          let pergunta = perguntas[this.Atualpos];
          // obtenha o índice da resposta correta da questão atual
          let cindice = pergunta.correta;
          // obtenha o texto da resposta correta da questão atual
          let ctexto = pergunta.alternativas[cindice];
          result = `Incorreto! Resposta Correta: ${ctexto}`;
        }
        resultDiv.textContent = result;
      }
    
    
    }

    
    
    app.start();
    var concluir = document.querySelector('.concluir');
    var refazer = document.querySelector('.refazer');

    concluir.style.visibility = 'hidden';
    refazer.style.display = 'none';
    
    function alteraDisplay(){


        if(this.Atualpos = 0){
           concluir.style.visibility = 'visible'
        }
        else{
            console.log("Errada")
            this.mostraresposta(false);
        }

    }