const utga = document.getElementById("dp1");
const td1 = document.getElementById("td1");
const form = document.getElementById("form");
const sub =document.getElementById("sub");
const errorText = document.getElementById("error");
function tsag(){
    let onsar = utga.value;
    
    let xhr = new XMLHttpRequest();
    xhr.open("POST","php/checkTime.php",true);
    xhr.onload = ()=>{

      if(xhr.readyState === XMLHttpRequest.DONE)
      {
          if(xhr.status ===200){
              let data = xhr.response;
              td1.innerHTML = data;
      
          }

      }
      

  };
  xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xhr.send("time=" +onsar);

};

form.onsubmit = (e)=>{
    e.preventDefault(); //preventing form from submitting 
}

sub.onclick = ()=>{ 
    
    
    if(document.querySelector(".select")==null ){
        errorText.textContent = "Цагаа сонгоно уу";
        errorText.style.display = "block";
    }else{
        let but = document.querySelector(".select").textContent;
    

    let xhr = new XMLHttpRequest();
    
    xhr.open("POST","php/time.php",true);
    
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE)
        {
            if(xhr.status ===200){
                let data = xhr.response;
                if(data == "success"){
                    // location.href;
                    
                    errorText.textContent = "Таны цаг авах хүсэлтийг хүлээн авлаа.30 минутын дотор ирэхгүй бол таны цаг хүчингүй болохыг анхааруулъя";
                    errorText.style.display = "block";
                    
                }else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
                
            }
        }
    };
    
    // sen the form data through ajax to php
    
    // let formData= new FormData(form);
    let formData= new FormData(form);
    formData.append("tsag",but);
    xhr.send(formData); //form data to php
    // xhr.send("tsag"+but);
}
};
