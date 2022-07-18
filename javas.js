function rr(){
    p2.style.zIndex="1";
    if (rg.style.right!="8%") {
        p2.style.zIndex="1";
    rg.style.right="8%";
    center.style.opacity="1";         
    }else {
    rg.style.right="-100%";
    center.style.opacity="0";    
    p2.style.zIndex="0";      
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
    cit.style.opacity="0";
    cit.style.display="none";
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
    if (p3.style.zIndex!="1") {         
    p3.style.zIndex="1";
    }else{    
        p3.style.zIndex="0";    
    }
}
function co() {
    if (p4.style.zIndex!="1") {         
    p4.style.zIndex="1";
    }else{    
        p4.style.zIndex="0";    
    }
}