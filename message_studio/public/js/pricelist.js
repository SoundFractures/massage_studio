window.onload = () => {
   
    setInterval(function(){

        console.log(window.innerWidth);

        var dot='.';
        
        var dots = Math.round(window.innerWidth/20);
        dot.repeat(dots);
        console.log(dots);//round
        console.log(dot);//round

     }, 1000);
}