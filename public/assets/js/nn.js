var cache=document.getElementById("cache");
cache.style.display="inline";

var cache2=document.getElementById("cache2");
cache2.style.display="none";

var cache3=document.getElementById("cache3");
cache3.style.display="none";

var cache4=document.getElementById("cache4")
cache4.style.display="none";

var cache5=document.getElementById("cache5")
cache5.style.display="none";

var envoyer=document.getElementById("envoyer")
var note=0;



let inscription=document.getElementById("inscription").addEventListener("submit",function(e){ 
    
    e.preventDefault();
  var erreur;
  var numero=document.getElementById("numero")
  
  
  if (numero.value==2){

    
    note=note+1
    erreur="bravo vous avez gagné! c'est bien le jaune,  note: "  + (note)+ "/5";
    numero.disabled=true;
    envoyer.disabled=true;
    cache2.style.display="inline";
    
     
  }else{
      erreur="Désolée mais vous avez perdu! La reponse était: Jaune!";
      numero.disabled=true;
      cache2.style.display="inline";
      
  }
  if ((numero.value>3)||(isNaN(numero.value))||(numero.value=="")){
      erreur="Veuillez entrer une réponse entre 1 et 3."
      numero.disabled=false;
      cache2.style.display="none";
  }
  if (erreur){
    e.preventDefault();
    document.getElementById("erreur").innerHTML=erreur;
    return false;
  }
  else{

    alert('formulaire envoyé')
  }
    
  
});


let inscription2=document.getElementById("inscription2").addEventListener("submit",function(e){ 
    
    e.preventDefault();
  var erreur2;
 
  var numero2=document.getElementById("numero2")
  
  if (numero2.value==2){
    note=note+1
    erreur2="bravo vous avez gagné!, c'est bien 10 doigts, note: " + (note)+ "/5";
    envoyer2.disabled=true;
    numero2.disabled=true;
    cache3.style.display="inline";
    
  }else{
      erreur2="Désolée mais vous avez perdu! La réponse était 10 doigts!"
      numero2.disabled=true;
      cache3.style.display="inline";
  }
  if ((numero2.value>3)||(isNaN(numero2.value))||(numero2.value=="")){
    erreur2="Veuillez entrer une réponse entre 1 et 3."
    numero2.disabled=false;
    cache3.style.display="none";
}
  if (erreur2){
    e.preventDefault();
    document.getElementById("erreur2").innerHTML=erreur2;
    return false;
  }
  else{

    alert('formulaire envoyé')
  }
    
  
});


let inscription3=document.getElementById("inscription3").addEventListener("submit",function(e){ 
    
    e.preventDefault();
  var erreur3;
 
  var numero3=document.getElementById("numero3")
  
  if (numero3.value==3){
    note=note+1
    erreur3="bravo vous avez gagné! C'est bien un Américain, note: " + (note)+ "/5";
    envoyer3.disabled=true;
    numero3.disabled=true;
    cache4.style.display="inline"
  }else{
      erreur3="Désolée mais vous avez perdu! La réponse était Un Américain!"
      numero3.disabled=true;
      cache4.style.display="inline";
  }

  if ((numero3.value>3)||(isNaN(numero3.value))||(numero3.value=="")){
    erreur3="Veuillez entrer une réponse entre 1 et 3."
    numero3.disabled=false;
    cache4.style.display="none";
}
  if (erreur3){
    e.preventDefault();
    document.getElementById("erreur3").innerHTML=erreur3;
    return false;
  }
  else{

    alert('formulaire envoyé')
  }  
  
});


let inscription4=document.getElementById("inscription4").addEventListener("submit",function(e){ 
    
    e.preventDefault();
  var erreur4;
 
  var numero4=document.getElementById("numero4")
  
  if (numero4.value==1){
    note=note+1
    erreur4="bravo vous avez gagné! C'est bien Limoges, note: " + (note)+ "/5";
    envoyer4.disabled=true;
    numero4.disabled=true;
    cache5.style.display="inline"
  }else{
      erreur4="Désolée mais vous avez perdu! La réponse était Limoges"
      numero4.disabled=true;
      cache5.style.display="inline";
  }
  if ((numero4.value>3)||(isNaN(numero4.value))||(numero4.value=="")){
    erreur4="Veuillez entrer une réponse entre 1 et 3."
    numero4.disabled=false;
    cache5.style.display="none";
}

  if (erreur4){
    e.preventDefault();
    document.getElementById("erreur4").innerHTML=erreur4;
    return false;
  }
  else{

    alert('formulaire envoyé')
  }  
  
});


let inscription5=document.getElementById("inscription5").addEventListener("submit",function(e){ 
    
    e.preventDefault();
  var erreur5;
 
  var numero5=document.getElementById("numero5")
  
  if (numero5.value==2){
    note=note+1
    erreur5="bravo vous avez gagné! C'est bien parcequ'Hiboude, note: " + (note)+ "/5";
    numero5.disabled=true;
    envoyer5.disabled=true;
    
  }else{
      erreur5="Désolée mais vous avez perdu! La réponse était parcequ'Hiboude! vous avez obtenu une note de " +(note)+ "/5";
      numero5.disabled=true;

  }
  if ((numero5.value>3)||(isNaN(numero5.value))||(numero5.value=="")){
    erreur5="Veuillez entrer une réponse entre 1 et 3."
    numero5.disabled=false;
   
}
  if (erreur5){
    e.preventDefault();
    document.getElementById("erreur5").innerHTML=erreur5;
    return false;
  }
  else{

    alert('formulaire envoyé')
  }  
  
});
