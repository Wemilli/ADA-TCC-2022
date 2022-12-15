let perguntas = [
    {
       subtitulo:'',
       titulo: 'Você chegou ao fim!',
       alternativas:[],
       correta:0
   },
{
   subtitulo:'Selecione a alternativa correta:',
   titulo: 'OBSERVE A AFIRMAÇÃO A SEGUIR: “Os algoritmos representam soluções para problemas do mundo real escritos em uma linguagem que os computadores entendem. Com a mesma ideia, podemos entender que cada item tratado neste problema pode ser representado por uma____________.”',
   alternativas:['FONTE DE CARREGAMENTO.',' VARIÁVEL.','METODOLOGIA AGIL.'],
   correta: 1
},
{
   subtitulo:'Selecione a alternativa correta:',
   titulo: 'SOBRE A DEFINIÇÃO DE VARIÁVEIS EM UM ALGORITMO:',
   alternativas:['SÃO DEFINIDAS NO INÍCIO DO ALGORITMO.','SÃO DEFINIDAS NO FIM DO ALGORITMO.','SÃO DEFINIDAS NO MEIO DO ALGORITMO.'],
   correta: 0
},
{
   subtitulo:'Selecione a alternativa correta:',
   titulo: 'ASSINA-LE A ALTERNATIVA QUE MELHOR REPRESENTA A FUNCIONALIDADE DE UMA VARIÁVEL:',
   alternativas:['VARIÁVEIS SÃO NÚMEROS FIXOS NOMEADOS NO INÍCIO DE UM ALGORITMO','VARIÁVEIS CONFIGURAM O ESPAÇO DE MEMÓRIA QUE RESERVAMOS E NOMEAMOS.',' VARIÁVEIS SÃO FRASES DE COMANDO EM UM ALGORITMO.'],
   correta: 1
},

{
    subtitulo:'Selecione a alternativa correta:',
    titulo: 'ASSINA-LE UMA DAS REGRAS PARA NOMEAR UMA VARIÁVEL:',
    alternativas:['ÚLTIMA LETRA DEVE TER ACENTO ORTOGRÁFICO.',' DEVE COMEÇAR COM UM SÍMBOLO.',' DEVE COMEÇAR COM UMA LETRA.'],
    correta: 2
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