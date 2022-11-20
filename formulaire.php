<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire de renseignement</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
    <title>bulletin de temperature</title>
</head>
<?php
       session_start(); 
       function  MoiGodbless_crypt($mot,$clef){

        $Lclef=strlen($clef);//
        $Lmot = strlen($mot); //
    
        if($Lclef < $Lmot){
           
            
            $clef = str_pad($clef, $Lmot,$Lclef,STR_PAD_RIGHT); 
    
    
        }
    
           elseif($Lclef > $Lmot){
    
            
    
              $jh = $Lclef - $Lmot ;
              $_clefs = substr($clef,0,$jh); 
    
           }
           
            return $mot ^ $clef ; 
    
    } 
 
      
      $cleactiver= "1v@@@@@_§!ui@@#{[]}"; 
      $Clef  = md5(md5("$*METEO__APPINGENIEURJOELMONDO££µ%¨£/_"));
      $cleh = MoiGodbless_crypt($cleactiver, $Clef);
  if( $_SESSION["clefj"]!=$cleh)//c'est la clé qui autorise l'accès au formulaire
 { header("location:index.php"); 
 }
 /* if( $_SESSION["clefj"]!=$cleh)//c'est la clé qui autorise l'accès au formulaire
 { header("location:index.php"); 
 } */
 ?>

