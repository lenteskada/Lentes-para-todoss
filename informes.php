<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informes</title>
    <style>
        @font-face {
            font-family:'LetraCheri' ;
            src: url('letracheri.TTF')format('truetype');
        }
        .body{
            background: pink;
            font-family:'LetraCheri', sans-serif;
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
            letter-spacing: 2.2vw;
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
        .principal{
            display: flex;
        
        }
        .contenedor1{
          background-color: #C7B8EA;
          width: 150px;
          padding: 35px;
          margin-left: 160px;
          margin-top: 150px;
          font-family: sans-serif;
          border-radius: 10px;
         border: 1px solid #432B7A;
        }
        .contenedor2{
          background-color: #C7B8EA;
          width: 150px;
          padding: 35px;
          margin-left: 40px;
          margin-top: 150px;
          font-family: sans-serif;
          border-radius: 10px;
         border: 1px solid #432B7A;
        }
        .contenedor3{
          background-color: #C7B8EA;
          width: 150px;
          padding: 35px;
          margin-left: 40px;
          margin-top: 150px;
          position: relative;
          font-family: sans-serif;
          border-radius: 10px;
         border: 1px solid #432B7A;
        }
        .lentes{
            position: absolute;
            top:60%;
            left:50%;
            transform: translate(-50%, -50%);

            
        }

    </style>

</head>
<body bgcolor="pink">
    <ul>
        <li>I</li>
        <li>N</li>
        <li>F</li>
        <li>O</li>
        <li>R</li>
        <li>M</li>
        <li>E</li>
        <li>S</li>
    </ul>
    <div class="principal">
<div class="contenedor1">
   Se realizará un exámen visual para todos los alumnos que lo necesitan.<br>
   Se hará un exámen socioeconómico para determinar si serán totalmente
   gratuitos o si se les aplicará un descuento.
</div>
<div class="contenedor2">
<h2>Fecha: </h2>
    11/09/2024
<h2>Lugar: </h2>
    Cecytea Cd. Satélite Morelos
<h2>Hora: </h2>
    11:00 a.m.
</div>  
<div class="contenedor3">
    <h3>Tendrán para escoger el armazón que más les guste</h3>
    <img class="lentes" src="armalentes.jpg" alt="">
    </div>
    </div> 
</body>
</html>
