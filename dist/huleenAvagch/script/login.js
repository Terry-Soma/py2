const form= document.getElementById("form"),
continueBtn = form.querySelector(".btn"),
errorText = form.querySelector(".error-txt");

form.onsubmit = (e)=>{
    e.preventDefault(); //preventing form from submitting 
}
continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST","php/login.php",true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE)
        {
            if(xhr.status ===200){
                let data = xhr.response;
                if(data == "success"){
                    location.href = "index.php";
 
                }else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
                
            }
        }
    };

    // sen the form data through ajax to php

    let formData= new FormData(form);
    xhr.send(formData); //form data to php
};