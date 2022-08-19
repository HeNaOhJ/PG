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