<html>
<head>
<meta charset="utf-8">
    <style>
    #calosc{
    
    width:80%;
        background-color: rgb(231, 211, 27);
    margin:auto;
        padding:15px;
        padding-left: 100px;
        padding-right:100px;
        font-size: 20px;
        border: 3px solid black;
        border-radius: 5px;
        line-height: 35px;

        }
        h1{
            text-align: center;
            color:white;
            font-family: Roboto;
        }
footer{

            
            
             margin-left: 5%;
            margin-right: 5%;
           
         display: flex;
              justify-content: center;
            height: 120px;
            font-family: Verdana;
              color:gray;
              font-size: 20px;
       
            padding-top: 10px;
              align-items: center;



      
}
        h2{
            color:red;
        }
    </style>
    </head>  
    <body>
    <div id="calosc">
        <h1>Dane klienta:</h1>
<?php
      echo("<b>"."Imię:       "."     "."</b>".$_POST["imie"]."<br>");  
  
        echo("<b>"."Nazwisko:     "."</b>".$_POST["nazwisko"]."<br>"); 
         echo("<b>"."Data urodzenia:      "."</b>".$_POST["data"]."<br>");
        echo("<b>"."Płeć:       "."</b>".$_POST["plec"]."<br>");
        echo("<b>"."Email:       "."</b>".$_POST["mail"]."<br>");
        echo("<b>"."Numer telefonu:       "."</b>".$_POST["tel"]."<br>"); 
        
       
        

