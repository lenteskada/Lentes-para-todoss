<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evidencia</title>
    <style>
      @font-face {
            font-family:'LetraCheri' ;
            src: url('letracheri.TTF')format('truetype');
        }
        ul{
         
         position: absolute;
         top: 12%;
         left: 50%;
         transform: translate(-50%, -50%);
         display: flex;   
        }
        ul li{
            list-style: none;
            font-weight: 500;
            font-family:'LetraCheri', sans-serif;
            font-size: 10vw;
            letter-spacing: 1.5vw;
            color: #555;
            text-shadow: none;
            animation: anim 1s infinite linear;
        }
        @keyframes anim{
            0%{
                color: #555;
                text-shadow: none;
            }
            18%{
                color: #555;
                text-shadow: none;
            }
            20%{
                color: #4169E1;
                text-shadow: 0 0 1vw #0047AB,
                0 0 3vw #00BFFF;
            }
            30%{
                color: #555;
                text-shadow: none;
            }
            35%{
                color: #4169E1;
                text-shadow: 0 0 1vw #0047AB,
                0 0 3vw #00BFFF;
            }
            70%{
                color: #555;
                text-shadow: none;
            }
            85%{
                color: #4169E1;
                text-shadow: 0 0 1vw #0047AB,
                0 0 3vw #00BFFF;
            }
            90%{
                color: #555;
                text-shadow: none;
            }
            100%{
                color: #555;
                text-shadow: none;
            }
            }
        .planeado{
         background-color: #C7B8EA;  
         position: absolute;
         top: 170%;
         left: 50%;
         transform: translate(-50%, -50%);
         display: flex; 
         border-radius: 10px;
         border: 1px solid #432B7A;
         padding: 10px;
        }
        .contenedor h2{
        font-family:'LetraCheri', sans-serif;
        } 
            
     </style>

</head>
<body bgcolor="pink">
<ul>
        <li>E</li>
        <li>V</li>
        <li>I</li>
        <li>D</li>
        <li>E</li>
        <li>N</li>
        <li>C</li>
        <li>I</li>
        <li>A</li>
        <li>S</li>
    </ul>
<script language="javascript" type="text/javascript">
    var SeceunciaID=null
    var imagen=0
    var duracion=1000
    {imagenes=new CreaArray(4)
     imagenes[1].src="gale1.jpg"
     imagenes[2].src="gale2.jpg"
     imagenes[3].src="gale3.jpg"
     imagenes[4].src="gale4.jpg"
    }
    function CreaArray(n){
     this.length=n
     for(var i=1;i<=n;i++){
       this[i]=new Image() 
     }  
     return this 
    }
    function MostrarSecuencia(){
     {   
     document.images["secuencia"].src=imagenes[imagen].src
     imagen++
     if(imagen==5){
      imagen=1
     }   
    }
    SecuenciaID=setTimeout("MostrarSecuencia()",duracion)
    SecuenciaEjecutandose=true
   }
   function IniciarSecuencia(){
    imagen=1
    MostrarSecuencia()
   }
   function crecer(){
    secuencia.width=1200;
    secuencia.height=900;
   }
   function acortar(){
    secuencia.width=750;
    secuencia.height=550;
   }
 </script>
  <body onload="IniciarSecuencia()">
  <center><br><br><br><br><br><br><br>
  <p><img src="gale6.jpg" id="imagen" alt="Secuencia" name="secuencia"
   width="600" height="400" border=5></p></center>
   <div class="contenedor">
   <center> <h2>LO PLANEADO<h2></center>
   <img class="planeado" src="comic.jpg" alt="">
  
    </div>
</body>
</html>