function teoria(){
    if(contenedor.style.display!="flex"){
    contenedor.style.display="flex";
    prac.style.display="none";
    tex.style.display="none";
    }else{
    contenedor.style.display="none";
    prac.style.display="block";
    tex.style.display="block";
    }
}
function chatting(){
    if (cit.style.width!="90%") {
        cit.style.width="90%";        
    }else{
        cit.style.width="0px";
    }
}
function oo1(){
    o1.style.background="url(imgs/est4.png)";
    o1.style.backgroundSize="100%";
    o2.style.background="url(imgs/est2.png)";
    o2.style.backgroundSize="100%";
    o3.style.background="url(imgs/est2.png)";
    o3.style.backgroundSize="100%";
    o4.style.background="url(imgs/est2.png)";
    o4.style.backgroundSize="100%";
    o5.style.background="url(imgs/est2.png)";
    o5.style.backgroundSize="100%";
    puntaje1.value="1";
    puntaje2.value="0";
    puntaje3.value="0";
    puntaje4.value="0";
    puntaje5.value="0";
}
function oo2(){
    o1.style.background="url(imgs/est4.png)";
    o1.style.backgroundSize="100%";
    o2.style.background="url(imgs/est4.png)";
    o2.style.backgroundSize="100%";
    o3.style.background="url(imgs/est2.png)";
    o3.style.backgroundSize="100%";
    o4.style.background="url(imgs/est2.png)";
    o4.style.backgroundSize="100%";
    o5.style.background="url(imgs/est2.png)";
    o5.style.backgroundSize="100%";
    puntaje1.value="1";
    puntaje2.value="1";
    puntaje3.value="0";
    puntaje4.value="0";
    puntaje5.value="0";
}
function oo3(){
    o1.style.background="url(imgs/est4.png)";
    o1.style.backgroundSize="100%";
    o2.style.background="url(imgs/est4.png)";
    o2.style.backgroundSize="100%";
    o3.style.background="url(imgs/est4.png)";
    o3.style.backgroundSize="100%";
    o4.style.background="url(imgs/est2.png)";
    o4.style.backgroundSize="100%";
    o5.style.background="url(imgs/est2.png)";
    o5.style.backgroundSize="100%";
    puntaje1.value="1";
    puntaje2.value="1";
    puntaje3.value="1";
    puntaje4.value="0";
    puntaje5.value="0";
}
function oo4(){
    o1.style.background="url(imgs/est4.png)";
    o1.style.backgroundSize="100%";
    o2.style.background="url(imgs/est4.png)";
    o2.style.backgroundSize="100%";
    o3.style.background="url(imgs/est4.png)";
    o3.style.backgroundSize="100%";
    o4.style.background="url(imgs/est4.png)";
    o4.style.backgroundSize="100%";
    o5.style.background="url(imgs/est2.png)";
    o5.style.backgroundSize="100%";
    puntaje1.value="1";
    puntaje2.value="1";
    puntaje3.value="1";
    puntaje4.value="1";
    puntaje5.value="0";
}
function oo5(){
    o1.style.background="url(imgs/est4.png)";
    o1.style.backgroundSize="100%";
    o2.style.background="url(imgs/est4.png)";
    o2.style.backgroundSize="100%";
    o3.style.background="url(imgs/est4.png)";
    o3.style.backgroundSize="100%";
    o4.style.background="url(imgs/est4.png)";
    o4.style.backgroundSize="100%";
    o5.style.background="url(imgs/est4.png)";
    o5.style.backgroundSize="100%";
    puntaje1.value="1";
    puntaje2.value="1";
    puntaje3.value="1";
    puntaje4.value="1";
    puntaje5.value="1";
}
function cloe(){
  tema1.style.backgroundColor= "rgb(255, 198, 124)";box1.style.left= "-50%";
  tema5.style.backgroundColor= "rgb(124, 176, 255)";box5.style.left= "-50%";
  tema9.style.backgroundColor= "rgb(255, 124, 189)";box9.style.left= "-50%";
}
function bx1()  {
  if (box1.style.display!="block"){
  box1.style.display="block";
  }else{
    
  box1.style.display="none";
     cloe();
  }}
function bx5()  {
  if (tema5.style.background!="green") {      
  tema5.style.background="green";
  box5.style.display="block";
  box5.style.width="70%";
  box5.style.height="90%";
  box5.style.padding="10% 15%";
  box5.style.left="50%";
}else{
  cloe();
}}
function bx9()  {
  if (tema9.style.background!="green") {      
  tema9.style.background="green";
  box9.style.display="block";
  box9.style.width="70%";
  box9.style.height="90%";
  box9.style.padding="10% 15%";
  box9.style.left="50%";
  }else{
  cloe();
}}
function p1() {
  if (pw.style.zIndex!="5") {
    pw.style.zIndex="5";pw.style.display="flex";pw.style.opacity="1";
  }else{pw.style.zIndex="-1";pw.style.display="none";pw.style.opacity="0";}
}
function p2() {
  if (py.style.zIndex!="5") {
    py.style.zIndex="5";py.style.display="flex";py.style.opacity="1";
  }else{py.style.zIndex="-1";py.style.display="none";py.style.opacity="0";}
}
function p3() {
  if (pz.style.zIndex!="5") {
    pz.style.zIndex="5";pz.style.display="flex";pz.style.opacity="1";
  }else{pz.style.zIndex="-1";pz.style.display="none";pz.style.opacity="0";}}
function p4() {
  if (ps.style.zIndex!="5") {
    ps.style.zIndex="5";ps.style.display="flex";ps.style.opacity="1";
  }else{ps.style.zIndex="-1";ps.style.display="none";ps.style.opacity="0";}}
  function te() {    
  if (tea.value!=0 && tea.value==teb.value) {
    info1.style.display="block";
    info2.style.display="none";
    info3.style.display="none";
  }else if (tea.value!=0 && tea.value<teb.value) {
    info1.style.display="none";
    info2.style.display="block";
    info3.style.display="none";    
  }else if (tea.value!=0 && tea.value>teb.value) {
    info1.style.display="none";
    info2.style.display="none";
    info3.style.display="block";    
  }
  }
  function ta1() {
    tea.value=1;  
    te();  
  }
  function ta2() {
    tea.value=2;    
    te();
  }
  function ta3() {
    tea.value=3;    
    te();
  }
  function tb1() {
    teb.value=1;    
    te();
  }
  function tb2() {
    teb.value=2;    
    te();
  }
  function tb3() {
    teb.value=3;    
    te();
  }