<?php

function addProvider(){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
        if (isset($_POST["name_company"]) AND empty($_POST["name_company"])){
            
            $notfill_Err = 'Il faut renseigner une compagnie !';
        
        }
        else{
        
            $name_compagny = htmlspecialchars($_POST[""]);
    
            if(!preg_match("#[a-zA-Z]#",$name_compagny)){ 
                
                $notfill_Err = 'le prenom n\'est pas valide !';
              
                
            }
         }
    }
}
