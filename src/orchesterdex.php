<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once('include/header.php'); ?>
    </head>
    
    <body>
    <?php include_once('include/navbar.php'); ?>

            
            <center>
            <div class='container row'>
                <img class="img-responsive center-block" src="img/orchesterdex/Whos_that_Pokemon2.png" 
                alt="Who's that Studentorchester'">
                <!-- There is a fine mixture of bootstrap and flexbox which makes this page work. The following row-eq-height class makes
                use of flexbox to get equal height of the cards in the same row. -->
                <div class='row-eq-height'>

                <?php
                // Load all information about orchestras from json file !
                $studentorchesterjson = json_decode(file_get_contents('orchesterdex.json'), TRUE);
                /* Arrays for path to generic color background and icon. Image at index x will match the color of icon at index x, therefore
                they should be same length. */
                $cardtextures = array('img/orchesterdex/colorless.png', 'img/orchesterdex/water.png', 
                'img/orchesterdex/psychic.png', 'img/orchesterdex/fire_classic.png', 'img/orchesterdex/grass.png', 
                'img/orchesterdex/lightning.png');
                $cardicons = array('img/orchesterdex/colorless-icon.png', 'img/orchesterdex/water-icon.png', 
                'img/orchesterdex/psychic-icon.png', 'img/orchesterdex/fire-icon.png', 
                'img/orchesterdex/grass-icon.png', 'img/orchesterdex/lightning-icon.png');
                // Map with orchestra name (from json file) as key, and path to orchestra image as value.
                $cardimages = array(
                    "Berseblæsten" => 'img/orchesterdex/berg.jpg', 
                    "Student&shy;orchesteret Biørneblæs" => 'img/orchesterdex/biorneblaes.jpg', 
                    "Corpsus Juris" => 'img/orchesterdex/corpsus.jpg', 
                    "Student&shy;orchesteret Dei Taktlause" => 'img/orchesterdex/taktlaus.jpg', 
                    "Dragern" => 'img/orchesterdex/dragern.jpg', 
                    "Force Marsjør Juzz-Band & Fotnotene" => 'img/orchesterdex/force.jpg', 
                    "Medicinsk Blæse- et Spadser&shy;ensemble" => 'img/orchesterdex/med_spadser.jpg', 
                    "Medicinsk Selskabs Orchester" => 'img/orchesterdex/med-selskab.jpg', 
                    "Medicinsk Paradeorchæster" => 'img/orchesterdex/med-parade.gif', 
                    "Musik&shy;selskabet Larmonien" => 'img/orchesterdex/larmonien.jpg', 
                    "Ompagniet" => 'img/orchesterdex/ompagniet.jpg',
                    "Spadser et Blæse-Ensembelet" => 'img/orchesterdex/bibel_spadser.jpg',
                    "Strindens Promenade Orchester" => 'img/orchesterdex/strindens.jpg',
                    "TapHel & Toddy" => 'img/orchesterdex/taphel.jpg', 
                    "Åsblæsten" => 'img/orchesterdex/aasblaesten.jpg'
                );
                $num = 0;
                // Following is a for loop that generates the html for the cards
                foreach ($studentorchesterjson as $studentorchester) {
                    // Index modulo size of cardtextures or cardicons
                    $idx = $num % count($cardtextures);
                    echo "
                    <!-- Code for one card -->
                    <div class='col-md-6'>
                        <!-- Get 'random' card background in php -->
                        <div class='card-line' style='background-image: url({$cardtextures[$idx]}); background-size: cover;'>
                            <div class='card'>
                                <div style='text-align: left'>
                                    <div class='card-title-container'>
                                        <h3 class='card-title'>{$studentorchester['name']}</h3>
                                    </div>
                                    <div class='red-number-container'>
                                        <h3 class='red-number'>{$studentorchester['founded']}</h3>
                                        <!-- Get 'random' card icon in php. Same color / matches card background. -->
                                        <img class='img-responsive card-icon' src='{$cardicons[$idx]}' alt='Card icon'>
                                    </div>
                                    <!-- Get card image based on the student orchestra name -->
                                    <a href='{$cardimages[$studentorchester['name']]}' target='_blank'><img class='img-responsive card-img-top' 
                                    src='{$cardimages[$studentorchester['name']]}' alt='Orchestra specimen'></a>
                                    <div class='card-banner'>
                                        <p class='card-text'><b>{$studentorchester['short_desc']}</b>. <b>Naturlig habitat: </b>{$studentorchester['location']}</p>
                                    </div>
                                    <p class='card-text'><big><b>Kjennetegn: </b></big>{$studentorchester['description']}</p>
                                    <hr class='black-divider'>
                                    <p class='card-text'><big><b>Uniform: </b></big>{$studentorchester['uniform']}</p>
                                    <hr class='black-divider'>
                                    <p class='card-text'><big><b>Skål: </b></big>{$studentorchester['toast']}</p>
                                    <p class='card-text'><big><b>Type: </b></big>{$studentorchester['type']}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
                    $num = $num + 1;
                }
                ?>
                </div>
            </div>
            <br/><br/>
            <p>For tilgang på bedre/original oppløsning av bildene på kortene, gå til Foto og video-arkiv mappen og så orchesterdex-mappen
                 på Google Drive eller spør 
                <a href="https://www.facebook.com/groups/1496116444049224/" target="_blank">NASH</a> om tilgang.</p>
            </center>
    

    <?php include_once('include/footer.php'); ?>
    </body>
</html>
