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
      rg.style.left="8%";
      center.style.opacity="1";
      pfalsa2.style.display="none";
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