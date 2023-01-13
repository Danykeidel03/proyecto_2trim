<?php 

    session_start();
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina_inicio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">
    
</head>
<style>

    
        #foto{
        width: 100%;
        height: 900px;
    }
#letras_img{
    position: absolute;
    margin-top: -25%;
    left: 5%;
    color: white;
    font: sans-serif;
}

body{
    margin-top: 0px;
    margin-left: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
}

/* img{
    box-sizing: border-box;
    margin: 0px
} */

#lista {
    position: absolute;
    top: 70%;
    left: 20%;
    font-size: 30px;
}

#titulo {
    font-size: 90px;
}
li {
    font-size: 30px;
}
#letras{
    font-size: 20px;
    text-align: center;
}

#cont{
    width: 200px;
    height: 130px;
    background-color: grey;
    border-radius: 10px;
    position: absolute;
    display:flex;
    justify-content: center;
    align-items: center;
    color: white;
}

#conj{
    display: flex;
    justify-content: left;
    margin-left: 30%;
}
#conj1{
    display: flex;
  justify-content: left;
    margin-left: 45%;
}
#conj2{
    display: flex;
  justify-content: left;
    margin-left: 60%;
}

#cate{
    font-size: 20px;
    grid-row: 2;
    grid-column: 1;
    width:fit-content;
    margin-left: 20%;
    margin-left: auto;
    margin-right: auto;
}

#cate1{
    grid-row: 1;
    grid-column: 1;
    margin-left: auto;
    margin-right: auto;
}

#gaudi{
    font-size: 20px;
    grid-row: 2;
    grid-column: 2;
    width:fit-content;
    margin-left: 23%;
    margin-left: auto;
    margin-right: auto;
}

#gaudi1{
    grid-row: 1;
    grid-column: 2;
    margin-left: auto;
    margin-right: auto;
}

#san{
    font-size: 20px;
    grid-row: 2;
    grid-column: 3;
    width:fit-content;
    margin-left: 30%;
    margin-left: auto;
    margin-right: auto;
}

#san1{
    grid-row: 1;
    grid-column:3;
    /* padding-right: 75%; */
    margin-left: auto;
    margin-right: auto;
}

p,h1{
    font-family: 'Cinzel', serif;
}

#si{
    margin-top: 30%;    
    margin-left: -45%;
}
#si2{
    margin-top: 30%;    
    margin-left: -27%;
}
#si3{
    margin-top: 30%;    
    margin-left: -30%;
}
#logo{
    margin-top: -20%;
    margin-left: 30%;
}
#logo2{
    margin-top: -20%;
    margin-left: 10%;
}
#logo3{
    margin-top: -20%;
    margin-left: 15%;
}
#grid{
    display: grid;
    grid-template-rows: repeat(2 1fr);
    grid-template-columns: repeat(3 1fr) ;
    gap: 0%;
    /* padding-left: 20px; */
    align-items: center;
    width: 100%;
    /* margin-left: 3%; */
}
    

    


</style>
<body>

        <?php 
            include('footer/header.php');
        ?>

        <!-- Imagen de fono y al principio de la pagina -->
        <img src="img/inicio2.png" id="foto">

        <!-- letras blancas dentro de la imagen -->
        <div id="letras_img">
            <p id="titulo">Rutas En Tu Ciudad</p>
            <div id="lista">
                <p>Planifica Tus Rutas</p>
                <p>Descubre Mas Mundo</p>
                <p>Rutas Seguras</p>
            </div>
            
        </div>
        
        <br><br>

        <!-- imagen de las personas debajo de la principal -->
        <center><img src="img/debajo.png" width="850px" height="80px"></center>

        <!-- letras de debajo de la imagen y cuadrados oscuros-->
        <p id="letras">Para Senderistas, montañistas, escaladores,ciclistas,familias...Esta pagina es el hogar <br> digital para cualquier entusiasta de las actividades al aire libre. <br> Donde podras encontrar: </p>
        <div id="conj">
            <div id="cont">
            <i class="fa-thin fa-mountain-sun"></i>
            <div id="logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-send" viewBox="0 0 16 16">
                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
            </svg>
            </div>
                <p id="si">Las Mejores Rutas</p>
            </div>
        </div>
        <div id="conj1">
            <div id="cont">
            <div id="logo2">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-airplane" viewBox="0 0 16 16">
                <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849Zm.894.448C7.111 2.02 7 2.569 7 3v4a.5.5 0 0 1-.276.447l-5.448 2.724a.5.5 0 0 0-.276.447v.792l5.418-.903a.5.5 0 0 1 .575.41l.5 3a.5.5 0 0 1-.14.437L6.708 15h2.586l-.647-.646a.5.5 0 0 1-.14-.436l.5-3a.5.5 0 0 1 .576-.411L15 11.41v-.792a.5.5 0 0 0-.276-.447L9.276 7.447A.5.5 0 0 1 9 7V3c0-.432-.11-.979-.322-1.401C8.458 1.159 8.213 1 8 1c-.213 0-.458.158-.678.599Z"/>
            </svg>
            </div>
                <p id="si2">Destinos</p>
            </div>
        </div>
        <div id="conj2">
            <div id="cont">
            <div id="logo3">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-globe-americas" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484-.08.08-.162.158-.242.234-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
            </svg>
            </div>                
            <p id="si3">Aventuras </p>
            </div>
        </div>
        <br><br><br><br><br><br><br>
        <!-- sitios mas visitados y las propias imagenes  -->
        <center><h1>Sitios mas visitados en Leon</h1></center>

        
            <div id="grid">
                <img src="img/catedral.jpg" width="450px" height="400px" id="cate1"/>
                <img src="img/botines.jpg" width="450px" height="400px" id="gaudi1"/>
                <img src="img/san.jpg" width="450px" height="400px" id="san1"/>
            
                <p id="cate">Catedral De Leon</p>
                <p id="gaudi">Palacio de Gaudi</p>
                <p id="san">San Marcos </p>
            
            </div>
        <!-- <div class="images">
        <img src="img/catedral.jpg" width="450px" height="400px" />
        <img src="img/botines.jpg" width="450px" height="400px" />
        <img src="img/san.jpg" width="450px" height="400px" />
        <br>
        <table id="imgs">
            <tr>
                <td><p id="cate">Catedral De Leon</p></td>
                <td><p id="gaudi">Palacio de Gaudi</p></td>
                <td><p id="san">San Marcos </p></td>
            </tr> -->
        <!-- </table> -->
        <!-- </div> -->
        

        <?php 
            include('footer/footer.php');
        ?>

        <!-- <center>
        <script src="javascript/pr.js">
        </script> -->
    </body>
</html>