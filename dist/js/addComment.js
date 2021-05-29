const form= document.getElementById("form"),
continueBtn = form.querySelector(".btn"),
errorText = document.getElementById("alert");

form.onsubmit = (e)=>{
    e.preventDefault(); //preventing form from submitting 
}
continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST","php/addComment.php",true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE)
        {
            if(xhr.status ===200){
                let data = xhr.response;
                if(data == "success"){
                    errorText.textContent = "Таны сэтгэгдлийг бид хүлээн авлаа";
                    errorText.style.display = "block";
                    

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