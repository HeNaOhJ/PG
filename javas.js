blat.style.left="-350px";
function barra(){  
      if (blat.style.left!="-350px") {
          blat.style.left="-350px";            
      }else{
          blat.style.left="0px";
      }
  }
  function rr(){
      barra();
      iny.style.opacity="0";
      iny.style.display="none";  
          cit.style.opacity="0";
          cit.style.display="none";
      if (rg.style.left!="8%") {
        rg.style.left="8%";
        center.style.opacity="1";
        pfalsa2.style.display="none";          
        }else {
            rg.style.left="-100%";
            center.style.opacity="0";
            pfalsa2.style.display="block";          
            }
  }
  function registrar(){
	kj2.style.opacity="1";
	kj3.style.opacity="0";
	kj2.style.zIndex=20;
	kj3.style.zIndex=10;
}
function ingresar(){
	kj2.style.opacity="0";
	kj3.style.opacity="1";
	kj2.style.zIndex=10;
	kj3.style.zIndex=20;
}
ing.style.height="0px";
function ingre(){
    pfalsa2.style.display="none";
    	cit.style.opacity="0";
    	cit.style.display="none";
    if(ing.style.height!="470px"){
    ing.style.height="470px";
    ing.style.padding="5%";
    reg.style.height="0px";
    reg.style.padding="0px";
    }else{
    ing.style.height="0px";
    ing.style.padding="0px";
    }
}
reg.style.height="0px";
function regs(){
    pfalsa2.style.display="none";
    	cit.style.opacity="0";
    	cit.style.display="none";
    if(reg.style.height!="470px"){
        ing.style.height="0px";
        ing.style.padding="0px";
        reg.style.height="470px";
        reg.style.padding="5%";
    }else{
    reg.style.height="0px";
    reg.style.padding="0px";
    }
}
function inyy() {
        barra();       
    	cit.style.opacity="0";
    	cit.style.display="none";
            rg.style.left="-100%";
            center.style.opacity="0";
            ing.style.height="0px";
            ing.style.padding="0px";    
        reg.style.height="0px";
        reg.style.padding="0px";
    if (iny.style.display!="flex") { 
    	iny.style.opacity="1";
    	iny.style.display="flex";
    }else {        
    	iny.style.opacity="0";
    	iny.style.display="none";
    }
}
function op() {
    ing.style.height="0px";
    ing.style.padding="0px";
reg.style.height="0px";
reg.style.padding="0px";
    iny.style.opacity="0";
    iny.style.display="none";
            rg.style.left="-100%";
            center.style.opacity="0";
        barra();
        pfalsa2.style.display="none";
    if (cit.style.display!="block") { 
    	cit.style.opacity="1";
    	cit.style.display="block";
    }else {        
    	cit.style.opacity="0";
    	cit.style.display="none";
        pfalsa2.style.display="block";
    }
}
inyy();