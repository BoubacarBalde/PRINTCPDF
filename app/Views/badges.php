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
<a href="<?= base_url('printBadges')?>" class="btn btn-primary">Imprimer</a>

<div style="display:flex; align-items:center; justify-content:center;">
    <div style="padding:1%;background-color:rgb(255, 252, 252); display: flex">

        <div style="border: 2px solid green; display:flex; width:50%;flex-direction:column">
            <div style="display: flex;">
                <img src="<?= base_url('UBO.jpg')?>" alt="" style="width:20%"> 
                <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;width:80%">
                    <h3 style="font-weight:bold;">République de guinée</h3>
                    <h6><span style="color: red;font-size:small">Travail-----</span><span style="color: rgb(249, 186, 11);font-size:small"> Justice-----</span><span style="color:green;font-size:small"> Solidarité</span></h6>
                    <h6>MESRS</h6>
                </div>
            </div>
            <div style="display: flex;">
                <img src="<?= base_url('photo.jpg')?>" alt="" style="width:30%;border: 1px solid green;">
                <table>
                    <tr>
                        <td style="font-weight: bold;">Faculté: <span>FST</span></td>
                    </tr>
                    <tr>
                        <td>Département: <span style="font-style:italic;">GENIE INFROMATIQUE</span></td>
                    </tr>
                    <tr>
                        <td>N° Mat: <span>B1121 59GI</span></td>
                    </tr>
                    <tr>
                        <td>Nom: <span>BALDE</span></td>
                    </tr>
                    <tr>
                        <td>Prénom: <span>BOUBCAR</span></td>
                    </tr>
                    <tr>
                        <td>Niveau: <span>LICENCE 4</span></td>
                    </tr>
                    <tr>
                        <td>Année Universitaire: <span>2023-2024</span></td>
                    </tr>
                </table>
            </div>
            <div style="background-color:green;width:100%;text-align:center;color:white;font-weight:bold">
                CARTE D'ETUDIANT
            </div>
        </div>

        <div style="background-color:green; width:2%"></div>

        <div style="border: 2px solid green;width:50%">
           
            <table style="margin:0 auto; border-collapse: collapse;">
                <tr>
                    <td style="text-align:center;font-weight:bold;"><h4>UNIVERSITE BARACK OBAMA</h4></td>
                </tr>
                <tr>
                    <td style="text-align:center;font-weight:bold;"><h6 style="font-style: italic;font-size: 17px;">Rigueur-Formation-Innovation</h6></td>
                </tr>
                <tr>
                    <td style="text-align:center;font-weight:bold;"><h4>Le Recteur</h4></td>
                </tr>
            </table><br><br><br><br>
            <table style="margin:0 auto; border-collapse: collapse;">
                <tr>
                    <td>En cas de perte contact cette adresse:</td>
                </tr>
                <tr>
                    <td>Etudiant: <span>626-50-78-18</span></td>
                </tr>
                <tr>
                    <td>Email: <span>univobamaguineescolaritea@gmail.com</span></td>
                </tr>
                <tr>
                    <td>Site Web: <span>http//wwww.univ-barackobama.com</span></td>
                </tr>
            </table>
        </div>
        
    </div>
</div>
  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html