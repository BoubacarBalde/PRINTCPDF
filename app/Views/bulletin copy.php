<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
</head>
<body>
<a href="<?= base_url('print')?>" class="btn btn-primary">Imprimer</a>

<div style="display:flex; align-items:center; justify-content:center">
    <div style="border: 1px solid black; box-shadow:0px 0px 5px black; padding:1%;background-color:rgb(255, 252, 252);">
        <table style=" margin: 0 auto;">
            <tr>
              <th style="width: 20%;">
                <img src="<?= base_url('UBO.jpg')?>" alt="" width="150">
              </th>
              <th style="width: 80%;">
                  <table>
                     <tr>
                       <th style="font-size:20px; font-weight:bold; text-align:center">République de guinée</th>
                     </tr>
                     <tr>
                       <td style="text-align:center;"><span style="color: red">Travail-----</span><span style="color: rgb(249, 186, 11);"> Justice-----</span><span style="color:green"> Solidarité</span></td>
                     </tr>
                     <tr>
                      <td style="text-align:center;font-weight:bold;">Ministère de l'Enseignement, de la Recherche Scientifique et de l'Innovation</td>
                    </tr>
                    <tr>
                      <td style="text-align:center;font-weight:bold;">Direction Générale de L'Enseignement Supérieur</td>                  </tr>
                  </table>
              </th>
            </tr>
          </table><br><br>
          
          <!-- Titre, sous titre  -->
          <div style="width:100%; text-align:center; font-weight:bold; font-size:xx-large; font-style:normal">
            UNIVERSITE BARACK OBAMA
          </div>
          <div style="width:auto;height:3px;background-color:black;"></div>
          <div style="text-decoration: underline; text-align:center">RELEVE ANNUEL DE NOTES</div>
          
          <table style="margin:0 auto;">
           <tr>
              <th style="width: 45%;">
                <p style="font-weight: bold;">DEPARTEMENT: <span>GENIE INFROMATIQUE</span></p>
                <p style="font-weight: bold;">MATRICULE: <span>B1121 92GI</span></p>
                <p style="font-weight: bold;">NOM: <span>BALDE</span></p>
                <p style="font-weight: bold;">PRENOM: <span>BOUBACAR</span></p>
              </th>
              <th style="width: 10%;"></th>
              <th style="width: 45%;">
                <p style="font-weight: bold;">NIVEAU: <span>LICENCE 4</span></p>
                <p style="font-weight: bold;">ANNEE UNIVERSITAIRE: <span>2023-2024</span></p>
              </th>
           </tr>
          </table><br>
  
          <!-- Table matiere -->
          <table style="margin:0 auto; border-collapse: collapse; font-size: 13px;text-align:left;">
            <thead>
              <tr>
                <th width="4%"  rowspan="2" style="border: 1px solid #0c0202">N°</th>
                <th width="37%" rowspan="2" style="border: 1px solid #0c0202">MATIERES</th>
                <th width="12%" rowspan="2" style="border: 1px solid #0c0202">SEMESTRE</th>
                <th width="10%" rowspan="2" style="border: 1px solid #0c0202">CREDITS</th>
                <th width="8%"  rowspan="2" style="border: 1px solid #0c0202">NOTES</th>
                <th width="28%" style="text-align:center;border: 1px solid #0c0202" colspan="2">VALEUR</th> <!-- Fusion des colonnes 6 et 7 -->
              </tr>
              <tr>
                <th width="14%" style="border: 1px solid #0c0202">LITTERALE</th>
                <th width="14%" style="border: 1px solid #0c0202">NUMERIQUE</th>
              </tr>
            </thead>
            <tbody>
            <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo '
                    <tbody>
                        <tr>
                            <td width="4%"  style="padding:12px; border: 1px solid #0c0202">' . $i . '</td>
                            <td width="37%" style="padding:12px; border: 1px solid #0c0202">WINDEV</td>
                            <td width="12%" style="padding:12px; border: 1px solid #0c0202; text-align:center">5</td>
                            <td width="10%" style="padding:12px; border: 1px solid #0c0202; text-align:center">6</td>
                            <td width="8%"  style="padding:12px; border: 1px solid #0c0202; text-align:center">5</td>
                            <td width="14%" style="padding:12px; border: 1px solid #0c0202; text-align:center">D</td>
                            <td width="14%" style="padding:12px; border: 1px solid #0c0202; text-align:center">1</td>
                        </tr>
                    </tbody>';
                }
                ?>
            </tbody>
            <tfoot>
              <tr>
                  <th colspan="5" style="padding:12px;border: 1px solid #0c0202;text-align:center">MOYENNE CUMULATIVE</th>
                  <th style="padding:12px;border: 1px solid #0c0202; text-align:center">C</th>
                  <th style="padding:12px;border: 1px solid #0c0202; text-align:center">2.3</th>
                </tr>
            </tfoot>
          </table>
          
           <!-- Legende -->
           <table style="margin:0 auto">
             <tr>
                <td width="100%" style="font-weight: bold;">
                  <div>Legende:</div>
                  <div>A: EXCELLENT = 4&nbsp;&nbsp;&nbsp;B:&nbsp;&nbsp;&nbsp;TRES BIEN = 3&nbsp;&nbsp;&nbsp;C:  BIEN = 2</div>
                  <div>D: PASSABLE = 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E:&nbsp;&nbsp;&nbsp;&nbsp;FAIBLE = 0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F:  ECHEC = 0</div>
                </td>
             </tr>
             <tr>
                <td width="50%"></td>
                <td width="50%" style="text-align:right; font-style:italic;"> Conakry, le 16/08/2024</td>
             </tr>
           </table><br><br>
          
          <table style="margin:0 auto">
              <tr>
                <td width="30%" style="font-style:italic;">Le chef de Département</td>
                <td width="30%"></td>
                <td width="37%" style="text-align:right;font-style:italic;">Le chef de service de la scolarité</td>
              </tr>
           </table><br><br><br><br><br><br>
          
           <table style="margin:0 auto">
            <tr>
              <td width="30%" style="font-style:italic;">M. Amadou Tidiane BAH</td>
              <td width="30%"></td>
              <td width="37%" style="text-align:right;font-style:italic;">M. Ousmane DIABY</td>
            </tr>
          </table>
          
          <!-- Footer  -->
          <div style="width:auto;height:3px;background-color:black;"></div>
          <table style="margin:0 auto; text-align: center;">
             <tr>
               <td style="font-style: italic;">Université BARACK OBAMA  Sonfonia C/RATOMA BP: 953</td>
             </tr>
             <tr>
              <td style="font-style: italic;">Email: univobamaguinea@gmail.com</td>
            </tr>
            <tr>
              <td style="font-style: italic;">web: http//wwww.univ-barackobama.com</td>
            </tr>
            <tr>
              <td style="font-style: italic;">Tel: 622-266-325/666-72-53-63</td>
            </tr>
          </table>
    </div>
  </div>
  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html