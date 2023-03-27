export default {
    url_props: {
        url_Actualy: window.location,
    },
    valid_home() {
        let btn = document.querySelector("#home"); 
        btn.addEventListener("click", (e) => {
            if (this.url_props.url_Actualy == "http://localhost/php/public/"  || 
            this.url_props.url_Actualy == "http://localhost/php/public/#") e.target.href = "#"
            if(this.url_props.url_Actualy == "http://localhost/php/src/components/portfolio.php#" || 
            this.url_props.url_Actualy == "http://localhost/php/src/components/portfolio.php") e.target.href = "../../public";  
        });              
    }    
}