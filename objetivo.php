<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Objetivo</title>
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
          .info{
         background-color: #C7B8EA;  
         position: absolute;
         top: 45%;
         left: 50%;
         transform: translate(-50%, -50%);
         display: flex; 
         border-radius: 10px;
         border: 1px solid #432B7A;
         padding: 10px;
        }
        .info h3{
        font-family:'LetraCheri', sans-serif;
        }
            </style>
</head>
<body bgcolor="pink">
    <ul>
        <li>O</li>
        <li>B</li>
        <li>J</li>
        <li>E</li>
        <li>T</li>
        <li>I</li>
        <li>V</li>
        <li>O</li>
    </ul>
<div class="info">
     <h3>El objetivo de este proyecto es brindar un apoyo para los alumnos que requieran lentes
     con un apoyo de acuerdo a sus posibilidades económicas.</h3>
</div>
</body>
<html>