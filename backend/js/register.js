let form = document.querySelector("form"),
btn=form.querySelector("input[type='submit']"),
msg=form.querySelector(".msg");

form.onsubmit=(e) =>{
    e.preventDefault();
}
btn.onclick=() =>{
    let xhr = new XMLHttpRequest();
    xhr.open('POST','./backend/php/register.php',true);
    xhr.onload=()=>{
        if(xhr.readyState===xhr.DONE){
            if(xhr.status===200){
                let data=xhr.response;
                if(data=="sucess"){
                    location.href='./index.html';

                }
                else{
                    msg.innerHTML=data;
                    msg.style.display='block';

                }
            }
        }
    }
    let formdata=new FormData(form);
    xhr.send(formdata);
}
