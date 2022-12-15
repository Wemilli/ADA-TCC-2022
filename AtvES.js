let perguntas = [
    {
       subtitulo:'',
       titulo: 'Você chegou ao fim!',
       alternativas:[''],
       correta:0
   },
{
   subtitulo:'Selecione a alternativa correta:',
   titulo: '  OBSERVE A AFIRMAÇÃO A SEGUIR: “Todo algoritmo necessita de uma forma de obtenção dos dados de entrada do problema, assim como uma forma de comunicação da saída por ele produzida.” A AFIRMAÇÃO ESTÁ:',
   alternativas:[' PARCIALMENTE ERRADA.','CERTA.','ERRADA.'],
   correta: 1
},
{
   subtitulo:'Selecione a alternativa correta:',
   titulo: 'A INSTRUÇÃO DE ESCRITA, NA LINGUAGEM PORTUGOL, É DENOMINADA:',
   alternativas:[' ESCREVA.','ESCREVENDO.','ESCRITO.'],
   correta: 0
},
{
   subtitulo:'Selecione a alternativa correta:',
   titulo: 'A INSTRUÇÃO DE LEITURA, NA LINGUAGEM PORTUGOL, É DENOMINADA:',
   alternativas:['LENDO',' LIDO.',' LEIA.'],
   correta: 2
},

{
   subtitulo:'Selecione a alternativa correta:',
   titulo: 'OBSERVE A AFIRMAÇÃO A SEGUIR E SELECIONE A ALTERNATIVA CORRETA: “As mensagens de saída têm como objetivo auxiliar a comunicação entre o programa e o ser humano, que é conhecido por usuário. Em um ambiente de programação típico, as mensagens de saída aparecem em_____________.”',
   alternativas:[' LIVROS DE CULINARIA.','RÁDIOS.',' UM MONITOR DE VÍDEO, E OS DADOS DE ENTRADA SÃO FORNECIDOS AO PROGRAMA POR MEIO DE UM TECLADO OU MOUSE.'],
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