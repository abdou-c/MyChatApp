const form = document.querySelector(".signup form");

continueBtn = form.querySelector(".button input");

form.onSubmit = (e)=>{
    e.preventDefault(); //preventing form from submitting
}

continueBtn.onclick = ()=>{
    //Début de l'ajax Javascript
    let xhr = new XMLHttpRequest(); //création de l'objet XML
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
            }
        }
    }
    //Nous devons envoyer les données du formulaire (ajax à PHP)
    let formData = new FormData(form); //création de l'objet formData
    xhr.send(formData); //Envoi de l'objet formData à php
}