<body>
    <div id="map"></div>
    <form>

        <button class="btn btn-primary" id="Envoyer" type="submit">Sauvegarder</button>
        <button class="btn btn-primary" id="actualiser">Actualiser</button>
        <table class="t1 t2">
            <caption>Bullettin mettelsat</caption>
            <br />
            <tr>
                <th>
                    <label name="libele" class="libele">
                        Date valide
                    </label>
                </th>
                <th>
                    <label name="Phenomene" id="Phenomene">
                        Phenomene
                    </label>
                </th>
                <th>
                    <label name="tempmMin" id="tempMin">
                        T°Min (°C)
                    </label>
                </th>
                <th>
                    <label name="tempMax" id="tempMax">
                        T°Max (°C)
                    </label>
                </th>
                <th>
                    <label name="dirVit" id="dirVit">
                        Direction et vitesse du vent(Km/h)
                    </label>
                </th>
                <th>
                    <label name="EauPrec" id="EauPrec">
                        Eau Precipitable(mm)
                    </label>
                </th>
                <th>
                    <label name="risqueValue" id="risqueValue">
                        risqueValue
                    </label>
                </th>
            </tr>
            <tr>
                <td>
                    <label name="kinshasa" id="kinshasa">
                        1. Kinshasa
                    </label>
                </td>
                <td>
                    <select name="phenoKin" id="phenoKin">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" name="tempMinKin" id="tempMinKin" />
                </td>
                <td>
                    <input type="number" name="tempMaxKin" id="tempMaxKin" />
                </td>
                <td>
                    <select name="dirKin" id="dirKin">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinKin" /> - <input type="number" id="presMaxKin" /> mm
                </td>
            </tr>
            <tr>

            <tr>
                <td>
                    <label name="kinshasa" id="kinshasa">
                        2. Bandundu
                    </label>
                </td>
                <td>
                    <select name="phenoBan" id="phenoBan">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinBan" />
                </td>
                <td>
                    <input type="number" id="tempMaxBan" />
                </td>
                <td>
                    <select name="dirBan" id="dirBan">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" /> - <input type="number" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="hUele" id="hUele">
                        3. Haut-Uele
                    </label>
                </td>
                <td>
                    <select name="phenoHUel" id="phenoHUel">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinHUel" />
                </td>
                <td>
                    <input type="number" id="tempMaxHUel" />
                </td>
                <td>
                    <select name="dirHUel" id="dirHUel">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinHUel" /> - <input type="number" id="presMaxHUel" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="kongoCentral" id="congoCentral">
                        4. Kongo Central
                    </label>
                </td>
                <td>
                    <select name="phenoKCent" id="phenoKCent">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinKCent" />
                </td>
                <td>
                    <input type="number" id="tempMaxKCent" />
                </td>
                <td>
                    <select name="dirKCent" id="dirKCent">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinKCent" /> - <input type="number" id="presMaxKCent" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="kwango" id="kwango">
                        5. Kwango
                    </label>
                </td>
                <td>
                    <select name="phenoKwa" id="phenoKwa">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinKwa" />
                </td>
                <td>
                    <input type="number" id="tempMaxKwa" />
                </td>
                <td>
                    <select name="selectPheno" id="selectPheno">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinKaw" /> - <input type="number" id="presMaxKaw" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="kwilu" id="kwilu">
                        6. Kwilu
                    </label>
                </td>
                <td>
                    <select name="phenoKwi" id="pheno6">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinKwi" />
                </td>
                <td>
                    <input type="number" id="tempMaxKwi" />
                </td>
                <td>
                    <select name="dirKwi" id="dirKwi">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinKwi" /> - <input type="number" id="presMaxKwi" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="maindombe" id="maindombe">
                        7. Maindombe
                    </label>
                </td>
                <td>
                    <select name="pheno" id="pheno7">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinMai" />
                </td>
                <td>
                    <input type="number" id="tempMaxMai" />
                </td>
                <td>
                    <select name="dirMai" id="dirMai">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinMai" /> - <input type="number" id="presMaxMai" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="kasai" id="kasai">
                        8. Kasai
                    </label>
                </td>
                <td>
                    <select name="pheno" id="pheno8">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinKas" />
                </td>
                <td>
                    <input type="number" id="tempMaxKas" />
                </td>
                <td>
                    <select name="dirKas" id="dirKas">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinKas" /> - <input type="number" id="presMaxKas" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="equateur" id="equateur">
                        9. Equateur
                    </label>
                </td>
                <td>
                    <select name="pheno" id="pheno9">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinEqua" />
                </td>
                <td>
                    <input type="number" id="tempMaxEqua" />
                </td>
                <td>
                    <select name="dirEqua" id="dirEqua">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinEqua" /> - <input type="number" id="presMaxEqua" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="kasaiCentral" id="KasaiCentral">
                        10. Kasai Central
                    </label>
                </td>
                <td>
                    <select name="phenoC" id="pheno10">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinKasC" />
                </td>
                <td>
                    <input type="number" id="tempMaxKasC" />
                </td>
                <td>
                    <select name="dirKasC" id="dirKasC">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinKasC" /> - <input type="number" id="presMaxKasC" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="sankuru" id="sankuru">
                        11. Sankuru
                    </label>
                </td>
                <td>
                    <select name="phenok" id="pheno11">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinSank" />
                </td>
                <td>
                    <input type="number" id="tempMaxSank" />
                </td>
                <td>
                    <select name="dirSank" id="dirSank">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinSank" /> - <input type="number" id="presMaxSank" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="tshuapa" id="tshuapa">
                        12. Tshuapa
                    </label>
                </td>
                <td>
                    <select name="phenoua" id="pheno12">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinTshua" />
                </td>
                <td>
                    <input type="number" id="tempMaxTshua" />
                </td>
                <td>
                    <select name="dirTshua" id="dirTshua">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinTshua" /> - <input type="number" id="presMaxTshua" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="mongala" id="mongala">
                        13. Mongala
                    </label>
                </td>
                <td>
                    <select name="phenog" id="pheno13">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinMong" />
                </td>
                <td>
                    <input type="number" id="tempMaxMong" />
                </td>
                <td>
                    <select name="dirMong" id="dirMong">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinMong" /> - <input type="number" id="presMaxMong" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="sudUbangi" id="sudUbnagi">
                        14. Sud Ubangi
                    </label>
                </td>
                <td>
                    <select name="phenoa" id="pheno14">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinSUba" />
                </td>
                <td>
                    <input type="number" id="tempMaxSUba" />
                </td>
                <td>
                    <select name="dirSUba" id="dirSUba">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinSUba" /> - <input type="number" id="presMaxSUba" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="NordUbangi" id="NordUbangi">
                        15. Nord Ubangi
                    </label>
                </td>
                <td>
                    <select name="phenoa" id="pheno15">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinNUba" />
                </td>
                <td>
                    <input type="number" id="tempMaxNUba" />
                </td>
                <td>
                    <select name="dirNUba" id="dirNUba">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinNUba" /> - <input type="number" id="presMaxNUba" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="basUele" id="basUele">
                        16. Bas-Uele
                    </label>
                </td>
                <td>
                    <select name="phenol" id="pheno16">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinBUel" />
                </td>
                <td>
                    <input type="number" id="tempMaxBUel" />
                </td>
                <td>
                    <select name="dirBUel" id="dirBUel">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinBUel" /> - <input type="number" id="presMaxBUel" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="tshopo" id="tshopo">
                        17. Tshopo
                    </label>
                </td>
                <td>
                    <select name="pheno17" id="pheno17">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinTsho" />
                </td>
                <td>
                    <input type="number" id="tempMaxTsho" />
                </td>
                <td>
                    <select name="selectPheno" id="selectPheno">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinTsho" /> - <input type="number" id="presMaxTsho" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="maniema" id="maniema">
                        18. Maniema
                    </label>
                </td>
                <td>
                    <select name="pheno" id="pheno18">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinMan" />
                </td>
                <td>
                    <input type="number" id="tempMaxMan" />
                </td>
                <td>
                    <select name="dirMan" id="dirMan">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinMan" /> - <input type="number" id="presMaxMan" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="lomamie" id="lomamie">
                        19. Lomamie
                    </label>
                </td>
                <td>
                    <select name="pheno" id="pheno19">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinLom" />
                </td>
                <td>
                    <input type="number" id="tempMaxLom" />
                </td>
                <td>
                    <select name="dirLom" id="dirLom">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinLom" /> - <input type="number" id="presMaxLom" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="hautLomamie" id="hautLomamie">
                        20. Haut-Lomamie
                    </label>
                </td>
                <td>
                    <select name="phenom" id="pheno20">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinHLom" />
                </td>
                <td>
                    <input type="number" id="tempMaxHLom" />
                </td>
                <td>
                    <select name="dirHLom" id="dirHLom">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinHLom" /> - <input type="number" id="presMaxHLom" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="lualaba" id="lualaba">
                        21. Lualaba
                    </label>
                </td>
                <td>
                    <select name="pheno" id="pheno21">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinLua" />
                </td>
                <td>
                    <input type="number" id="tempMaxLua" />
                </td>
                <td>
                    <select name="dirLua" id="dirLua">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinLua" /> - <input type="number" id="presMaxLua" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="hautKatanga" id="hautKatanga">
                        22. Haut-Katanga
                    </label>
                </td>
                <td>
                    <select name="phenot" id="pheno22">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinHKat" />
                </td>
                <td>
                    <input type="number" id="tempMaxHKat" />
                </td>
                <td>
                    <select name="dirHKat" id="dirHKat">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinHKat" /> - <input type="number" id="presMaxHkat" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="tanganyka" id="tanganyka">
                        23. Tanganyka
                    </label>
                </td>
                <td>
                    <select name="phenog" id="pheno23">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinTang" />
                </td>
                <td>
                    <input type="number" id="tempMaxTang" />
                </td>
                <td>
                    <select name="dirTang" id="dirTang">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinTang" /> - <input type="number" id="presMaxTang" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="sudKivu" id="sudKivu">
                        24. Sud-Kivu
                    </label>
                </td>
                <td>
                    <select name="phenov" id="pheno25">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinSKiv" />
                </td>
                <td>
                    <input type="number" id="tempMaxSkiv" />
                </td>
                <td>
                    <select name="dirSKiv" id="dirSKiv">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinSKiv" /> - <input type="number" id="presMaxSKiv" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="nordKivu" id="nordKivu">
                        25. Nord-Kivu
                    </label>
                </td>
                <td>
                    <select name="phenov" id="pheno26">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinNKiv" />
                </td>
                <td>
                    <input type="number" id="tempMaxNKiv" />
                </td>
                <td>
                    <select name="dirNKiv" id="dirNKiv">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinNKiv" /> - <input type="number" id="presMaxNKiv" /> mm
                </td>
            </tr>
            <tr>
                <td>
                    <label name="ituri" id="ituri">
                        26. Ituri
                    </label>
                </td>
                <td>
                    <select name="pheno" id="pheno27">
                        <option value="">--Please choose an option--</option>
                        <option value="cielNuageux">Ciel nuageux avec eclaircis</option>
                        <option value="oragePluie">Orage avec pluies</option>
                        <option value="nuagePluie">nuageux avec pluies</option>
                        <option value="ensoleillé">Ensoleillé</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="tempMinItu" />
                </td>
                <td>
                    <input type="number" id="tempMaxItu" />
                </td>
                <td>
                    <select name="dirItu" id="dirItu">
                        <option value="">--Please choose an option--</option>
                        <option value="est">Est</option>
                        <option value="Ouest">Ouest</option>
                        <option value="nord">nord</option>
                        <option value="sud">Sud</option>
                        <option value="Sud-Est">Sud-Est</option>
                        <option value="Sud-Ouest">Sud-Ouest</option>
                        <option value="Nord-Est">Nord-Est</option>
                        <option value="Nord-Ouest">Nord-Ouest</option>
                    </select>
                </td>
                <td>
                    <input type="number" id="presMinItu" /> - <input type="number" id="presMaxItu" /> mm
                </td>
            </tr>
        </table>
    </form>
    <script src="./jquery.js"></script>
    <script>
        $(document).ready(function () {
            const parcThabor = {
                lat: -3.1496523254397295,
                lng: 24.17242279326707,
            }
            //taille de zoom
            const zoomLevel = 5;
            //creation de la map
            const map = L.map('map').setView([parcThabor.lat, parcThabor.lng], zoomLevel);

            /*      L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                       maxZoom: 5,
                        minZoom: 5,
                        attribution: '© OpenStreetMap'
                    }).addTo(map);
            */
            //creation du calque
            var openStreetMap_DE = L.tileLayer('https://{s}.tile.openstreetmap.de/{z}/{x}/{y}.png', {
                maxZoom: 5,
                minZoom: 5,
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
            //creation des icons
            var soleil = L.icon({
                iconUrl: './images/PNG/soleil1.png',
                shadowUrl: './images/marker-shadow.png',
                iconSize: [40, 40],
                shadowSize: [50, 50],
                iconAnchor: [42, 35],
                shadowAnchor: [39, 45],
                popupAnchor: [0, 0]

            });
            var pluie = L.icon({
                iconUrl: './images/PNG/pluie1.png',
                shadowUrl: './images/marker-shadow.png',
                iconSize: [40, 40],
                shadowSize: [50, 45],
                iconAnchor: [42, 35],
                shadowAnchor: [39, 45],
                popupAnchor: [0, 0]

            });
            var orage = L.icon({
                iconUrl: './images/PNG/orage1.png',
                shadowUrl: './images/marker-shadow.png',
                iconSize: [40, 40],
                shadowSize: [50, 50],
                iconAnchor: [42, 35],
                shadowAnchor: [39, 45],
                popupAnchor: [0, 0]

            });
            var cielGris = L.icon({
                iconUrl: './images/PNG/cielgris1.png',
                shadowUrl: './images/marker-shadow.png',
                iconSize: [40, 25],
                shadowSize: [40, 40],
                iconAnchor: [42, 40],
                shadowAnchor: [39, 45],
                popupAnchor: [0, 0]

            });
            var nuageux = L.icon({
                iconUrl: './images/PNG/nuageux1.png',
                shadowUrl: './images/marker-shadow.png',
                iconSize: [50, 35],
                shadowSize: [50, 50],
                iconAnchor: [42, 35],
                shadowAnchor: [39, 45],
                popupAnchor: [0, 0]

            });
            var pop = L.popup({
                offset: (42,35)
            })
            //ajout de marker et leurs icons


            /*Sauvergarder les données dans une sessionStorage*/

            $('#Envoyer').click(function (e) {
                if ($('#phenoKin').val() || $('#tempMinKin').val() || $('#tempMaxKin').val() !== '') {
                    sessionStorage.setItem('phenoKin', $('#phenoKin').val());
                    sessionStorage.setItem('tempMinKin', $('#tempMinKin').val());
                    sessionStorage.setItem('tempMaxKin', $('#tempMaxKin').val());
                }
                if ($('#phenoBan').val() || $('#tempMinBan').val() || $('#tempMaxBan').val() !== '') {
                    sessionStorage.setItem('phenoBan', $('#phenoBan').val());
                    sessionStorage.setItem('tempMinBan', $('#tempMinBan').val());
                    sessionStorage.setItem('tempMaxBan', $('#tempMaxBan').val());
                    
                }
                if ($('#phenoHUel').val() || $('#tempMinHUel').val() || $('#tempMaxHUel').val() !== '') {
                    sessionStorage.setItem('phenoHUel', $('#phenoHUel').val());
                    sessionStorage.setItem('tempMinHUel', $('#tempMinHUel').val());
                    sessionStorage.setItem('tempMaxHUel', $('#tempMaxHUel').val());
                    
                }
                if ($('#phenoKCent').val() || $('#tempMinKCent').val() || $('#tempMaxKCent').val() !== '') {
                    sessionStorage.setItem('phenoKCent', $('#phenoKCent').val());
                    sessionStorage.setItem('tempMinKCent', $('#tempMinKCent').val());
                    sessionStorage.setItem('tempMaxKCent', $('#tempMaxKCent').val());
                    
                }
                if ($('#phenoKwa').val() || $('#tempMinKwa').val() || $('#tempMaxKwa').val() !== '') {
                    sessionStorage.setItem('phenoKwa', $('#phenoKwa').val());
                    sessionStorage.setItem('tempMinKwa', $('#tempMinKwa').val());
                    sessionStorage.setItem('tempMaxKwa', $('#tempMaxKwa').val());
                    
                }
                if ($('#pheno6').val() || $('#tempMinKwi').val() || $('#tempMaxKwi').val() !== '') {
                    sessionStorage.setItem('pheno6', $('#pheno6').val());
                    sessionStorage.setItem('tempMinKwi', $('#tempMinKwi').val());
                    sessionStorage.setItem('tempMaxKwi', $('#tempMaxKwi').val());
                    
                }
                if ($('#pheno7').val() || $('#tempMinMai').val() || $('#tempMaxMai').val() !== '') {
                    sessionStorage.setItem('pheno7', $('#pheno7').val());
                    sessionStorage.setItem('tempMinMai', $('#tempMinMai').val());
                    sessionStorage.setItem('tempMaxMai', $('#tempMaxMai').val());
                    
                }
                if ($('#pheno8').val() || $('#tempMinKas').val() || $('#tempMaxKas').val() !== '') {
                    sessionStorage.setItem('pheno8', $('#pheno8').val());
                    sessionStorage.setItem('tempMinKas', $('#tempMinKas').val());
                    sessionStorage.setItem('tempMaxKas', $('#tempMaxKas').val());
                    
                }
                if ($('#pheno9').val() || $('#tempMinEqua').val() || $('#tempMaxEqua').val() !== '') {
                    sessionStorage.setItem('pheno9', $('#pheno9').val());
                    sessionStorage.setItem('tempMinEqua', $('#tempMinEqua').val());
                    sessionStorage.setItem('tempMaxEqua', $('#tempMaxEqua').val());
                    
                }
                if ($('#pheno10').val() || $('#tempMinKasC').val() || $('#tempMaxKasC').val() !== '') {
                    sessionStorage.setItem('pheno10', $('#pheno10').val());
                    sessionStorage.setItem('tempMinKasC', $('#tempMinKasC').val());
                    sessionStorage.setItem('tempMaxKasC', $('#tempMaxKasC').val());
                    
                }
                if ($('#pheno11').val() || $('#tempMinSank').val() || $('#tempMaxSank').val() !== '') {
                    sessionStorage.setItem('pheno11', $('#pheno11').val());
                    sessionStorage.setItem('tempMinSank', $('#tempMinSank').val());
                    sessionStorage.setItem('tempMaxSank', $('#tempMaxSank').val());
                    
                }
                if ($('#pheno12').val() || $('#tempMinTshua').val() || $('#tempMaxTshua').val() !== '') {
                    sessionStorage.setItem('pheno12', $('#pheno12').val());
                    sessionStorage.setItem('tempMinTshua', $('#tempMinTshua').val());
                    sessionStorage.setItem('tempMaxTshua', $('#tempMaxTshua').val());

                }
                if ($('#pheno13').val() || $('#tempMinMong').val() || $('#tempMaxMong').val() !== '') {
                    sessionStorage.setItem('pheno13', $('#pheno13').val());
                    sessionStorage.setItem('tempMinMong', $('#tempMinMong').val());
                    sessionStorage.setItem('tempMaxMong', $('#tempMaxMong').val());
                    
                }
                if ($('#pheno14').val() || $('#tempMinSUba').val() || $('#tempMaxSUba').val() !== '') {
                    sessionStorage.setItem('pheno14', $('#pheno14').val());
                    sessionStorage.setItem('tempMinSUba', $('#tempMinSUba').val());
                    sessionStorage.setItem('tempMaxSUba', $('#tempMaxSUba').val());
                    
                }
                if ($('#pheno15').val() || $('#tempMinNUba').val() || $('#tempMaxNUba').val() !== '') {
                    sessionStorage.setItem('pheno15', $('#pheno15').val());
                    sessionStorage.setItem('tempMinNUba', $('#tempMinNUba').val());
                    sessionStorage.setItem('tempMaxNUba', $('#tempMaxNUba').val());
                    
                }
                if ($('#pheno16').val() || $('#tempMinBUel').val() || $('#tempMaxBUel').val() !== '') {
                    sessionStorage.setItem('pheno16', $('#pheno16').val());
                    sessionStorage.setItem('tempMinBUel', $('#tempMinBUel').val());
                    sessionStorage.setItem('tempMaxBUel', $('#tempMaxBUel').val());
                    
                }
                if ($('#pheno17').val() || $('#tempMinTsho').val() || $('#tempMaxTsho').val() !== '') {
                    sessionStorage.setItem('pheno17', $('#pheno17').val());
                    sessionStorage.setItem('tempMinTsho', $('#tempMinTsho').val());
                    sessionStorage.setItem('tempMaxTsho', $('#tempMaxTsho').val());
                    
                }
                if ($('#pheno18').val() || $('#tempMinMan').val() || $('#tempMaxMan').val() !== '') {
                    sessionStorage.setItem('pheno18', $('#pheno18').val());
                    sessionStorage.setItem('tempMinMan', $('#tempMinMan').val());
                    sessionStorage.setItem('tempMaxMan', $('#tempMaxMan').val());
                    
                }
                if ($('#pheno19').val() || $('#tempMinLom').val() || $('#tempMaxLom').val() !== '') {
                    sessionStorage.setItem('pheno19', $('#pheno19').val());
                    sessionStorage.setItem('tempMinLom', $('#tempMinLom').val());
                    sessionStorage.setItem('tempMaxLom', $('#tempMaxLom').val());

                    
                }
                if ($('#pheno20').val() || $('#tempMinHLom').val() || $('#tempMaxHLom').val() !== '') {
                    sessionStorage.setItem('pheno20', $('#pheno20').val());
                    sessionStorage.setItem('tempMinHLom', $('#tempMinHLom').val());
                    sessionStorage.setItem('tempMaxHLom', $('#tempMaxHLom').val());
                    
                }
                if ($('#pheno21').val() || $('#tempMinLua').val() || $('#tempMaxLua').val() !== '') {
                    sessionStorage.setItem('pheno21', $('#pheno21').val());
                    sessionStorage.setItem('tempMinLua', $('#tempMinLua').val());
                    sessionStorage.setItem('tempMaxLua', $('#tempMaxLua').val());
                    
                }
                if ($('#pheno22').val() || $('#tempMinHKat').val() || $('#tempMaxHKat').val() !== '') {
                    sessionStorage.setItem('pheno22', $('#pheno22').val());
                    sessionStorage.setItem('tempMinHKat', $('#tempMinHKat').val());
                    sessionStorage.setItem('tempMaxHKat', $('#tempMaxHKat').val());
                    
                }
                if ($('#pheno23').val() || $('#tempMinTang').val() || $('#tempMaxTang').val() !== '') {
                    sessionStorage.setItem('pheno23', $('#pheno23').val());
                    sessionStorage.setItem('tempMinTang', $('#tempMinTang').val());
                    sessionStorage.setItem('tempMaxTang', $('#tempMaxTang').val());
                    
                }
                if ($('#pheno24').val() || $('#tempMinSKiv').val() || $('#tempMaxSKiv').val() !== '') {
                    sessionStorage.setItem('pheno24', $('#pheno24').val());
                    sessionStorage.setItem('tempMinSKiv', $('#tempMinSKiv').val());
                    sessionStorage.setItem('tempMaxSKiv', $('#tempMaxSKiv').val());
                    
                }
                if ($('#pheno25').val() || $('#tempMinNKiv').val() || $('#tempMaxNKiv').val() !== '') {
                    sessionStorage.setItem('pheno25', $('#pheno25').val());
                    sessionStorage.setItem('tempMinNKiv', $('#tempMinNKiv').val());
                    sessionStorage.setItem('tempMaxNKiv', $('#tempMaxNKiv').val());
                    
                }
                if ($('#pheno22').val() || $('#tempMinItu').val() || $('#tempMaxItu').val() !== '') {
                    sessionStorage.setItem('pheno26', $('#pheno26').val());
                    sessionStorage.setItem('tempMinItu', $('#tempMinItu').val());
                    sessionStorage.setItem('tempMaxItu', $('#tempMaxItu').val());
                    
                }if ($('#pheno27').val() || $('#tempMinItu').val() || $('#tempMaxItu').val() !== '') {
                    sessionStorage.setItem('pheno27', $('#pheno27').val());
                    sessionStorage.setItem('tempMinItu', $('#tempMinItu').val());
                    sessionStorage.setItem('tempMaxItu', $('#tempMaxItu').val());
        
                }
                    
                /* recuperation des informations temperatures et directions du vent pour kinshasa uniquement */
                    sessionStorage.setItem('tempMin', $('#tempMinIn').val());
                    sessionStorage.setItem('tempMax', $('#tempMaxIn').val());
                    sessionStorage.setItem('dirKin', $('#dirKin').val()); 
                    sessionStorage.setItem('preMin', $('#presMinKin').val());
                    sessionStorage.setItem('preMax', $('#presMaxKin').val());
                /* recuperation des informations temperatures et directions du vent pour kinshasa uniquement */
                

            });

            $('#actualiser').on('click', function (e) {
                e.preventDefault();
                var pheno = [
                    sessionStorage.getItem('phenoKin'),
                    sessionStorage.getItem('phenoBan'),
                    sessionStorage.getItem('phenoHUel'),
                    sessionStorage.getItem('phenoKCent'),
                    sessionStorage.getItem('phenoKwa'),
                    sessionStorage.getItem('pheno6'),
                    sessionStorage.getItem('pheno7'),
                    sessionStorage.getItem('pheno8'),
                    sessionStorage.getItem('pheno9'),
                    sessionStorage.getItem('pheno10'),
                    sessionStorage.getItem('pheno11'),
                    sessionStorage.getItem('pheno12'),
                    sessionStorage.getItem('pheno13'),
                    sessionStorage.getItem('pheno14'),
                    sessionStorage.getItem('pheno15'),
                    sessionStorage.getItem('pheno16'),
                    sessionStorage.getItem('pheno17'),
                    sessionStorage.getItem('pheno18'),
                    sessionStorage.getItem('pheno19'),
                    sessionStorage.getItem('pheno20'),
                    sessionStorage.getItem('pheno21'),
                    sessionStorage.getItem('pheno22'),
                    sessionStorage.getItem('pheno23'),
                    sessionStorage.getItem('pheno24'),
                    sessionStorage.getItem('pheno25'),
                    sessionStorage.getItem('pheno26'),
                    sessionStorage.getItem('pheno27')

                ];
                
                const V1 = {
                    sun: L.marker([-4.601182592343627, 16.28230698852354], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kinshasa</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKin')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKin')+'<span/></p>'+
                        '</center>'
                        ),
                    nuages: L.marker([-4.601182592343627, 16.28230698852354], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kinshasa</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKin')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKin')+'<span/></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-4.601182592343627, 16.28230698852354], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kinshasa</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKin')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKin')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-4.601182592343627, 16.28230698852354], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kinshasa</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKin')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKin')+'</sapn></p>'+
                        '<center/>'
                        ),
                }
                const V2 = {
                    sun: L.marker([-4.984365759943966, 18.810533788896517], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Bandundu</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinBan')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxBan')+'</sapn></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-4.984365759943966, 18.810533788896517], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Bandundu</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinBan')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxBan')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-4.984365759943966, 18.810533788896517], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Bandundu</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orange avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinBan')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxBan')+'</sapn></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-4.984365759943966, 18.810533788896517], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Bandundu</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinBan')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxBan')+'</sapn></p>'+
                        '<center/>'
                        ),
                };
                const V3 = {
                    sun: L.marker([3.158029, 29.410376], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Haut-Uele</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinHUel')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxHUel')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([3.158029, 29.410376], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Haut-Uele</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinHUel')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxHUel')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([3.158029, 29.410376], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Haut-Uele</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinHUel')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxHUel')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([3.158029, 29.410376], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Haut-Uele</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinHUel')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxHUel')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V4 = {
                    sun: L.marker([-5.741355, 14.886933], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kongo Central</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKCent')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKcent')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-5.741355, 14.886933], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kongo Central</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKCent')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKCent')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-5.741355, 14.886933], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kongo Central</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKCent')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKCent')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-5.741355, 14.886933], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kongo Central</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKCent')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKCent')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V5 = {
                    sun: L.marker([-7.378996, 18.701263], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kwago</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKwa')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKwa')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-7.378996, 18.701263], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kwago</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKwa')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKwa')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-7.378996, 18.701263], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kwago</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKwa')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKwa')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-7.378996, 18.701263], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kwago</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKwa')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKwa')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V6 = {
                    sun: L.marker([-3.4828943094735356, 17.516566699193763], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kwilu</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKwi')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKwi')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-3.4828943094735356, 17.516566699193763], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kwilu</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKwi')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKwi')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-3.4828943094735356, 17.516566699193763], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kwilu</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKwi')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKwi')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-3.4828943094735356, 17.516566699193763], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kwilu</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKwi')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKwi')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V7 = {
                    sun: L.marker([-3.162522, 19.506401], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Maindombe</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinMai')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxMai')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-3.162522, 19.506401], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Maindombe</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinMai')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxMai')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-3.162522, 19.506401], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Maindombe</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinMai')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxMai')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-3.162522, 19.506401], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Maindombe</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinMai')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxMai')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V8 = {
                    sun: L.marker([-3.759058, 22.071509], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kasai</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKas')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKas')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-3.759058, 22.071509], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kasai</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKas')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKas')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-3.759058, 22.071509], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kasai</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKas')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKas')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-3.759058, 22.071509], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kasai</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKas')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKas')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V9 = {
                    sun: L.marker([-0.148381, 19.80852], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Equateur</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinEqua')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxEqua')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-0.148381, 19.80852], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Equateur</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinEqua')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxEqua')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-0.148381, 19.80852], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Equateur</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinEqua')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxEqua')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-0.148381, 19.80852], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Equateur</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinEqua')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxEqua')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V10 = {
                    sun: L.marker([-7.323279, 23.082251], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kasai Central</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKasC')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKasC')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-7.323279, 23.082251], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kasai Central</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKasC')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKasC')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-7.323279, 23.082251], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kasai Central</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKasC')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKasC')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-7.323279, 23.082251], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Kasai Central</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinKasC')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxKasC')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V11 = {
                    sun: L.marker([-6.308785, 23.939185], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Sankuru</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinSank')+'</span'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxSank')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-6.308785, 23.939185], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Sankuru</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinSank')+'</span'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxSank')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-6.308785, 23.939185], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Sankuru</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinSank')+'</span'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxSank')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-6.308785, 23.939185], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Sankuru</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinSank')+'</span'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxSank')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V12 = {
                    sun: L.marker([-2.936497, 24.521460], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Sankuru</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensolleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinSank')+'</span'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxSank')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-2.936497, 24.521460], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Sankuru</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinSank')+'</span'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxSank')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-2.936497, 24.521460], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Sankuru</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinSank')+'</span'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxSank')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-2.936497, 24.521460], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Sankuru</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinSank')+'</span'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxSank')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V13 = {
                    sun: L.marker([-1.296342, 22.362846], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Mongala</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinMong')+'</span'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxMong')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-1.296342, 22.362846], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Mongala</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinMong')+'</span'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxMong')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-1.296342, 22.362846], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Mongala</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinMong')+'</span'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxMong')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-1.296342, 22.362846], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Mongala</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinMong')+'</span'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxMong')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V14 = {
                    sun: L.marker([1.500522, 21.796851], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Sud-Ubangi</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinSUba')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxSUba')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([1.500522, 21.796851], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Sud-Ubangi</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinSUba')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxSUba')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([1.500522, 21.796851], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Sud-Ubangi</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinSUba')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxSUba')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([1.500522, 21.796851], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Sud-Ubangi</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinSUba')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxSUba')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V15 = {
                    sun: L.marker([2.477704, 20.148901], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Nord-Ubangi</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinNUba')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxNUba')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([2.477704, 20.148901], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Nord-Ubangi</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinNUba')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxNUba')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([2.477704, 20.148901], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Nord-Ubangi</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinNUba')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxNUba')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([2.477704, 20.148901], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Nord-Ubangi</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinNUba')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxNUba')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V16 = {
                    sun: L.marker([3.201907, 22.225317], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Bas-Uele</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinBUel')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxBUel')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([3.201907, 22.225317], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Bas-Uele</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinBUel')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxBUel')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([3.201907, 22.225317], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Bas-Uele</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinBUel')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxBUel')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([3.201907, 22.225317], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Bas-Uele</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinBUel')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxBUel')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V17 = {
                    sun: L.marker([3.223845, 26.158423], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Tshopo</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinTsho')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxTsho')+'</sapn></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([3.223845, 26.158423], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Tshopo</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinTsho')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxTsho')+'</sapn></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([3.223845, 26.158423], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Tshopo</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinTsho')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxTsho')+'</sapn></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([3.223845, 26.158423], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Tshopo</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinTsho')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxTsho')+'</sapn></p>'+
                        '<center/>'
                        ),
                };
                const V18 = {
                    sun: L.marker([-0.029880, 25.984536], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Maniema</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensolleilé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinMan')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxMan')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-0.029880, 25.984536], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Maniema</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinMan')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxMan')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-0.029880, 25.984536], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Maniema</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinMan')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxMan')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-0.029880, 25.984536], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Maniema</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinMan')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxMan')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V19 = {
                    sun: L.marker([-4.153622, 26.938452], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Lomami</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinLom')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxLom')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-4.153622, 26.938452], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Lomami</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinLom')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxLom')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-4.153622, 26.938452], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Lomami</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinLom')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxLom')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-4.153622, 26.938452], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Lomami</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinLom')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxLom')+'</span></p>'+
                        '<center/>'

                        ),
                };
                const V20 = {
                    sun: L.marker([-6.155886, 25.971655], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Haut-Lomami</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinHLom')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxHLom')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-6.155886, 25.971655], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Haut-Lomami</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinHLom')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxHLom')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-6.155886, 25.971655], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Haut-Lomami</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinHLom')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxHLom')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-6.155886, 25.971655], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Haut-Lomami</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinHLom')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxHLom')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V21 = {
                    sun: L.marker([-8.615554, 26.396717], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Lualaba</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinLua')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxLua')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-8.615554, 26.396717], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Lualaba</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinLua')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxLua')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-8.615554, 26.396717], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Lualaba</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinLua')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxLua')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-8.615554, 26.396717], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Lualaba</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinLua')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxLua')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V22 = {
                    sun: L.marker([-10.610468, 24.103492], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Haut-Katanga</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinHKat')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxHKat')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-10.610468, 24.103492], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Haut-Katanga</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinHKat')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxHKat')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-10.610468, 24.103492], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Haut-Katanga</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinHKat')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxHKat')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-10.610468, 24.103492], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Haut-Katanga</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinHKat')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxHKat')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V23 = {
                    sun: L.marker([-11.617903, 28.307737], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Tanganyka</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinTang')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxTang')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-11.617903, 28.307737], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Tanganyka</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinTang')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxTang')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-11.617903, 28.307737], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Tanganyka</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinTang')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxTang')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-11.617903, 28.307737], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Tanganyka</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinTang')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxTang')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V24 = {
                    sun: L.marker([-5.774244677491197, 29.177237467736163], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Sud-Kivu</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinSKiv')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxSKiv')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-5.774244677491197, 29.177237467736163], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Sud-Kivu</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinSKiv')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxSKiv')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-5.774244677491197, 29.177237467736163], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Sud-Kivu</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinSKiv')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxSKiv')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-5.774244677491197, 29.177237467736163], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Sud-Kivu</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinSKiv')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxSKiv')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V25 = {
                    sun: L.marker([-3.935566, 28.877739], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Nord-Kivu</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinNKiv')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxNKiv')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-3.935566, 28.877739], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Nord-Kivu</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinNKiv')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxNKiv')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-3.935566, 28.877739], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Nord-Kivu</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinNKiv')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxNKiv')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-3.935566, 28.877739], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Nord-Kivu</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinNKiv')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxNKiv')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V26 = {
                    sun: L.marker([-1.573144091486702, 29.250535502258046], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Ituri</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinItu')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxItu')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-1.573144091486702, 29.250535502258046], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Ituri</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinItu')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxItu')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-1.573144091486702, 29.250535502258046], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Ituri</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinItu')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxItu')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-1.573144091486702, 29.250535502258046], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Ituri</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinItu')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxItu')+'</span></p>'+
                        '<center/>'
                        ),
                };
                const V27 = {
                    sun: L.marker([-1.573144091486702, 29.250535502258046], { icon: soleil }).bindPopup(
                        '<center>'+
                        '<p id="ville">Ituri</p>'+ 
                        '<p><img src="./images/PNG/soleil1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Ensoleillé</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinItu')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxItu')+'</span></p>'+
                        '<center/>'
                        ),
                    nuages: L.marker([-1.573144091486702, 29.250535502258046], { icon: nuageux }).bindPopup(
                        '<center>'+
                        '<p id="ville">Ituri</p>'+ 
                        '<p><img src="./images/PNG/nuageux1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Nuageux</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinItu')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxItu')+'</span></p>'+
                        '<center/>'
                        ),
                    orages: L.marker([-1.573144091486702, 29.250535502258046], { icon: orage }).bindPopup(
                        '<center>'+
                        '<p id="ville">Ituri</p>'+ 
                        '<p><img src="./images/PNG/orage1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Orage avec pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinItu')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxItu')+'</span></p>'+
                        '<center/>'
                        ),
                    rain: L.marker([-1.573144091486702, 29.250535502258046], { icon: pluie }).bindPopup(
                        '<center>'+
                        '<p id="ville">Ituri</p>'+ 
                        '<p><img src="./images/PNG/pluie1.png" alt="logo icon" /></p>'+
                        '<p id="libele">Pluie</p>'+
                        '<p> Min : <span id="temps">'+sessionStorage.getItem('tempMinItu')+'</span>'+
                        '  Max : <span id="temps">'+sessionStorage.getItem('tempMaxItu')+'</span></p>'+
                        '<center/>'
                        ),
                };

                const ville = [
                    V1,
                    V2,
                    V3,
                    V4,
                    V5,
                    V6,
                    V7,
                    V8,
                    V9,
                    V10,
                    V11,
                    V12,
                    V13,
                    V14,
                    V15,
                    V16,
                    V17,
                    V18,
                    V19,
                    V20,
                    V21,
                    V22,
                    V23,
                    V24,
                    V25,
                    V26,
                    V27
                ]
                for (let index = 0; index < pheno.length; index++) {
                    if (pheno[index] === "ensoleillé") {
                        ville[index].sun.addTo(map);
                    } else if (pheno[index] === "cielNuageux") {
                        ville[index].nuages.addTo(map);
                    } else if (pheno[index] === "oragePluie") {
                        ville[index].orages.addTo(map);
                    } else if (pheno[index] === "nuagePluie") {
                        ville[index].rain.addTo(map);
                    }

                }

                /*var kinshasa = L.marker([-4.601182592343627, 16.28230698852354], { icon: pluie }).addTo(map);
                var bandundu = L.marker([-4.984365759943966, 18.810533788896517], { icon: pluie }).addTo(map);
                var hautUele = L.marker([3.158029, 29.410376], { icon: pluie }).addTo(map);
                var kongoCentral = L.marker([-5.741355, 14.886933], { icon: pluie }).addTo(map);
                var kwango = L.marker([-7.378996, 18.701263], { icon: pluie }).addTo(map);
                var kwilu = L.marker([-3.4828943094735356, 17.516566699193763], { icon: pluie }).addTo(map);
                var maindombe = L.marker([-3.162522, 19.506401], { icon: pluie }).addTo(map);
                var kasai = L.marker([-3.759058, 22.071509], { icon: pluie }).addTo(map);
                var equateur = L.marker([-0.148381, 19.808525], { icon: pluie }).addTo(map);
                var kasaiCentral = L.marker([-7.323279, 23.082251], { icon: pluie }).addTo(map);
                var kasaiOriental = L.marker([-6.308785, 23.939185], { icon: pluie }).addTo(map);
                var sankuru = L.marker([-2.936497, 24.521460], { icon: pluie }).addTo(map);
                var tshuapa = L.marker([-1.296342, 22.362846], { icon: pluie }).addTo(map);
                var mongala = L.marker([1.500522, 21.796851], { icon: pluie }).addTo(map);
                var sudUbangi = L.marker([2.477704, 20.148901], { icon: pluie }).addTo(map);
                var nordUbangi = L.marker([3.201907, 22.225317], { icon: pluie }).addTo(map);
                var basUele = L.marker([3.223845, 26.158423], { icon: pluie }).addTo(map);
                var tshopo = L.marker([-0.029880, 25.984536], { icon: pluie }).addTo(map);
                var maniema = L.marker([-4.153622, 26.938452], { icon: pluie }).addTo(map);
                var lomami = L.marker([-6.155886, 25.971655], { icon: pluie }).addTo(map);
                var hautLomami = L.marker([-8.615554, 26.396717], { icon: pluie }).addTo(map);
                var lualaba = L.marker([-10.610468, 24.103492], { icon: pluie }).addTo(map);
                var hautKatanga = L.marker([-11.617903, 28.307737], { icon: pluie }).addTo(map);
                var tanganyka = L.marker([-5.774244677491197, 29.177237467736163], { icon: pluie }).addTo(map);
                var sudKivu = L.marker([-3.935566, 28.877739], { icon: pluie }).addTo(map);
                var nordKivu = L.marker([-1.573144091486702, 29.250535502258046], { icon: pluie }).addTo(map);
                var ituri = L.marker([1.071038, 30.014824], { icon: pluie }).addTo(map);*/

            });
            console.log(sessionStorage.getItem('phenoKin'));
            console.log(sessionStorage.getItem('phenoBan'));
            console.log(sessionStorage.getItem('phenoHUel'));
            console.log(sessionStorage.getItem('phenoKCent'));
            console.log(sessionStorage.getItem('phenoKwa'));
            console.log(sessionStorage.getItem('pheno6'));
            console.log(sessionStorage.getItem('pheno7'));
            console.log(sessionStorage.getItem('pheno8'));
            console.log(sessionStorage.getItem('pheno9'));
            console.log(sessionStorage.getItem('pheno10'));
            console.log(sessionStorage.getItem('pheno11'));
            console.log(sessionStorage.getItem('pheno12'));
            console.log(sessionStorage.getItem('pheno13'));
            console.log(sessionStorage.getItem('pheno14'));
            console.log(sessionStorage.getItem('pheno15'));
            console.log(sessionStorage.getItem('pheno16'));
            console.log(sessionStorage.getItem('pheno17'));
            console.log(sessionStorage.getItem('pheno18'));
            console.log(sessionStorage.getItem('pheno19'));
            console.log(sessionStorage.getItem('pheno20'));
            console.log(sessionStorage.getItem('pheno21'));
            console.log(sessionStorage.getItem('pheno22'));
            console.log(sessionStorage.getItem('pheno23'));
            console.log(sessionStorage.getItem('pheno24'));
            console.log(sessionStorage.getItem('pheno25'));
            console.log(sessionStorage.getItem('pheno26'));
            console.log(sessionStorage.getItem('pheno27'));



        })
    </script>
</body>

</html>