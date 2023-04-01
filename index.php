<html>
<head>
<title>
    i consigli di "nome influencer"
</title>
</head>
<body class="body">
   
  
    <div class="banner">
        <button class="tasto" onclick="mostra()">
            tasto menu
        </button>
       CONTENITORE ALTO BANNER
        
    </div>
    
        <div class="scatola">
        
        <div class="lato" id="lato">no
            <div class="solidi">
            <img src="SOLIDO.png" width=100%;>
            <img src="SOLIDO.png" width=50; height=50px; class="immaginesolida">
            </div>
        </div>

    <div class="scatole">
    
        <div>
           

            <div><img src="Ideasito.png" class="immagine">
            </div>
            <div>
                Testo descrizione immagine
            </div>
            <div>
                <a href="nop"><button class="compra">bottone compra</button></a>
            </div>
        </div>
        <div>
            <div><img src="Ideasito.png" class="immagine" >
            </div>
            <div>
                Testo descrizione immagine
            </div>
            <div>
                <a href="nop"><button class="compra">bottone compra</button></a>
            </div>
        </div>
        <div>
            <div><img src="Ideasito.png" class="immagine">
            </div>
            <div>
                Testo descrizione immagine
            </div>
            <div>
                <a href="nop"><button class="compra">bottone compra</button></a>
            </div>
        </div>
        <div>
            <div><img src="Ideasito.png" class="immagine">
            </div>
            <div>
                Testo descrizione immagine
            </div>
            <div>
                <a href="nop"><button class="compra">bottone compra</button></a>
            </div>
        </div>
        <div>
            <div><img src="Ideasito.png" class="immagine">
            </div>
            <div>
                Testo descrizione immagine
            </div>
            <div>
                <a href="nop"><button class="compra">bottone compra</button></a>
            </div>
        </div>
        <div>
            <div><img src="Ideasito.png" class="immagine">
            </div>
            <div>
                Testo descrizione immagine
            </div>
            <div>
                <a href="nop"><button class="compra">bottone compra</button></a>
            </div>
        </div>
        <div>
            <div><img src="Ideasito.png" class="immagine">
            </div>
            <div>
                Testo descrizione immagine
            </div>
            <div>
                <a href="nop"><button class="compra">bottone compra</button></a>
            </div>
        </div>
        <div>
            <div><img src="Ideasito.png" class="immagine">
            </div>
            <div>
                Testo descrizione immagine
            </div>
            <div>
                <a href="nop"><button class="compra">bottone compra</button></a>
            </div>
        </div>



    </div>
    
</body>
</html>
<style>
    .tasto{
        background-color: red;
        border-width:0px;
        z-index:0;
        display:inline-block;
        position:absolute;
        left:5px;
        cursor:pointer;
        
    }
    
    .scatola{
    padding-top:105;
    display:flex;
    flex-wrap:nowrap;
    z-index:1;

   }
    
    .banner{
        position:fixed;
      
        height:65px;
        left:0;
        right:0;
        top:0;
        padding-left:10px;
        padding-top:40px;
        
        background-color: rgb(40, 47, 55);
        z-index:2;
        text-align:center;

        

    }
    .body{
        margin:0;
        
    }
    .scatole{
        background-color: aqua;
        display:flex;
        flex-direction:row;
        flex-wrap:wrap;
        justify-content: space-evenly;
        align-items:flex-start;
        

    }
    .compra{
        background-color:black;
        color:white;
        cursor:pointer;


    }
    
    .compra:hover{
        background-color: rgb(28, 26, 26);
    }
    
   .immagine{
    width:300;
    height:400;
   }
 
   .lato{
    width:200px;
    background-color: green;
    display:none;
    flex-wrap:wrap;
    flex-direction:column;
    

   }
     
   .immaginesolida{
    padding-top:10px; 
    display:block;
   }
   .solidi{
    display:block;
    padding:15%;
   }

  
</style>
<script>
    function mostra(){
var lato=document.getElementById("lato");
if(lato.style.display=== "none")
{lato.style.display="flex";}
else{
    lato.style.display="none";
}

    }
</script>
<?php
$doc=newDOMDocumnent();
$doc->loadHTMLFile('index.html')
$scatole=$doc->getElementbyClass('scatole')[0];
            
$conn=mysqli_connect('host','username','password','nome database')

    $query= SELECT immagine FROM tabella WHERE true;
    $queryB= SELECT link FROM tabella   WHERE true; 
    $text=ciao;
    while($text=true){
    $risultato=mysqli_query ('$conn', '$queryB');
    $riga=mysqli_fetch_assoc ($risultato);
    $result=mysqli_query ('$conn','$query');
    $row=mysqli_fetch_assoc($result);
    $text=$row['immagine'];
    $link=$riga['link'];
    $immagine=$doc->createElement('div');
    $immagine->setAttribute('class','immagine');
    $immagine->nodeValue=$text;
    $linkbottone=$doc-> createElement('a')
    $linkbottone->setAttribute('href','$link')
    $linkbottone->setAttribute('class','compra')
    $scatolina=$doc->createElement('div');
    $scatola=$doc->getElementbyClass('scatole');
    $scatola->appendChild($scatolina);
    $scatolina->appendChild($immagine);
    $scatolina->appendChild($linkbottone);
    echo $doc->saveHTML();}

    

 ?>