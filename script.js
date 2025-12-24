function generate(){
let members=[];
for(let i=1;i<=10;i++){
let n=document.getElementById("name"+i).value;
if(n!=""){
members.push({
n:n,
g:document.getElementById("gender"+i).value,
a:document.getElementById("age"+i).value,
r:document.getElementById("rel"+i).value
});
}
}

let data={
rationno:document.getElementById("rationno").value,
holder:document.getElementById("holder").value,
father:document.getElementById("father").value,
members:members
};

localStorage.setItem("ration",JSON.stringify(data));
window.location="ration-card.html";
}
