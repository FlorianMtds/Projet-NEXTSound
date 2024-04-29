<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/Icons/iconNEXTSound.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>NEXTSound Landing page</title>
</head>
<body>

<?php
// Tableau multidimensionnel contenant les informations sur les chansons
$songs = array(
    array(
        "title" => "Irridescent",
        "artist" => "Linkin Park",
        "time" => "4:56",
        "albumImage" => "/assets/Icons/albumimg/linkingpark.png", // Chemin de l'image de l'album
    ),
    array(
        "title" => "Thriller",
        "artist" => "Michael Jackson",
        "time" => "5:57",
        "albumImage" => "/assets/Icons/albumimg/mj.png",
    ),
    array(
        "title" => "Single Ladies",
        "artist" => "Beyoncé",
        "time" => "3:12",
        "albumImage" => "/assets/Icons/albumimg/beyonce.png",
    ),
    array(
        "title" => "Sweet Child O Mine",
        "artist" => "Guns and Roses",
        "time" => "5:57",
        "albumImage" => "/assets/Icons/albumimg/gunsandroses.png",
    ),
    array(
        "title" => "I'm Good (Blue)",
        "artist" => "David Guetta",
        "time" => "5:57",
        "albumImage" => "/assets/Icons/albumimg/davidguetta.png",
    ),
);
?>

    <div class="grid">
        <header>
            <nav>
                <div>
                    <div class="sidebar">
                        <div class="sidebar_wrapper">
                            <div class="logo">
                                <img src="/assets/Logo/logoNEXTSound.png" alt="C'est le logo de NEXTSound">
                            </div>
                            <div class="main_menu">
                                <ul class="menu">
                                    <li class="icon_Accueil"><span class="main_menu_activeHome">Accueil</span></li>
                                    <li class="icon_Playlist"><span class="main_menu_active">Playlist</span></li>
                                    <li class="icon_Album"><span class="main_menu_active">Album</span></li>
                                </ul>
                            </div>
    
                            <div class="separator"></div>
    
                            <div class="discover_menu">
                                <div>
                                    <h2 class="title2">DÉCOUVERTES</h2>
                                </div>
                                <div class="discover">
                                    <ul class="menu">
                                        <li class="icon_Tendances"><span class="main_menu_active">Tendances</span></li>
                                        <li class="icon_Populaires"><span class="main_menu_active">Populaires</span></li>
                                        <li class="icon_Chanteurs"><span class="main_menu_active">Chanteurs</span></li>
                                        <li class="icon_Groupes"><span class="main_menu_active">Groupes</span></li>
                                        <li class="icon_Radio"><span class="main_menu_active">Radio</span></li>
                                        <li class="icon_Poadcast"><span class="main_menu_active">Poadcast</span></li>
                                    </ul>
                                </div>
    
                                <div class="separator"></div>
    
                                <div>
                                    <div class="playlist">
                                        <h2 class="title2">MES PLAYLISTS</h2>
                                    </div>
                                    <ul class="menu">
                                        <li class="dotblue"><span class="main_menu_active">TP Dev Playlist</span></li>
                                        <li class="dotred"><span class="main_menu_active">Love</span></li>
                                        <li class="dotgreen"><span class="main_menu_active">Electro</span></li>
                                        <li class="dotyellow"><span class="main_menu_active">Funk</span></li>
                                        <li class="dotpurple"><span class="main_menu_active">EDM</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="playlist_menu"></div>
                        </div>
                        <div>
                            <div class="settings"><span class="main_menu_active">Préférences</span></div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        
    
        <main>
            <div class="main_view">
                <div class="top_wrapper">
                    <div class="search_Zone">
                        <div class="icon_search"></div>
                        <input class="search_placeholder" type="search" placeholder="Rechercher un artiste, une chanson, une playlist ...">
                    </div>
                    <div class="CTA">
                        <div class="btn_download">
                            <div class="icon_download"></div>
                            <input class="btn_d" type="button" value="Télecharger l'app">
                        </div>
                        <div class="profil">
                            <div class="profil_pic"></div>
                        </div>
                    </div>
                </div>
                <div class="cards">
                    <div>
                        <div class="cards_wrapper">
                            <div class="card_wrapper1">
                                <div class="text_wrapper">
                                    <h2 class="title_C1">Nos recommandations pour cette belle journée</h2>
                                    <p class="desc">Soyez de bonne humeur et prenez plaisir à écouter les meilleurs tubes.</p>
                                <div class="btn_fcn_wrapper">
                                    <a class="btn_fcn" href="btn_fcn">Débloquer la fonctionalité</a>
                                    <div class="icon_crown"></div>
                                </div>
                                </div>
                                <div class="cone"></div>
                            </div>
                            <div class="card_wrapper2">
                                <div class="text_wrapper">
                                    <h2 class="title_C1">Faites confiance à notre algorithme</h2>
                                    <p class="desc">Nos robots travaillent pour vous et vous propose les tubes qui vous ressemblent...</p>
                                    <div class="btn_esp_wrapper">
                                        <a class="btn_esp" href="btn_fcn">En savoir plus</a>
                                        <div class="icon_fleche"></div>
                                    </div>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="categories">
                    <div>
                        <h2 class="categoriesTitle">CATEGORIES</h2>
                    </div>
                    <div class="tags_list">
                        <input class="tag_btn" type="button" name="pop" id="pop" value="Pop Music">
                        <input class="tag_btn" type="button" name="hiphop" id="hiphop" value="Hip Hop">
                        <input class="tag_btn" type="button" name="rocknroll" id="rocknroll" value="Rock & Roll">
                        <input class="tag_btn" type="button" name="rythmandblue" id="rythmandblue" value="Rythm and Blue">
                        <input class="tag_btn" type="button" name="elektro" id="elektro" value="Musique éléctronique">
                        <input class="tag_btn" type="button" name="country" id="country" value="Country">
                        <input class="tag_btn" type="button" name="jazz" id="jazz" value="Jazz">
                        <input class="tag_btn" type="button" name="classic" id="classic" value="Musique classique">
                        <input class="tag_btn" type="button" name="reggae" id="reggae" value="Reggae">
                        <input class="tag_btn" type="button" name="rap" id="rap" value="Rap">
                        <input class="tag_btn" type="button" name="blues" id="blues" value="Blues">
                        <input class="tag_btn" type="button" name="metal" id="metal" value="Metal">
                        <input class="tag_btn" type="button" name="french" id="french" value="Musique française">
                        <input class="tag_btn" type="button" name="folk" id="folk" value="Folk">
                        <input class="tag_btn" type="button" name="grunge" id="grunge" value="Grunge">
                        <input class="tag_btn" type="button" name="international" id="international" value="Variétés internationales">
                        <input class="tag_btn" type="button" name="hardrock" id="hardrock" value="Hard Rock">
                        <input class="tag_btn" type="button" name="punk" id="punk" value="Punk">
                    </div>
                </div>
                <div class="playlist_in_progress">
                    <div class="action">
                        <div class="pip_separator"></div>
                        <div class="active_separator"></div>
                        <div class="active"></div>
                        <div class="action_items">
                            <span>Recommandé</span>
                            <span>Artistes</span>
                            <span>Albums</span>
                            <span>Sorties de la semaine</span>
                            <span class="favoris">Favoris</span>
                        </div>
                    </div>
                    <div class="wrapper_sp">
                        <div class="songs">
                            <?php foreach ($songs as $key => $song): ?>
                                <div class="song">
                                    <span class="nbr"><?php echo $key + 1; ?></span>
                                    <div class="albumImage">
                                        <img src="<?php echo $song['albumImage']; ?>" alt="image de l'album">
                                    </div>
                                    <span class="songTitle"><?php echo $song['title']; ?></span>
                                    <span class="author"><?php echo $song['artist']; ?></span>
                                    <span class="time"><?php echo $song['time']; ?></span>
                                    <div class="playIcon"></div>
                                    <div class="hearthIcon"></div>
                                    <div class="dotsIcon"></div>
                                </div>
                            <?php endforeach; ?>
                            
                        </div>
                        <div class="popup">
                        <div class="content">
                            <div class="crown_icon"></div>
                            <div class="title_popup">
                            Écoutez vos morceaux hors-ligne
                            </div>
                            <div class="description_popup">
                            Enregistrez vos meilleurs sons et vos artistes favoris dans votre appareil.
                            </div>
                        </div>
                        <div class="cta"></div>
                        <div class="playing_zone">
                            <input class="cta_text" type="button" value="Essayer gratuitement">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
</body>
</html>