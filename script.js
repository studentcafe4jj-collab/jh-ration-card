function addRow(){
 let t=document.getElementById("family");
 let r=t.insertRow();
 for(let i=0;i<4;i++){
  r.insertCell().innerHTML="<input>";
 }
 r.insertCell().innerHTML="<button onclick='this.parentNode.parentNode.remove()'>Delete</button>";
}