?>
      
          
        <hr>
        <div>
            <h1>Twoje zamówienie:</h1>
            <?php
            
            if($_POST["1"]!=0){
                if($_POST["1"]>=5){
                                 $kasety= ($_POST["1"]*10*0.9);
                    echo("Naliczono zniżkę 10%");
                    
                }
                else{
                    
                   $kasety= ($_POST["1"]*10); 
                    
                }
                
                  echo("</br>"."<b>"."Kaseta mg"."</b>".", liczba zamówionych sztuk: ".$_POST["1"]."&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp"." Koszt: "."<b>".$kasety." zł"."</b>"."&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp");
               if($kasety<($_POST["1"]*10)) echo("<b style='color:red'>"."Naliczono zniżkę 10%"."</h2>"."</b>");
               
            }
            else{
                
                
                $kasety= 0;
            }
            
                    if($_POST["2"]!=0){
                if($_POST["2"]>=5){
                                 $walkman= ($_POST["2"]*50*0.9);
                    
                    
                }
                else{
                    
                   $walkman= ($_POST["2"]*50); 
                    
                }
                
                  echo("</br>"."<b>"."Walkman"."</b>".", liczba zamówionych sztuk: ".$_POST["2"]."&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp"." Koszt: "."<b>".$walkman." zł"."</b>"."&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp");
               if($walkman<($_POST["2"]*50)) echo("<b style='color:red'>"."Naliczono zniżkę 10%"."</h2>"."</b>");
            }
            else{
                
                
                $walkman= 0;
            }
            
            
                    if($_POST["3"]!=0){
                if($_POST["3"]>=5){
                                 $discman= ($_POST["3"]*130*0.9);
                    
                    
                }
                else{
                    
                   $discman= ($_POST["3"]*130); 
                    
                }
                
                  echo("</br>"."<b>"."Discman"."</b>".", liczba zamówionych sztuk: ".$_POST["3"]."&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp"." Koszt: "."<b>".$discman." zł"."</b>"."&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp");
               if($discman<($_POST["3"]*130))echo("<b style='color:red'>"."Naliczono zniżkę 10%"."</h2>"."</b>");
               
            }
            else{
                
                
                $discman= 0;
            }
                    if($_POST["4"]!=0){
                if($_POST["4"]>=5){
                                 $bumbox= ($_POST["4"]*250*0.9);
                   
                    
                }
                else{
                    
                   $bumbox= ($_POST["4"]*250); 
                    
                }
                
                  echo("</br>"."<b>"."Bumbox"."</b>".", liczba zamówionych sztuk: ".$_POST["4"]."&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp"." Koszt: "."<b>".$bumbox." zł"."</b>"."&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp");
               if($bumbox<($_POST["4"]*250)) echo("<b style='color:red'>"."Naliczono zniżkę 10%"."</h2>"."</b>");
               
            }
            else{
                
                
                $bumbox= 0;
            }
            
            if($_POST["5"]!=0){
                if($_POST["5"]>=5){
                                 $gramofon= ($_POST["5"]*800*0.9);
                    
                    
                }
                else{
                    
                   $gramofon= ($_POST["5"]*800); 
                    
                }
                
                  echo("</br>"."<b>"."Gramofon"."</b>".", liczba zamówionych sztuk: ".$_POST["5"]."&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp"." Koszt: "."<b>".$gramofon." zł"."</b>"."&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp");
               if($gramofon<($_POST["5"]*50)) echo("<b style='color:red'>"."Naliczono zniżkę 10%"."</h2>"."</b>");
               
            }
            else{
                
                
                $gramofon= 0;
            }
            if($_POST["6"]!=0){
                if($_POST["6"]>=5){
                                 $unitra= ($_POST["6"]*400*0.9);
                    
                }
                else{
                    
                   $unitra= ($_POST["6"]*400); 
                    
                }
                
                echo("</br>"."<b>"."Magnetofon szpulowy Unitra"."</b>".", liczba zamówionych sztuk: ".$_POST["6"]."&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp"." Koszt: "."<b>".$unitra." zł"."</b>"."&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp");
               if($unitra<($_POST["6"]*400)) echo("<b style='color:red'>"."Naliczono zniżkę 10%"."</h2>"."</b>");
               
            }
            else{
                
                
                $unitra= 0;
            }
            
            if($_POST["7"]!=0){
                if($_POST["7"]>=5){
                                 $technics= ($_POST["7"]*320*0.9);
                    
                    
                }
                else{
                    
                   $technics= ($_POST["7"]*320); 
                    
                }
                
            
                 echo("</br>"."<b>"."Magnetofon Technics"."</b>".", liczba zamówionych sztuk: ".$_POST["7"]."&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp"." Koszt: "."<b>".$technics." zł"."</b>"."&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp");
               if($technics<($_POST["7"]*320)) echo("<b style='color:red'>"."Naliczono zniżkę 10%"."</h2>"."</b>");
               
            }
            else{
                
                
                $technics= 0;
            }
            
           
            if($_POST["8"]!=0){
                if($_POST["8"]>=5){
                                 $winyl= ($_POST["8"]*210*0.9);
                   
                }
                else{
                    
                   $winyl= ($_POST["8"]*210); 
                    
                }
                
                  
                echo("</br>"."<b>"."Zestaw do czyszczenia płyt winylowych"."</b>".", liczba zamówionych sztuk: ".$_POST["8"]."&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp"." Koszt: "."<b>".$winyl." zł"."</b>"."&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp");
               if($winyl<($_POST["8"]*210)) echo("<b style='color:red'>"."Naliczono zniżkę 10%"."</h2>"."</b>");
               
            }
            else{
                
                
                $winyl= 0;
            }
             if($_POST["9"]!=0){
                if($_POST["9"]>=5){
                                 $tuner= ($_POST["9"]*110*0.9);
                    
                }
                else{
                    
                   $tuner= ($_POST["9"]*110); 
                    
                }
                
                  
                 echo("</br>"."<b>"."Tuner radiowy Unitra AS 215"."</b>".", liczba zamówionych sztuk: ".$_POST["9"]."&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp"." Koszt: "."<b>".$tuner." zł"."</b>"."&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp");
               if($tuner<($_POST["9"]*110)) echo("<b style='color:red'>"."Naliczono zniżkę 10%"."</h2>"."</b>");
               
            }
            else{
                
                
                $tuner= 0;
            }
              if($_POST["10"]!=0){
                if($_POST["10"]>=5){
                                 $wzmak= ($_POST["10"]*190*0.9);
                    
                    
                }
                else{
                    
                   $wzmak= ($_POST["10"]*190); 
                    
                }
                
                  
               echo("</br>"."<b>"."Wzmacniacz Unitra Diora WS 315"."</b>".", liczba zamówionych sztuk: ".$_POST["10"]."&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp"." Koszt: "."<b>".$wzmak." zł"."</b>"."&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp");
               if($wzmak<($_POST["10"]*190)) echo("<b style='color:red'>"."Naliczono zniżkę 10%"."</h2>"."</b>");
            }
            else{
                
                
                $wzmak= 0;
            }
            echo("</br>"."<b>"."<h3>"."Całkowita kwota do zapłaty: ".($kasety+$walkman+$discman+$bumbox+$gramofon+$unitra+$technics+$winyl+$wzmak+$tuner)."zł"."</h3>"."</b>");

    
            ?>
        </div>
        </div>
<footer>
Dziękujemy za zakupy w naszym sklepie :)
</footer>
    </body>
</html>