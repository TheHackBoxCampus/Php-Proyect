(function (){
    document.querySelector("#login_btn").addEventListener("click", (e) => {
        window.location.href = "../src/components/login.php"        
        e.target.classList.add("disabled");
    }); 
})(); 
