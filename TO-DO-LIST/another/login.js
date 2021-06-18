(()=>{
  let sin=document.forms["login"];
    sin.addEventListener("submit",evaluate);
    function evaluate(s){
      
      let nme=sin.elements['nme'].value;
      let psswrd=sin.elements['psswrd'].value;
     
       if(!(nme=="" || psswrd=="")){
         // sin.action="run.php";
         
       }
       else{ s.preventDefault();
         if(nme==""){
             document.getElementById("uname").innerHTML=" *enter the filed";
             console.log(nme);
         }
        if(psswrd=="") {
          document.getElementById("pswrd").innerHTML=" *enter the filed";
         }

       }
    }

    let sun=document.forms["signup"];
    sun.addEventListener("submit",eval);
    function eval(a){
      let nme1=sun.elements['nme'].value;
      let mail1=sun.elements['mail'].value;
      let psswrd1=sun.elements['psswrd'].value;
      if(!(nme1=="" || psswrd1=="" || mail1=="") ){
        sun.action="signup.php";
        }
        else{
           a.preventDefault();
           if(nme1==""){ document.getElementById("u-name").innerHTML=" *enter the username";}
           if(psswrd1==""){ document.getElementById("mail-id").innerHTML=" *enter the mail";}
           if(mail1==""){ document.getElementById("psswrd-d").innerHTML=" *enter the password";}
        }
      }
})();  