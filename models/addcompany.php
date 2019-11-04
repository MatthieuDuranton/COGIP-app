<?php



    if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
        if (isset($_POST["name_company"]) AND empty($_POST["name_company"])){
            
            $notfill_Err = 'Il faut renseigner une compagnie !';
        
        }
        else{
        
            $name_compagny = htmlspecialchars($_POST["name_compagny"]);
    
            if(!preg_match("#[a-zA-Z]#",$name_compagny)){ 
                
                $notfill_Err = 'la company n\'est pas valide !';
              
                
            }
         }
        // tva

        if(isset($_POST["tva"]) AND empty($_POST["tva"])){

            $notfill_Err = 'Il faut renseigner un numéro de tva!';            
        
        }
        else{
            $name_compagny = htmlspecialchars($_POST["tva"]);

            if(!preg_match("",$tva)){
               
                $notfill_Err = 'le numéro de tva n\'est pas valide !';
            }
        }

        // nationality

        if(isset($_POST["nationalité"]) AND empty($_POST["nationalité"])){

            $notfill_Err = 'Il faut renseigner une nationalité !';            
        
        }
        else{
            $name_compagny = htmlspecialchars($_POST["nationalité"]);

            if(!preg_match("",$nationalité)){
               
                $notfill_Err = 'la nationalité n\'est pas valide !';
            }
        }

        // Role

        if(isset($_POST["role"]) AND empty($_POST["role"])){

            $notfill_Err = 'Il faut renseigner un role!';            
        
        }
        else{
            $name_compagny = htmlspecialchars($_POST["role"]);

            if(!preg_match("",$role)){
               
                $notfill_Err = 'le role n\'est pas valide !';
            }
        }
       
        $req = $bd-> exec("INSERT INTO company(company_name, vat, fk_country, fk_type) VALUES(:nomDeCompagnie, :numTva, :nationalité, :numRole");
        $req -> execute(array(

            'nomDeCompagnie' => $$name_compagny,
            'numTva' => $$tva,
            'nationalité' => $nationalité,
            'numRole' => $role
        ));

        echo 'L\'ajout a bien été rajouté !';

    }

