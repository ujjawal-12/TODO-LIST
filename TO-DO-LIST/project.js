 let btn=document.getElementById("set");
 btn.addEventListener("click",run);
 
 function run() { 
  let ok = document.querySelector('#chk').value;
  let tnode = document.createTextNode(ok);
  let litem = document.createElement('li');
  litem.style.color = 'white';
  litem.style.margin = '8px';
  litem.style.fontStyle = 'italic'
  litem.style.fontSize = 'larger'
  litem.appendChild(tnode);
  // console.log(litem);
  let getnode = document.getElementById('item');
  getnode.appendChild(litem);
  document.querySelector('#chk').value = '';
  litem.onclick = function (e) { e.target.remove(); };
  
}