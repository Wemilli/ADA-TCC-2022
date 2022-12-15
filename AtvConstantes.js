let perguntas = [
    {
       subtitulo:'',
       titulo: 'Você chegou ao fim!',
       alternativas:[],
       correta:0
   },
{
   subtitulo:'Selecione a alternativa correta:',
   titulo: ' NA PROGRAMAÇÃO, É CORRETO AFIRMAR QUE: ',
   alternativas:['UMA CONSTANTE ARMAZENA UM VALOR VARIÁVEL.',' UMA CONSTANTE ARMAZENA UM VALOR FIXO.','CONSTANTES NÃO TEM PROPRIEDADES DE ARMAZENAMENTO.'],
   correta: 1
},
{
   subtitulo:'Selecione a alternativa correta:',
   titulo: ' UMA CONSTANTE DEVE SER UTILIZADA QUANDO:',
   alternativas:['UMA INFORMAÇÃO NÃO TEM QUALQUER POSSIBILIDADE DE ALTERAÇÃO NO DECORRER DA EXECUÇÃO DO ALGORITMO.','UMA INFORMAÇÃO TEM POUCA PROBABILIDADE DE ALTERAÇÃO NO DECORRER DA EXECUÇÃO DO ALGORITMO.',' UMA INFORMAÇÃO TEM MUITA PROBABILIDADE DE ALTERAÇÃO NO DECORRER DA EXECUÇÃO DO ALGORITMO.'],
   correta: 0
},
{
   subtitulo:'Selecione a alternativa correta:',
   titulo: 'ASSINA-LE A ALTERNATIVA QUE REPRESENTA UM TIPO DE CONSTANTE:',
   alternativas:['CONSTANTE DE COMPATIBILIDADE.','CONSTANTE DE VARIAÇÃO.','CONSTANTE LITERAL.'],
   correta: 2
},

{
    subtitulo:'Selecione a alternativa correta:',
    titulo: 'É CORRETO AFIRMAR COMO UM VALOR CONSTANTE:',
    alternativas:['PREÇO DA TORTA DE LIMÃO DA PADARIA.','ALTURA DE CRIANÇAS DE 10 A 13 ANOS.','VELOCIDADE DA LUZ.'],
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