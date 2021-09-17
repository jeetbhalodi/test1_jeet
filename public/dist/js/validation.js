

let firstnameNode;
let errNode1;
let lastnameNode;
let errNode2;
let emailNode;
let errNode3;
let phoneNode;
let errNode4;
let cityNode;
let errNode5;
let imageNode;
let errNode7;

let formNode;
$(function(){
    firstnameNode=$("#first_name");
    errNode1=$("#err1");
    lastnameNode=$("#last_name");
    errNode2=$("#err2");
    emailNode=$("#email");
    errNode3=$("#err3");
   cityNode=$("#city");
    errNode4=$("#err4");
    phoneNode=$("#phone");
    errNode5=$("#err5");
    imageNode=$("#image");
    errNode7=$("#err7");
    formNode=$('#first_form');
    firstnameNode.blur(function(){
        validate1();
    });         
    lastnameNode.blur(function(){
        validate2();
    });
    emailNode.blur(function(){
        validate3();
    });
    phoneNode.blur(function(){
        validate4();
    });
    cityNode.blur(function(){
        validate5();
    });
    imageNode.blur(function(){
        validate6();
    });
    formNode.submit(()=>validateForm());
});
function validate1(){
    errNode1.html(" ");
    firstnameNode.css({border:'2px green solid',backgroundColor:'yellow'});
    let name=firstnameNode.val();
    if(name===""){
        errNode1.html("<b>this field is required.</b>");
        firstnameNode.css({border:'2px red solid',backgroundColor:'pink'});
        return false;
    }
    else
        return true;
}
function validate2(){
    errNode2.html(" ");
    lastnameNode.css({border:'2px green solid',backgroundColor:'yellow'});
    let name=lastnameNode.val();
    if(name===""){
        errNode2.html("<b>this field is required.</b>");
        lastnameNode.css({border:'2px red solid',backgroundColor:'pink'});
        return false;
    }
    else
        return true;
}
function validate3(){
    errNode3.html("");
    emailNode.css({border:'2px green solid',backgroundColor:'yellow'});
    let email=emailNode.val();
    let ss=email.substring(email.indexOf('@')+1);
    if(email===""){
        errNode3.html("<b>this field is required.</b>");
        emailNode.css({border:'2px red solid',backgroundColor:'pink'});
        return false;
    }
    else if(!email.includes("@") || ss=="" && email.length){

      
        errNode3.html("<b>Invalid email ID and duplicate not valid.</b>");
        emailNode.css({border:'2px red solid',backgroundColor:'pink'});
        return false;
    }
    else
        return true;

}
function validate4(){
    errNode4.html("");
    phoneNode.css({border:'2px green solid',backgroundColor:'yellow'});
    let phone=phoneNode.val();
    let regexpress=new RegExp("^\+?[0-9]{13}$");
    if(phone===""){
        errNode4.html("<b>this field is required.</b>");
        phoneNode.css({border:'2px red solid',backgroundColor:'pink'});
        return false;
    }
    else if(!regexpress.test(phone)&& phone.length){
        errNode4.html("<b>Password should be aplhanumeric* and not use duplicate</b>");
        phoneNode.css({border:'2px red solid',backgroundColor:'pink'});
        return false;
    }
    else
        return true;

}
   
function validate5(){
    errNode5.html("");
    cityNode.css({border:'2px green solid',backgroundColor:'yellow'});
    let city=cityNode.val();
    if(city===""){
        errNode5.html("<b>this field is required.</b>");
        cityNode.css({border:'2px red solid',backgroundColor:'pink'});
        return false;
    }
    else
        return true;
}

function validate6()
{
    errNode7.html("");
    imageNode.css({border:'2px green solid',backgroundColor:'yellow'});
    let image=imageNode.val();
    var allowedExtensions = 
    /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(image==="")
    {
        errNode7.html("<b>this field is required.</b>");
        imageNode.css({border:'2px red solid',backgroundColor:'pink'});
        return false;
    }
    else if (!allowedExtensions.exec(image)) {
        errNode7.html("<b>Invalid file type</b>");
        imageNode.css({border:'2px red solid',backgroundColor:'pink'});
        return false;
    } 
    else
    return true;
}
function radio_check() {

    var x = $("input[type = 'radio']:checked");
    if (!x.length > 0) {
      $('#checkRadio').show();
      $('#checkRadio').html('Status field is required');
      return false;
    }
    else {
      $('#checkRadio').hide();
      return true;
    }
  }
  function gender_check() {

    var x = $("input[type = 'radio']:checked");
    if (!x.length > 0) {
      $('#gender').show();
      $('#gender').html('Gender field is required');
      return false;
    }
    else {
      $('#gender').hide();
      return true;
    }
  }

function validateForm(){
    let st1=validate1();
    let st2=validate2();
    let st3=validate3();
    let st4=validate4();
    let st5=validate5();
    let st8=validate6();
    let st6=radio_check();
    let st7=gender_check();
    return(st1 && st2 && st3 && st4 && st5 && st8 && st6 && st7);
}