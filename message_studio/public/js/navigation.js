window.onload = () => {

    var path = window.location.pathname.substring(1);
    console.log(path);
    var element = document.getElementById(path);
    console.log(element);
    element.classList.add("active");
   
    

}