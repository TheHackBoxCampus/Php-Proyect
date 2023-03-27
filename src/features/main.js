import archiveValid from "./archiveValid.js";

(function (){
    document.querySelector("#login_btn").addEventListener("click", (e) => {
        e.target.innerHTML.trim() == "logged-in" ? window.alert("Ya esta logueado") : window.location.href = "../src/components/login.php"
        e.target.classList.add("disabled");
    })
    archiveValid.valid_home(); 
})(); 
