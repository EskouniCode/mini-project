<!DOCTYPE html>
<html lang="en">
<head>
    <title>Facebook front end</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet"> 
    <link rel="stylesheet" href="./bootstrap.css">
    <script src="./bootstrap.css"></script>
</head>
<body>
    <style>
        *{ margin:0; padding:0; background-clip:border-box; box-sizing:border-box; }
        body{ background-color:#18191a; }
        header{
            position:fixed; display:flex; justify-content:space-between; background-color:#242526; align-items:center; 
            height:56px; top:0%; width:100%; z-index:850; border-bottom:0.3px solid rgba(90 90 90/75%);
        }
        .haeder-left{ width:20.5%;  background-color:#242526; align-self:start; }
        #haeder-left-part-1{ display:flex;align-items:center; padding-left:15px; margin-top:8px; }
        #arrow_back_icon_parent_div{ width:34px; height:32px; ; border-radius:50%;}
        #arrow_back_icon_parent_div:hover{ background-color:rgba(255 255 255 /15%);cursor:pointer;  }
        #arrow_back_icon{ color: rgba(255 255 255/75%); font-size:24px; line-height:32px; margin-left:4px; } 
        #search_icon{ position:absolute; left:73px; color:rgba(255 255 255/65%); font-size:22px; }
        .haeder-left-logo{ width:40px; height:40px; border-radius:40px; }
        .haeder-left-search{ 
            width:100%; height:40px; border-radius:44px; border:none; outline:none; margin-left:8px;
            background-color:#3a3b3c; color:rgba(255 255 255 /75%); padding-left:20px; padding-bottom:3px; 
        }
        ::placeholder{padding-left:9px;color: rgba(255 255 255 /50%); font-size:17px;}
        .haeder-left-search::placeholder{padding-left:17px; color:rgba(255 255 255 /60%); font-size:14.5px;}
        a{ text-decoration:none; color:rgba(255 255 255); }
        a:hover{ color:rgba(255 255 255); }
    </style>
    <header id="header">
        <div class="haeder-left">
            <div id="haeder-left-part-1">
                <div id="arrow_back_icon_parent_div" onclick="remove_search()">
                    <div class="material-icons" id="arrow_back_icon"> keyboard_backspace </div>
                </div>
                <div class="material-icons" id="search_icon" onclick="search()">search</div>
                <img src="./logo_fb.png" class="haeder-left-logo">
                <input type="search" name="search" class="haeder-left-search" onclick="search()" placeholder="Rechercher sur Facebook">
            </div>
            <style>
                #haeder-left-part-2{ max-height: 500px; padding-top:57px; }
                .cherche_amis{ 
                    display:flex; justify-content:space-between; align-items: center;cursor: pointer;
                    border-radius:9px;padding:5.5px 9px;color:rgba(255 255 255/75%); 
                }
                .cherche_amis:hover{ background-color: rgba(255 255 255 /25%);}
                .cherche_amis_profile{ display:flex; justify-content:space-between; align-items: center; }
                .cherche_amis_clear{width:25px;height:25px;border-radius:50%;display:flex;justify-content:center;align-items:center; }
                .cherche_amis_clear:hover{ background-color: rgba(255 255 255 /15%); }
            </style>
            <div id="haeder-left-part-2">
                <div style="color:rgba(255 255 255/75%);display:flex;justify-content:space-between;align-items:center;">  
                    <p style="font-size: 98%;font-weight:600"> Recherches récentes </p>
                    <p style="font-size: 85%;color:#2e89ff">Modifier</p>
                 </div>
                <div class="cherche_amis">
                    <div class="cherche_amis_profile"> 
                        <img src="./logo_fb.png" style="width:35px; height:35px; border-radius:50%;">
                        <div style="font-size: 87%;font-weight:500;margin-left:12px"> Users Name </div>
                    </div>
                    <div class="cherche_amis_clear">
                        <div class="material-icons" style="font-size: 99%;"> clear </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.getElementById("arrow_back_icon_parent_div").style.display = "none"
            document.getElementById("haeder-left-part-2").style.display = "none"
            function search(){ 
                document.querySelector(".haeder-left").style = "box-shadow:3px 3px 8px rgba(0 0 0/50%); border-radius: 0 0 9px 9px";
                document.getElementById("search_icon").style.display = "none"
                document.querySelector(".haeder-left-logo").style.display = "none"
                document.getElementById("arrow_back_icon_parent_div").style = "display:block; margin-left:-5px"
                document.querySelector(".haeder-left-search").style.width = "85%"
                document.getElementById("haeder-left-part-2").style.display = "block"
            }
            function remove_search(){
                document.getElementById("arrow_back_icon_parent_div").style.display = "none"
                document.querySelector(".haeder-left-logo").style.display = "block"
                document.getElementById("search_icon").style.display = "block"
                document.querySelector(".haeder-left").style= ""; 
                document.getElementById("haeder-left-part-2").style.display = "none"
            }
            for(let i = 0 ; i <20 ; i++){
                document.getElementById("haeder-left-part-2").style.overflow = "hidden"
                document.getElementById("haeder-left-part-2").innerHTML += `
                <div class="cherche_amis">
                    <div class="cherche_amis_profile"> 
                        <img src="./logo_fb.png" style="width:35px; height:35px; border-radius:50%;">
                        <div style="font-size: 87%;font-weight:500;margin-left:12px"> Users Name </div>
                    </div>
                    <div class="cherche_amis_clear">
                        <div class="material-icons" style="font-size: 99%;"> clear </div>
                    </div>
                </div>`
            }
        </script>
        <style>
            .haeder-middle{width:45%; height:40px; display:flex; justify-content:space-around; margin-top:-8px;margin-left:-12px;}
            .haeder-middle div{padding:24px 55px; display:flex; justify-content:center; align-items: center; border-radius: 9px;}
            .haeder-middle div:hover{ cursor: pointer; background-color:rgba(255 255 255/9%); }
            .haeder-middle-logo{font-size:173%; color:rgba(255 255 255 /65%); margin-top: 3px;}
        </style>
        <div class="haeder-middle">
            <div> 
                <span class="material-icons haeder-middle-logo" style="font-size:30px;color:transparent;-webkit-text-stroke:1px rgba(255 255 255 /75%);">home</span>  
            </div>
            <div> 
                <span class="material-icons haeder-middle-logo">ondemand_video</span>  
            </div>
            <div> 
                <span class="material-icons haeder-middle-logo">storefront</span>   
            </div>
            <div> 
                <span class="material-icons haeder-middle-logo" style="border-radius:50%;border:1px solid rgba(255 255 255 /75%);padding:1px;font-size:22px;">groups</span>  
            </div>
            <div> 
                <span class="material-icons haeder-middle-logo">view_quilt</span>  
            </div>
        </div>
        <style>
            .haeder-right{ width:18.5%; display:flex; justify-content:space-around; margin-right: 14px;}
            #haeder-right-cadre-users{
                width:max-content;height:38px;display:flex;align-items:center; border-radius:40px; margin-right:9px;
            }
            #haeder-right-cadre-users:hover{ background-color:rgba(255 255 255 /9%);cursor:pointer; }
            .haeder-right-cadre{
                background-color: #3a3b3c; width:40px; height:40px;margin:0px 2px;cursor: pointer;
                border-radius:40px;display: flex; justify-content:center;align-items: center;
            }
            .haeder-right-cadre:hover{ background-color: rgba(255 255 255 /35%); }
            
            .hrader-right-hover {
                position: absolute;bottom:-36px; background-color:rgba(255 255 255 / 70%); width:max-content;  border-radius: 9px;
                font-size:75%; padding:4.5px 9px; font-weight: 400; box-shadow: 1px 1px 3px rgba(0 0 0 /5%); z-index: 999;
            }
            .cadre_for_drop_down{ 
                position:absolute; top:57px; right:16px ;width:360px; height:400px; background-color:greenyellow; border-radius:9px;
                background-color:#242526; padding:9px; color:rgba(255 255 255/75%); overflow-y: auto;box-shadow:2px 2px 10px rgba(0 0 0 /35%);
            }
            .cadre_for_drop_down::-webkit-scrollbar { width: 8px; }
            .cadre_for_drop_down::-webkit-scrollbar-track {  border-radius:5px; box-shadow:white; visibility:hidden; }
            .cadre_for_drop_down:hover::-webkit-scrollbar-track {  visibility: visible; }
            .cadre_for_drop_down::-webkit-scrollbar-thumb { border-radius:5px; background-color:gray; visibility:hidden; }
            .cadre_for_drop_down:hover::-webkit-scrollbar-thumb { visibility:visible; }
            #compte-first-child {display:flex; align-items:center; height:70px; border-radius:9px; }
            #compte-first-child:hover { background-color:rgba(255 255 255/15%); }
            #profile{width:50px;height:50px; border-radius:50%; margin:9px; margin-top: 2px; }
            #profile img{width:60px; height:60px; border-radius:50%; }
            .votre_avis{display:flex; align-items:center; height:48px; border-radius:8px; padding-left:7px; cursor:pointer;} 
            .votre_avis:hover{background-color: rgba(255 255 255/15%);} 
            .votre_avis_icon{
                display:flex;justify-content:center;align-items:center;color:rgba(255 255 255/80%);
                width:36.5px;height:36.5px;background-color:rgba(255 255 255/11%);border-radius:50%;
            }
            .cadrsquare{display:flex;justify-content:center;align-items:center;height:39px;width:39px;border-radius:50%;}
            .cadrsquare:hover{ background-color: rgba(255 255 255/15%); cursor:pointer;}
       </style>
        <div class="haeder-right">
            <div id="haeder-right-cadre-users"> 
                <img src="./profile.jpg" style="width:27px; height:27px; border-radius:50%;">
                <div style="color:white;font-size:80%;padding-left:5.5px;padding-right:6.5px;font-weight:500"> Name </div>
            </div>
            <style>
                #menu{ height:calc(98.5vh - 55px);margin-top:-4px;width:608px;background-color:#323436;color:rgba(255 255 255/50%); }
                #menu h4{ width:582px; position:fixed; z-index:950; background-color:#323436; color:rgba(255 255 255/85%); 
                    font-weight:700; margin-top:-9px; margin-left:7px; padding-top:12px; padding-bottom: 10px;}
                #search_menu{
                    width:98%; height:36px; margin:6px 1%; border-radius:33px; outline:none; border:none; background-color:rgb(58 59 60);
                    padding-bottom:4px; color:rgba(255 255 255/80%)}
                #search_menu::placeholder{ font-size:95%; padding-left:35px; margin-top:-20px; }
                .menu-cadrs{  display:flex; padding:2px 1px; border-radius:8px; cursor:pointer; }
                .menu-cadrs:hover{ background-color:rgba(255 255 255 / 12%); }
            </style>
            <div onclick="menu()">
                <div class="haeder-right-cadre" onmouseover="styling_hover('menu')" onmouseout="removre_styling_hover()">
                    <span style="color: white;font-size: 25px;" class="material-icons">apps</span>
                    <div class="hrader-right-hover"> menu </div>
                </div>
                <div class="cadre_for_drop_down" id="menu">
                    <h4>Menu</h4>
                    <div class="cadre_for_drop_down" style="height:max-content;box-shadow:none;left:16px;top:52px;overflow:hidden">
                        <div style="position:relative;">
                            <div class="material-icons" style="position:absolute;left:14px;top:15px;font-size:20px;color:rgba(255 255 255/65%)"> search </div>
                            <input type="search" id="search_menu" placeholder="Rechercher dans le menu">
                        </div>
                        <div style="font-size:16px;font-weight:500;color:white;margin-top:7px;margin-left:8px">Social</div>
                        <div class="menu-cadrs" style="margin-top:5px;">
                            <div class="material-icons" style="font-size:30px;margin-top:9px;margin-left:12px"> important_devices </div>
                            <div style="font-size:85%;margin-left:15px;">
                                <span style="color:rgba(255 255 255);font-size:13px;font-weight:550;"> Événements </span><br>
                                <small style="font-weight:450;line-height:-90%;">
                                    <div style="margin-top:-3px;">Trouver des activités et des evenements auxquels </div>
                                    <div style="margin-top:-3px;">vous pouvez participes en ligne ou en personne  </div>
                                    <div style="margin-top:-3px;">pres de chez vous, ou organisez-en.</div>
                                </small> 
                            </div>
                        </div>
                        <div class="menu-cadrs">
                            <div class="material-icons" style="font-size:30px;margin-top:9px;margin-left:12px"> group </div>
                            <div style="font-size:85%;margin-left:15px;">
                                <span style="color:rgba(255 255 255);font-size:15px;font-weight:550;"> Amis </span><br>
                                <small style="font-weight:450;line-height:-90%;">
                                    <div style="margin-top:-3px;"> Trouver des activités ou des personnes  </div>
                                    <div style="margin-top:-3px;"> connaissez. </div>
                                </small>
                            </div>
                        </div>
                        <div class="menu-cadrs">
                            <div class="material-icons" style="font-size:30px;margin-top:9px;margin-left:12px"> groups </div>  
                            <div style="font-size:85%;margin-left:15px;">
                                <span style="color:rgba(255 255 255);font-size:15px;font-weight:550;"> Groups </span><br>
                                <small style="font-weight:450;line-height:-90%;">
                                    <div style="margin-top:-3px;"> Entrez en contact avec des personnes qui partagent   </div>
                                    <div style="margin-top:-3px;"> vos centeres d'interet. </div>
                                </small>
                            </div>
                        </div>
                        <div class="menu-cadrs">
                            <div class="material-icons" style="font-size:30px;margin-top:9px;margin-left:12px"> padding </div>  
                            <div style="font-size:85%;margin-left:15px;">
                                <span style="color:rgba(255 255 255);font-size:15px;font-weight:550;"> Fil d'actualite </span><br>
                                <small style="font-weight:450;line-height:-90%;">
                                    <div style="margin-top:-3px;"> Consultez des publications pertinentes mises en </div>
                                    <div style="margin-top:-3px;"> ligne par des personnes et des Pages que vous  </div>
                                    <div style="margin-top:-3px;"> suivez. </div>
                                </small>
                            </div>
                        </div>
                        <div class="menu-cadrs" style="padding: 3px 1px;">
                            <div class="material-icons" style="font-size:30px;margin-top:9px;margin-left:12px"> outlined_flag </div>  
                            <div style="font-size:85%;margin-left:15px;">
                                <span style="color:rgba(255 255 255);font-size:15px;font-weight:550;">Page </span><br>
                                <small style="font-weight:450;line-height:-90%;">
                                    <div style="margin-top:-3px;"> Decouvrez des entreprises et entrez en contact avec  </div>
                                    <div style="margin-top:-3px;"> elles sur Facebook.   </div>
                                </small>
                            </div>
                        </div>
                        <hr style="margin-top:15px; margin-bottom:15px; width:95%;margin-left:2.5%; ">
                        <div style="font-size:16px;font-weight:500;color:white;margin-top:-5px;margin-left:8px"> Divertissement </div>
                        <div class="menu-cadrs" style="padding: 3px 1px;margin-top:4px">
                            <div class="material-icons" style="font-size:30px;margin-top:9px;margin-left:12px"> extension </div>  
                            <div style="font-size:85%;margin-left:15px;">
                                <span style="color:rgba(255 255 255);font-size:15px;font-weight:550;">Videos de jeux </span><br>
                                <small style="font-weight:450;line-height:-90%;">
                                    <div style="margin-top:-3px;"> Regardez des parties et suivez les streamers que   </div>
                                    <div style="margin-top:-3px;"> vous aimez.   </div>
                                </small>
                            </div>
                        </div>
                        <div class="menu-cadrs" style="padding: 3px  1px;">
                            <div class="material-icons" style="font-size:30px;margin-top:5px;margin-left:12px"> videogame_asset </div>  
                            <div style="font-size:85%;margin-left:15px;padding: 3px  0px;">
                                <div style="color:rgba(255 255 255);font-size:15px;font-weight:550;"> Jouer a des jeux</div>
                                <small style="font-weight:450;line-height:-90%;">
                                    <div style="margin-top:-3px;"> Jouez a vos jeux favoris. </div>
                                </small>
                            </div>
                        </div>
                        <div class="menu-cadrs" style="padding: 3px 1px;">
                            <div class="material-icons" style="font-size:30px;margin-top:9px;margin-left:12px"> ondemand_video </div>  
                            <div style="font-size:85%;margin-left:15px;">
                                <span style="color:rgba(255 255 255);font-size:15px;font-weight:550;"> Watch  </span><br>
                                <small style="font-weight:450;line-height:-90%;">
                                    <div style="margin-top:-3px;"> Decouvrez des suggestions de video bases sur vos  </div>
                                    <div style="margin-top:-3px;"> centers d'interet et vos contacts.   </div>
                                </small>
                            </div>
                        </div>
                        <hr style="margin-top: 15px;width:95%;margin-left:2.5%;margin-bottom: 15px;">
                        <div style="font-size:16px;font-weight:500;color:white;margin-top:-5px;margin-left:8px"> Shopping </div>
                        <div class="menu-cadrs" style="margin-top:5px;">
                            <div class="material-icons" style="font-size:30px;margin-top:9px;margin-left:12px;transform:rotate(-45deg)"> credit_card </div>
                            <div style="font-size:85%;margin-left:15px;">
                                <span style="color:rgba(255 255 255);font-size:15px;font-weight:550;"> Facebook Pay </span><br>
                                <small style="font-weight:450;line-height:-90%;">
                                    <div style="margin-top:-3px;">Profitez d'un moyen simple et securise pour </div>
                                    <div style="margin-top:-3px;">effectuer des paiements sur les applications que </div>
                                    <div style="margin-top:-3px;">vous utilisez deja.</div>
                                </small>
                            </div>
                        </div>
                        <div class="menu-cadrs" style="padding: 3px  1px;">
                            <div class="material-icons" style="font-size:30px;margin-top:5px;margin-left:12px"> storefront </div>  
                            <div style="font-size:85%;margin-left:15px;padding: 3px  0px;">
                                <div style="color:rgba(255 255 255);font-size:15px;font-weight:550;"> Marketplace</div>
                                <small style="font-weight:450;line-height:-90%;">
                                    <div style="margin-top:-3px;"> Achetez et vendez autour de vous. </div>
                                </small>
                            </div>
                        </div>
                        <hr style="margin-top: 15px;width:95%;margin-left:2.5%;margin-bottom: 15px;">
                        <div style="font-size:16px;font-weight:500;color:white;margin-top:-5px;margin-left:8px"> Personnel </div>
                        <div class="menu-cadrs" style="padding: 3px 1px;">
                            <div class="material-icons" style="font-size:30px;margin-top:9px;margin-left:12px"> inventory_2 </div>  
                            <div style="font-size:85%;margin-left:15px;">
                                <span style="color:rgba(255 255 255);font-size:15px;font-weight:550;"> Activite publicitarire recente  </span><br>
                                <small style="font-weight:450;line-height:-90%;">
                                    <div style="margin-top:-3px;"> Retrouvez toutrs les annonces avec lesquelles vous </div>
                                    <div style="margin-top:-3px;"> avec interagi sur Facebook .   </div>
                                </small>
                            </div>
                        </div>
                    </div>
                    <style> 
                        .menu-list{width:196px; height:470px; box-shadow:none; position:fixed; right:33px; top:102px; border-radius:9px;}
                    </style>
                    <div class="cadre_for_drop_down menu-list">
                        <div style="font-size:20px;font-weight:660;padding-left:2px;margin-top:-1.5px;">Créer</div>    
                        <div class="menu-cadrs" style="padding:6px 0px;margin-top:15px;color:white;display:flex;align-items:center;"> 
                            <div style="margin-right:10px;margin-left:7px;width:36px;height:36px;background-color:rgba(255 255 255/20%);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                                <div class="material-icons" style="font-size:22px;color:white;"> edit_note </div>
                            </div>
                            <div style="font-size:85%;font-weight:600;"> Publication </div>
                        </div>
                        <div class="menu-cadrs" style="padding:6px 0px;color:white;display:flex;align-items:center;"> 
                            <div style="margin-right:10px;margin-left:7px;width:36px;height:36px;background-color:rgba(255 255 255/20%);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                                <div class="material-icons" style="font-size:22px;color:white;"> auto_stories </div>
                            </div>
                            <div style="font-size:85%;font-weight:600;"> Story </div>
                        </div>
                        <div class="menu-cadrs" style="padding:6px 0px;color:white;display:flex;align-items:center;"> 
                            <div style="margin-right:10px;margin-left:7px;width:36px;height:36px;background-color:rgba(255 255 255/20%);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                                <div class="material-icons" style="font-size:22px;color:white;"> video_call </div>
                            </div>
                            <div style="font-size:85%;font-weight:600;"> Salon </div>
                        </div>
                        <hr style="margin-top: 9px;width:90%; margin-left:5%;">
                        <div class="menu-cadrs" style="padding:6px 0px;color:white;display:flex;align-items:center;margin-top:-8px"> 
                            <div style="margin-right:10px;margin-left:7px;width:36px;height:36px;background-color:rgba(255 255 255/20%);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                                <div class="material-icons" style="font-size:22px;color:white;">  outlined_flag  </div>
                            </div>
                            <div style="font-size:85%;font-weight:600;"> Page </div>
                        </div>
                        <div class="menu-cadrs" style="padding:6px 0px;color:white;display:flex;align-items:center;"> 
                            <div style="margin-right:10px;margin-left:7px;width:36px;height:36px;background-color:rgba(255 255 255/20%);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                                <div class="material-icons" style="font-size:22px;color:white;">  volume_mute  </div>
                            </div>
                            <div style="font-size:85%;font-weight:600;"> Publicite </div>
                        </div>
                        <div class="menu-cadrs" style="padding:6px 0px;color:white;display:flex;align-items:center;"> 
                            <div style="margin-right:10px;margin-left:7px;width:36px;height:36px;background-color:rgba(255 255 255/20%);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                                <div class="material-icons" style="font-size:20px;color:white;border:2px solid white;border-radius:50%;">  groups  </div>
                            </div>
                            <div style="font-size:85%;font-weight:600;"> Groupe </div>
                        </div>
                        <div class="menu-cadrs" style="padding:6px 0px;color:white;display:flex;align-items:center;"> 
                            <div style="margin-right:10px;margin-left:7px;width:36px;height:36px;background-color:rgba(255 255 255/20%);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                                <div class="material-icons" style="font-size:20px;color:white;">  add_to_photos  </div>
                            </div>
                            <div style="font-size:85%;font-weight:600;"> Evenement </div>
                        </div>
                        <div class="menu-cadrs" style="padding:6px 0px;color:white;display:flex;align-items:center;"> 
                            <div style="margin-right:10px;margin-left:7px;width:36px;height:36px;background-color:rgba(255 255 255/20%);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                                <div class="material-icons" style="font-size:20px;color:white;"> shopping_bag </div>
                            </div>
                            <div style="font-size:85%;font-weight:600;"> Petite annonce <br>Maketplace </div>
                        </div>
                    </div>
                </div>
                <script> 
                    var check_for_bool_messanger = true
                    var check_for_bool_notification = true 
                    var check_for_bool_compte = true
                    var check_for_bool_menu = true
                    document.getElementById("menu").style.display = "none"
                    function menu(){
                        if(check_for_bool_menu == true){
                            document.getElementById("menu").style.display = "block"
                            check_for_bool_menu = false
                        }else{
                            document.getElementById("menu").style.display = "none"
                            check_for_bool_menu = true
                        }
                        document.getElementById("messanger").style.display = "none"
                        document.getElementById("notification").style.display = "none"
                        document.getElementById("compte").style.display = "none"
                        check_for_bool_messanger = true ;check_for_bool_notification = true ;check_for_bool_compte = true;
                    }
                </script>
            </div>
            <style>
                #messanger-header-div{ display:flex;justify-content:space-between; align-items:center; height:45px; margin-left:7.5px;}
                #messanger-header-h4{color:rgba(255 255 255/85%);font-weight:750;padding-bottom:0px;margin-top:10px}
                #messanger-header-icon{display:flex;justify-content:space-around;align-items:center;width:48%;margin-left:8px;margin-top:4px;}
                .messanger-header-icon-cadrs{width:30px;height:30px;border-radius:50%;display:flex;justify-content:center;align-items:center;}
                .messanger-header-icon-cadrs:hover{ background-color: rgba(255 255 255/15%); cursor: pointer;}
                #input-search-messanger-cadrs{ width:96%; height:37.5px; margin-left:2%; margin-top:6px; border-radius:28px; }
                #input-search-messanger{width:100%;height:100%;outline:none;border:none;border-radius:29px;background-color:#3a3b3c; }
                #input-search-messanger::placeholder{padding-left:36px;font-size:92%;padding-bottom:9px;font-weight:450;}
                .box-messanger-amis{width:100%;height:70px;display:flex;align-items:center;}
                .box-messanger-amis:hover{ background-color:rgba(255 255 255/4.5%); cursor:pointer; border-radius:9px;}
                .box-messanger-pas-amis-div1{ width:55.5px; height:55.5px; border-radius:50%; margin-left:6px; }
                .box-messanger-pas-amis-div1 div{width:100%;height:100%;display:flex;justify-content:center;align-items:center;font-size:25px;}
                .box-messanger-pas-amis-div2{ font-size:90%; overflow:hidden; margin-left:10px; }
            </style>
            <div onclick="messanger()">  
                <div class="haeder-right-cadre" onmouseover="styling_hover('messanger')" onmouseout="removre_styling_hover()">
                    <span style="color: white;font-size: 20px;" class="material-icons"> send </span>
                    <div class="hrader-right-hover"> messanger </div>
                </div>
                <div class="cadre_for_drop_down" id="messanger" style="height:calc(98.5vh - 55px);margin-top:-4px;">
                    <div id="messanger-header-div">
                        <h4  id="messanger-header-h4"> Messenger </h4>
                        <div id="messanger-header-icon"> 
                            <div class="messanger-header-icon-cadrs">
                                <div class="material-icons"> more_horiz </div>
                            </div>
                            <div class="messanger-header-icon-cadrs">
                                <div class="material-icons" style="transform: rotate(45deg);"> open_with </div>
                            </div>
                            <div class="messanger-header-icon-cadrs">
                                <div class="material-icons"> video_call </div>
                            </div>
                            <div class="messanger-header-icon-cadrs">
                                <div class="material-icons" style="font-size: 21px;"> drive_file_rename_outline  </div>
                            </div>
                        </div>
                    </div>
                    <div id="input-search-messanger-cadrs" style="position: relative;">
                        <input type="search" id="input-search-messanger" placeholder="Rechercher dans Messanger">
                        <div class="material-icons" style="position:absolute;top:9.5px;left:9px;font-size:21px"> search </div>
                    </div>
                    <div class="box-messanger-amis" style="margin-top:8px;">
                        <div class="box-messanger-pas-amis-div1" style="background-color:rgba(255 255 255/9%)">
                            <div class="material-icons" style="color:white;">  question_answer </div>
                        </div>
                        <div class="box-messanger-pas-amis-div2">
                            <span style="font-weight: 630;"> Nouvelle invitation par message</span><br>
                            <small>message</small> 
                        </div>
                    </div>
                    <script>
                        for(let i=0 ; i<20 ;i++){
                            document.getElementById("messanger").innerHTML += `
                                <div class="box-messanger-amis" onclick="send_meesage()">
                                    <div class="box-messanger-pas-amis-div1" style="position:relative;">
                                        <img src="./logo_fb.png" style="width:100;height:100%;border-radius:50%">
                                        <div style="width:15px;height:15px;border-radius:50%;background-color:#242526;;position:absolute;bottom:2px;right:0px">
                                            <div style="width:13px;height:13px;border-radius:50%;background-color:rgb(49 162 76);position:absolute;bottom:1px;right:1x">
                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-messanger-pas-amis-div2">
                                        <span style="font-weight: 480;"> User Name </span><br>
                                        <small>message</small> 
                                    </div>
                                </div>` 
                        }
                        document.getElementById("messanger").style.display = "none"
                        function messanger(){
                            if( check_for_bool_messanger == true ){
                                document.getElementById("messanger").style.display = "block"
                                check_for_bool_messanger = false
                            }else{
                                document.getElementById("messanger").style.display = "none"
                                check_for_bool_messanger = true
                            }       
                            document.getElementById("notification").style.display = "none"
                            document.getElementById("compte").style.display = "none"
                            document.getElementById("menu").style.display = "none"
                            check_for_bool_notification = true; check_for_bool_compte = true; check_for_bool_menu = true  ;                  
                        }
                    </script>
                </div>
            </div>

            <style>
                .notification_style_P{display:flex;align-items:center;margin-left:2px;height:45px;margin-top:-9px}
                .notification_style_T{margin-left:5.5px;border-radius:39px;background-color:rgb(38 57 81);padding:7px 12px;
                    font-size:90%;font-weight:550;color:rgb(44 129 239) }
                .notification_style_N{ margin-left:8px; background-color:rgba(255 255 255/11%); color:rgba(255 255 255/90%);
                    border-radius:39px;padding:7px 12px;font-size:90%;font-weight:550; }
                .hadra_notification_P{display:flex;justify-content:space-between;align-items:center;height:32px;}
                .hadra_notification{font-weight:600; margin-left:8px; color:rgba(255 255 255/90%);}
                .hadra_notification2{ font-size:86%; color:#4599ff; letter-spacing:0.2px; margin-right:5px; }
                .notification_box{ height:72px; border-radius:9px; padding:2px; display:flex;}
                .notification_box:hover{ background-color: rgba(255 255 255/15%);cursor:pointer;}
                .notification_box_menu{ width:56px;height:56px;background-color:red;border-radius:50%;position:relative;
                    margin-left:5px;margin-top:2px; }
                .notification_box_menu_icon{display:flex; justify-content:center; align-items:center;
                    position:absolute;bottom:-5px;right:-7px;width:27px;height:27px;border-radius:50%;}
            </style>
            <div onclick="notification()">
                <div class="haeder-right-cadre" onmouseover="styling_hover('notifications')" onmouseout="removre_styling_hover()" >
                    <span style="color: white;font-size: 20px;" class="material-icons">notifications</span>
                    <div class="hrader-right-hover"> notifications </div>
                </div>
                <div class="cadre_for_drop_down" id="notification" style="height:calc(98.5vh - 55px);margin-top: -4px;">
                    <div style="display:flex; justify-content:space-between; align-items:center;height:45px;margin-left:7.5px"> 
                        <h4 style="color:rgba(255 255 255/85%);font-weight:750;padding-bottom:0px;"> Notifications </h4>
                        <div class="cadrsquare">
                            <div class="material-icons"> more_horiz </div>
                        </div>
                    </div>
                    <div class="notification_style_P">
                        <div class="notification_style_T"> Tout</div>
                        <div  class="notification_style_N"> Non lu</div>
                    </div>
                    <div class="hadra_notification_P">
                        <div class="hadra_notification">Plus tôt</div>
                        <div class="hadra_notification2">Voir tout</div>
                    </div>
                    <div class="notification_box">
                        <div class="notification_box_menu"> 
                            <img src="./logo_fb.png" style="width:100%;height:100%;border-radius:50%;">
                            <div class="notification_box_menu_icon" style="background-color:#066fe5;">
                                <span class="material-icons" style="color:white; font-size:21px"> groups </span>
                            </div>
                        </div>
                        <div style="margin-left:17px;font-size:98%; width:calc(100% - 70px); overflow:hidden; padding-right:3px">
                            <b>Notification</b> . Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            <div style="margin-top: -4.9px;"><small><small> il y a 7 heures </small></small></div>
                        </div>
                    </div> 
                </div>
                <script>
                    document.getElementById("notification").style.display = "none"    
                    function notification(){
                        if(check_for_bool_notification == true){
                            document.getElementById("notification").style.display = "block"
                            check_for_bool_notification = false
                        }else{
                            document.getElementById("notification").style.display = "none"
                            check_for_bool_notification = true
                        }
                        document.getElementById("messanger").style.display = "none"
                        document.getElementById("compte").style.display = "none"
                        document.getElementById("menu").style.display = "none"
                        check_for_bool_messanger = true; check_for_bool_compte = true; check_for_bool_menu = true;
                    }
                    for(let i=0 ; i<20 ; i++){
                        document.getElementById("notification").innerHTML += `
                        <div class="notification_box">
                            <div class="notification_box_menu"> 
                                <img src="./logo_fb.png" style="width:100%;height:100%;border-radius:50%;">
                                <div class="notification_box_menu_icon" style="background-color:#066fe5;">
                                    <span class="material-icons" style="color:white; font-size:21px">groups</span>
                                </div>
                            </div>
                            <div style="margin-left:17px;font-size:98%; width:calc(100% - 70px); overflow:hidden; padding-right:3px">
                                <b>Notification</b> . Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                <div style="margin-top: -4.9px;"><small><small> il y a 7 heures </small></small></div>
                            </div>
                        </div>`
                    }
                </script>
            </div>

            <div onclick="Compte()">
                <div class="haeder-right-cadre" onmouseover="styling_hover('compte')" onmouseout="removre_styling_hover()">
                    <span class="material-icons" style="color:white; font-size:20px;" id="arrow_drop_down">arrow_drop_down</span>
                    <div class="hrader-right-hover" id="compte_hidden"> Compte </div>
                </div>
                <div class="cadre_for_drop_down" id="compte">
                    <div id="compte-first-child">
                        <div id="profile">
                            <img src="./logo_fb.png">
                        </div>
                        <div style="margin-left:2px;color:rgba(255 255 255/75%)"> 
                            <div style="font-weight:660;margin-left:9px"> User Name </div>
                            <div style="font-size:88%;margin-left:9px"> Voir votre profil </div>
                        </div>
                    </div>
                    <hr style="color:rgba(255 255 255/75%); width:95%; margin-left:2.5%;margin-top:8px;margin-bottom:8px">
                    <div class="votre_avis">
                        <div class="votre_avis_icon">
                            <div class="material-icons" style="font-size:20px;color:white"> announcement </div>
                        </div>
                        <div style="margin-left:13px;color:rgba(255 255 255/75%)">
                            <div style="font-weight:629;font-size:94%;">Donner votre avis</div>
                            <div style="font-size:78%;">Aidez-nous a ameliorer Facebook</div>
                        </div>
                    </div>
                    <hr style="color:rgba(255 255 255/75%); width:95%; margin-left:2.5%;margin-top:8px;margin-bottom:8px">
                    <div class="votre_avis">
                        <div class="votre_avis_icon">
                            <div class="material-icons" style="font-size:22px;color:white"> settings </div>
                        </div>                    
                        <div style="margin-left:13px;color:rgba(255 255 255/75%);font-weight:629;"> Paramètres et confidentialité </div>
                        <div class="material-icons" style="color:rgba(255 255 255/80%);position:absolute;right:15px"> arrow_forward_ios </div>
                    </div>
                    <div class="votre_avis">
                        <div class="votre_avis_icon">
                            <div class="material-icons" style="font-size:22px;color:white"> help </div>
                        </div>                    
                        <div style="margin-left:13px;color:rgba(255 255 255/75%);font-weight:629;"> Aide et assistance </div>
                        <div class="material-icons" style="color:rgba(255 255 255/80%);position:absolute;right:15px"> arrow_forward_ios </div>
                    </div>
                    <div class="votre_avis">
                        <div class="votre_avis_icon">
                            <div class="material-icons" style="font-size:24px;color:white;transform:rotate(-12deg);margin-left:-1px"> nightlight_round </div>
                        </div>                    
                        <div style="margin-left:13px;color:rgba(255 255 255/75%);font-weight:629;"> Affichage et accessibilite </div>
                        <div class="material-icons" style="color:rgba(255 255 255/80%);position:absolute;right:15px"> arrow_forward_ios </div>
                    </div>
                    <div class="votre_avis">
                        <div class="votre_avis_icon">
                            <div class="material-icons" style="font-size:24px;color:white;"> logout </div>
                        </div>                    
                        <div style="margin-left:13px;color:rgba(255 255 255/75%);font-weight:629;"> Se déconnecter </div>
                    </div>
                    <p style="color:rgba(255 255 255/45%);font-size:69%;margin:2px 9px;"> Confidentialité  · Conditions générales  · Publicités  · Choix publicitaires   · Cookies . Plus  · Meta © 2022</p>
                </div>
            </div>
            <script>
                for(let i=0 ; i<4 ; i++){
                    document.querySelectorAll(".hrader-right-hover")[i].style.display = "none"
                }
                document.getElementById("compte").style.display = "none"
                function Compte(){ 
                    if( check_for_bool_compte == true ){
                        document.getElementById("arrow_drop_down").style = "color:rgba(0 0 255/65%);"
                        document.getElementById("compte").style.display = "block"
                        check_for_bool_compte = false
                    }else{
                        document.getElementById("arrow_drop_down").style = "color:rgba(255 255 255/80%);"
                        document.getElementById("compte").style.display = "none"
                        check_for_bool_compte = true
                    }
                    document.getElementById("messanger").style.display = "none"
                    document.getElementById("notification").style.display = "none"
                    document.getElementById("menu").style.display = "none"
                    check_for_bool_messanger = true
                    check_for_bool_notification = true
                    check_for_bool_menu = true
                }
            </script>
        </div>
    </header>
    <script>
        function styling_hover(test){
            if( test == "menu"){
                document.querySelectorAll(".hrader-right-hover")[0].style.display = "block"
            }else if( test == "messanger"){
                document.querySelectorAll(".hrader-right-hover")[1].style.display = "block"
            }else if( test == "notifications"){
                document.querySelectorAll(".hrader-right-hover")[2].style.display = "block"
            }else if( test == "compte"){
                document.querySelectorAll(".hrader-right-hover")[3].style.display = "block"
            }
        }
        function removre_styling_hover(){
            for(let i=0 ; i<4 ; i++){
                document.querySelectorAll(".hrader-right-hover")[i].style.display = "none"
            }   
        }
    </script>

    <style>
        #aside{
            width:23%; height:calc(100vh - 57px); padding:21px 14.5px; color:rgba(245 245 245 /85%);
            position:fixed; margin-right: 45px; overflow-x: hidden; overflow-y: auto;
        }
        .content-aside{display:flex; align-items:center; margin-bottom:2px; overflow-y:auto; padding:3px 0px; cursor:pointer;}
        .content-aside:hover{ background-color: #3a3b3c; border-radius: 9px;}
        .content-aside-style{width: 41px;height:39px; text-align:center; display:flex; align-items:center;margin-left: 5px;}
        .icons-tags{ font-size:27px; margin-right:9px }
        .content-aside-style-gaming{ width: 41px;height:39px; text-align:center; display:flex; align-items:center;margin-right: 9px; }
        .content-aside-style-gaming img {width: 100%; height: 100%; border-radius: 9px; margin-right: 15px;}
    </style>
    <aside id="aside">
        <a class="content-aside" href="./profile.php">
            <div class="material-icons" style="font-size:40px;margin-right:9px">account_circle</div>
            <div id="user_name" style="font-weight: 520;"> Reda Eskouni </div>
        </a>
        <a class="content-aside">
            <div class="content-aside-style">
                <div class="material-icons icons-tags">people_alt</div>
            </div>
            <div id="user_name" style="font-weight:520;"> Amis </div>
        </a>
        <a class="content-aside">
            <div class="content-aside-style">
                <div class="material-icons icons-tags"> groups </div>
            </div>
            <div id="user_name" style="font-weight:520;"> Groups </div>
        </a>
        <a class="content-aside">
            <div class="content-aside-style">
                <div class="material-icons icons-tags"> storefront </div>
            </div>
            <div id="user_name" style="font-weight:520;"> Groups </div>
        </a>
        <a class="content-aside">
            <div class="content-aside-style">
                <div class="material-icons icons-tags"> ondemand_video </div>
            </div>
            <div id="user_name" style="font-weight:520;"> Watch </div>
        </a>
        <a class="content-aside">
            <div class="content-aside-style">
                <div class="material-icons icons-tags"> update </div>
            </div>
            <div id="user_name" style="font-weight:520;"> Souvenirs </div>
        </a>
        <a class="content-aside">
            <div class="content-aside-style">
                <div class="material-icons icons-tags"> bookmark </div>
            </div>
            <div id="user_name" style="font-weight:520;"> Enregistements </div>
        </a>
        <div class="content-aside">
            <div class="content-aside-style">
                <div style="background-color:#303031;width:34px;height:34px;display:flex;align-items:center;justify-content:center;border-radius:50%">
                    <div class="material-icons"> keyboard_arrow_down </div>
                </div>
            </div>
            <div id="user_name" style="font-weight:520;"> Voir plus </div>
        </div>
        
        <div style="width: 95%; height:0.5px; background-color:gray;margin:12px auto"></div>
        <style>
            .bouge{margin-bottom:2px;margin-left:-6px;padding-left:7px;padding-top:4.5px;padding-bottom:4.5px;}
        </style>
        <p> Vos raccourcis </p>
        <div class="content-aside bouge">
            <div class="content-aside-style-gaming">
                <img src="./logo_fb.png">
            </div>
            <div id="user_name" style="font-weight:520;">  Raccourcis Name </div>
        </div>
        <div class="content-aside bouge">
            <div class="content-aside-style-gaming">
                <img src="./ball.jpg">
            </div>
            <div id="user_name" style="font-weight:520;"> 8 Ball Pool </div>
        </div>
        <div class="content-aside bouge">
            <div class="content-aside-style-gaming">
                <img src="./candy.jpg">
            </div>
            <div id="user_name" style="font-weight:520;"> Candy Crash Saga </div>
        </div>
        <div class="content-aside bouge">
            <div class="content-aside-style-gaming">
                <img src="./devlopment.jpg">
            </div>
            <div id="user_name" style="font-weight:520;"> Developpement Informatique maroc </div>
        </div>
    </aside>
    <style>
        #nav{width:23.8%;height:100vh;position:fixed;right:0%;top:57px;overflow-x:hidden;overflow-y:auto; }
        nav::-webkit-scrollbar { width:8px; }
        nav::-webkit-scrollbar-track {  border-radius:5px; box-shadow:white; visibility:hidden; }
        nav:hover::-webkit-scrollbar-track { visibility:visible; } 
        nav::-webkit-scrollbar-thumb { border-radius:5px; background-color:gray; visibility:hidden; }
        nav:hover::-webkit-scrollbar-thumb { visibility:visible; }
        .Sponsorise { margin:20px 0px; font-size:105%; color:rgba(255 255 255/85%);}
        .sponsorise1{ width:100%; height:90px; border-radius:9px; cursor:pointer; }
        .sponsorise1:hover{ background-color:#242526; }
        .sponsorise1_img{ float:left; width:46%; height:80px; margin-top:5px; padding:0px 5px;}
        .sponsorise1_img img{ width:100%; height:100%; object-fit:cover; border-radius:9px; }
        .sponsorise1_p{ width:51%; float:left; padding-left:20px;}
        .Contact-ktaba{display:flex;justify-content:space-between;color:rgba(255 255 255/75%)}
    </style>
    <nav id="nav">  
        <p class="Sponsorise"> Sponsorisé </p> 
        <div class="sponsorise1">
            <div class="sponsorise1_img"> 
                <img src="./jeux.jpg">
            </div>
            <div class="sponsorise1_p">
                <p style="color:rgba(255 255 255/82%); padding-top:14px; "> Title number 1 </p>
                <p style="color:rgba(255 255 255/80%); font-size:70%; margin-top:-5px;"> exemple.com </p>
            </div>
        </div>
        <div class="sponsorise1 mt-1">
            <div class="sponsorise1_img"> 
                <img src="./logo_fb.png">
            </div>
            <div class="sponsorise1_p">
                <p style="color:rgba(255 255 255/82%); padding-top:14px; "> Title number 2 </p>
                <p style="color:rgba(255 255 255/80%); font-size:70%; margin-top:-5px;"> exemple.com </p>
            </div>
        </div>
        <hr style="color:snow;">
        <div class="Contact-ktaba">
            <div style="font-weight:600;font-size:95%"> Contacts</div>
            <div style="margin-right:5%;">
                <div class="material-icons" style="margin-left:3px;cursor:pointer;"> video_call </div>
                <div class="material-icons" style="margin-left:3px;cursor:pointer;"> search </div>
                <div class="material-icons" style="margin-left:3px;cursor:pointer;"> more_horiz </div>
            </div>
        </div>
         
        <style>
            .content-nav{ 
                display:flex;align-items:center;padding:6.5px 7px; overflow-y:auto; cursor:pointer;width:90%;border-radius:9px;
            }
            .content-nav:hover{ background-color: rgba(255 255 255 / 15%); }
            .content-nav-users{ width:33px; height:33px; border-radius:50%; margin-right:15px; position:relative;}
            .content-nav-users::before{
                content: ""; width:11.5px; height:11.5px; border-radius:50%; background-color:#18191a; position:absolute; 
                right:0%; bottom: 0%; 
            }
            .content-nav-users::after{
                content: ""; width:6.5px; height:6.5px; border-radius:50%; background-color:#31a24c;
                position:absolute; right:3px; bottom:3px; 
            }
            .users_name{ color:rgba(255 255 255 / 75%);}
        </style>
        <div id="NAV">
            <script>
                for(let i=0 ; i<25 ; i++){
                    document.getElementById("NAV").innerHTML += `
                    <div class="content-nav" onclick="send_meesage()">
                        <div class="content-nav-users">
                            <img src="./logo_fb.png" style="width:100%; height:100%; object-fit:cover; border-radius:50%">
                        </div>
                        <div class="users_name"> amis </div>
                    </div>`
                }
            </script>
        </div>  
    </nav>


    <style>
        #main{ width:45.9%; height:200vh; margin-left:27%; margin-top:57px; padding-top:24px; }
        #main_story{ display:flex; justify-content:space-between; height:190px; margin-bottom:20px; }
        #main_story > div{ background-color:#242526; height:100%; border-radius:9px; width:15.7%; } 
        #add_story_profile{ width:100%; height:60%; border-radius:9px 9px 0px 0px; }
        #Creer_une_story{ position:relative; }
        #style_add_circle_gray{ 
            position:absolute; top:-19px; left:35%; color:#2e89ff; background-color:#242526; width:39px; height:39px; border-radius:50%;
        }
        #circle_white{ 
          background-color:white;width:20px;height:20px;border-radius: 50%;
            transform: translate(48% ,50%);display:flex; align-items:center;justify-content:center;}
        #style_add_circle_gray .material-icons{ font-size:38px; }
        #Creer_une_story>p{ color:white; padding-top:21px; text-align:center; font-size:12px; }
        .story-profile{ width:100%; height:100%; border-radius:9px; object-fit:cover; }
        .story-user-child{ position: relative; cursor: pointer; }
        .story-profile-user{ 
            position:absolute;top:7%;left:9%;width:40px;height:40px;background-color:orangered;border-radius:50%;border:4px solid #2e89ff;
        }
    </style>
    <main id="main"> 
        <div id="main_story">  
            <div style="cursor: pointer; ">  
                <img src="./profile.jpg" id="add_story_profile">  
                <div id="Creer_une_story">
                    <div id="style_add_circle_gray">
                        <div id="circle_white">
                            <div class="material-icons"> add_circle </div>
                        </div> 
                    </div>
                    <p>Creer une <br> story</p>
                </div> 
            </div>
            <div class="story-user-child"> 
                <div class="story-profile-user">
                    <img src="./logo_fb.png" style="width:100%; height:100%; object-fit:cover;border-radius:50%">
                </div>
                <img src="./profile.jpg" class="story-profile"> 
            </div>
            <div  class="story-user-child"> 
                <div class="story-profile-user">
                    <img src="./logo_fb.png" style="width:100%; height:100%; object-fit:cover;border-radius:50%">
                </div>
                 <img src="./profile.jpg" class="story-profile">   
             </div>
            <div  class="story-user-child"> 
                <div class="story-profile-user">
                    <img src="./logo_fb.png" style="width:100%; height:100%; object-fit:cover;border-radius:50%">
                </div>
                 <img src="./logo_fb.png" class="story-profile">   
             </div>
            <div  class="story-user-child"> 
                <div class="story-profile-user">
                    <img src="./logo_fb.png" style="width:100%; height:100%; object-fit:cover;border-radius:50%">
                </div>
                 <img src="./logo_fb.png" class="story-profile">   
             </div>
            <div  class="story-user-child"> 
                <div class="story-profile-user">
                    <img src="./logo_fb.png" style="width:100%; height:100%; object-fit:cover;border-radius:50%">
                </div>
                 <img src="./logo_fb.png" class="story-profile">   
             </div>
        </div>
        <style>
            #creer_une_publication{width:100%; height:125px; background-color:#242526; border-radius:9px; padding-top:9px; }
            .creer_une_publication_div1{ height:45px; margin:auto; }
            .creer_une_publication_div1 img{ width:39px; height:39px; background-color:red; border-radius:50%;}
            .creer_une_publication_div1 input{
                width:calc(100% - 40px); height:40px; background-color:#3a3b3c;margin-left: 9px;
                outline:none; border:none; border-radius:35px; padding-left:12px; color:seashell;
            }
            .flex-around-center-style{display:flex; justify-content:space-between; align-items:center; padding:3px 20px; border-radius:9px;}
            .hover:hover{ background-color:#3a3b3c; cursor:pointer; } 
            .ktaba{ color:rgba(255 255 255/70%); padding-left:6px; font-size:87%;font-weight: 500;}
        </style>
        <div id="creer_une_publication">
            <div class="creer_une_publication_div1 flex-around-center-style">
                <img src="./profile.jpg">
                <input type="text" placeholder="Quoi de neuf , Reda?" >
            </div>
            <hr style="color:gray;width:95%;margin:9px auto">
            <div class="creer_une_publication_div1 flex-around-center-style">
                <div class="flex-around-center-style hover" style="margin-left: 15px;">
                    <div class="material-icons" style="color:rgb(243 66 95);font-size:30px;"> videocam </div>
                    <div class="ktaba"> Video en direct </div>
                </div>
                <div class="flex-around-center-style hover">
                    <div class="material-icons" style="color:rgb(69 189 98);font-size:30px;"> crop_original </div>
                    <div  class="ktaba"> Photo/video </div>
                </div>
                <div class="flex-around-center-style hover" style="margin-right: 15px;">
                    <div class="material-icons" style="color:rgb(247 185 40);font-size:30px;"> tag_faces </div>
                    <div class="ktaba"> Humeur/Activite </div>
                </div>
            </div>
        </div>

        <style>
            #creer_selon{
                display: flex;align-items: center;padding-left: 20px;
                width: 100%; height: 65px; background-color: #242526; margin-top: 17px; border-radius: 9px;
            }
            #creer_selon_div1{
                display: flex; justify-content: center; align-items: center; color: white;cursor: pointer;
                width:150px; height:38px; border-radius:45px; border:1.5px solid #263951; float:left;
            }
            #creer_selon_div1:hover{ background-color: rgba(255 255 255/5%);}
            #creer_selon_div2{  width:calc(100% - 170px); height:38px; float:left; margin-left: 20px; overflow: hidden;position: relative; }
            #creer_selon_div2 [class="material-icons"] {
               position:absolute; right:1.5%; top: 4px; width:30px; height:30px; background-color: #3e4042; border-radius: 50%; 
               color: seashell; font-size: 20px; text-align: center; line-height: 28px;cursor: pointer;
            }
            .creer_selon_div2_div{ width:38px; height:38px; border-radius: 50%;float: left; margin-left: 11px; position: relative;}
            .creer_selon_div2_div::before{
                content:"";width:11.5px;height:11.5px;border-radius:50%;background-color:#242526;position:absolute; right:0%;bottom:0%; 
            }
            .creer_selon_div2_div::after{
                content:"";width:6.5px;height:6.5px;border-radius:50%;background-color:#31a24c;position:absolute;right:3px;bottom:3px; 
            }
            .creer_selon_div2_img{ width:100%; height:100%; border-radius:50%;}
            .creer_selon_div2_img:hover{ background-color:rgba(255 255 255/5%); }
        </style>
        <div id="creer_selon">
            <div id="creer_selon_div1" onclick="creer_salon()">               
                <div class="material-icons" style="font-size:30px;margin-right:5px"> video_call </div>
                <div style="font-size: 76%;"> Creer un selon </div>
            </div>
            <div id="creer_selon_div2">
                <div class="material-icons" > arrow_forward_ios </div>
                <div class="creer_selon_div2_div"><img src="./logo_fb.png" class="creer_selon_div2_img" style="margin-left: 0px;"> </div> 
                <div class="creer_selon_div2_div"><img src="./logo_fb.png" class="creer_selon_div2_img"></div>
                <div class="creer_selon_div2_div"><img src="./logo_fb.png" class="creer_selon_div2_img"></div>
                <div class="creer_selon_div2_div"><img src="./logo_fb.png" class="creer_selon_div2_img"></div>
                <div class="creer_selon_div2_div"><img src="./logo_fb.png" class="creer_selon_div2_img"></div>
                <div class="creer_selon_div2_div"><img src="./logo_fb.png" class="creer_selon_div2_img"></div>
                <div class="creer_selon_div2_div"><img src="./logo_fb.png" class="creer_selon_div2_img"></div>
                <div class="creer_selon_div2_div"><img src="./logo_fb.png" class="creer_selon_div2_img"></div>
                <div class="creer_selon_div2_div"><img src="./logo_fb.png" class="creer_selon_div2_img"></div>
                <div class="creer_selon_div2_div"><img src="./logo_fb.png" class="creer_selon_div2_img"></div>
                <div class="creer_selon_div2_div"><img src="./logo_fb.png" class="creer_selon_div2_img"></div>
                <div class="creer_selon_div2_div"><img src="./logo_fb.png" class="creer_selon_div2_img"></div>
                <div class="creer_selon_div2_div"><img src="./logo_fb.png" class="creer_selon_div2_img"></div>
                <div class="creer_selon_div2_div"><img src="./logo_fb.png" class="creer_selon_div2_img"></div>
                <div class="creer_selon_div2_div"><img src="./logo_fb.png" class="creer_selon_div2_img"></div>
            </div>
        </div>
        <style>
            .section_staut_with_img{
                width:100%; background-color:#242526; border-radius:9px; margin-top:19px; padding-top:14px; padding-bottom:3px;
            }
            .main-head-post{height:45px;display:flex;justify-content:space-between;align-items:center; cursor:pointer; }
            .main-head-post-part1{ margin-left:13px; display:flex; align-items:center; }
            .main-head-post-part1-img{ width:40px; height:40px; border-radius:50%; margin-right:10px; }
            .main-head-post-part1-div{ font-size:92%; font-weight:600;color:rgba(255 255 255/75%); }
            .main-head-post-part2{ 
              margin-right:13px;width:35px;height:35px;border-radius:50%;display:flex;justify-content:center;align-items: center;font-size:95%;
            }
            .main-head-post-part2:hover{ background-color: rgba(255 255 255/25%);}
            .statut{ min-height:50px; max-height: 70px; overflow: hidden; color:rgba(255 255 255/75%); margin:19px;}
            .section_images{ width: 100%;height:590px; border:0.02px solid gray; }
            .section_images img{width: 100%; max-height: 100%; object-fit: cover; cursor:pointer;}
            .section_vue{display:flex; justify-content:space-between; align-items:center; color:rgba(255 255 255/75%); height:45px;}
            .section_vue_part1{ margin-left:15px; display:flex; align-items:center;}
            .section_vue_part1 div{ margin-left:15px; display:flex; align-items:center;}
            .section_vue_part2{margin-right:15px; font-size: 90%;}
            .comonter_up{ display:flex; justify-content:center; align-items:center; }
            .comonter_up_shild{width:30%;display:flex;justify-content:center;align-items:center;padding:10px 0px;color:rgba(255 255 255 /75%) }
            .comonter_up_shild [class="material-icons"]{ color:transparent; -webkit-text-stroke: 1px rgba(255 255 255/75%) ;}
            .comonter_up_shild:hover{ background-color: rgba(255 255 255/25%); width:30%;cursor: pointer;border-radius: 9px; }
        </style>
        <section class="section_staut_with_img">
            <div class="main-head-post">
                <div class="main-head-post-part1"> 
                    <img src="./logo_fb.png" class="main-head-post-part1-img">
                    <div class="main-head-post-part1-div"> User Name</div>
                </div>
                <div class="main-head-post-part2">
                    <span class="material-icons" style="color:rgba(255 255 255 /75%)"> more_horiz </span>
                </div>
            </div>
            <div class="statut">
                statut . Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates asperiores enim amet necessitatibus, omnis odio, suscipit rem ratione quis nihil veniam in laboriosam eius! Sapiente vel corporis vitae omnis ipsum!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum, saepe itaque optio quo praesentium veniam eveniet eos nostrum alias animi aliquam quia aspernatur. Sint nemo, quas ipsum debitis mollitia magnam!Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit illo, eius perferendis recusandae veritatis debitis reprehenderit ex hic expedita id nihil illum officia maiores et quas beatae nobis nam quasi.
            </div>
            <div class="section_images">
                <img src="./logo_fb.png">
            </div>
            <div class="section_vue">
                <span class="material-icons section_vue_part1" style="font-size:95%;background-color:#2e89ff;padding:4.8px;border-radius:50%;cursor:pointer;"> thumb_up </span>
                <div class="section_vue_part2"> <span>0</span> commentairs </div>
            </div>
            <hr style="width:90%; margin-left:5%;margin-top:-2px;margin-bottom:7px; color:rgba(255 255 255/75%);">
            <div class="comonter_up">
                <div class="comonter_up_shild">
                    <div class="material-icons">thumb_up</div>
                    <div style="margin-left:7px;"> J'aime </div>
                </div>
                <div class="comonter_up_shild">
                    <div class="material-icons">mode_comment</div> 
                    <div  style="margin-left:7px;">Commenter</div>
                </div>
                <div class="comonter_up_shild">
                    <div class="material-icons">reply</div> 
                    <div  style="margin-left:7px;">Partager</div>
                </div>
            </div>
        </section>
        <style>
            #connaissez-vous{height:436px; background-color:#242526; border-radius:9px; margin-top:19px; padding-top:14px; width:100%;}
            #scro{width: 100%;height:328px;overflow-y:hidden;overflow-x:auto;}
            #scro::-webkit-scrollbar{width:0px;}
            #connaissez-vous-ajouter{width:320%;height:310px;padding-left:15px;overflow-y:hidden;overflow-x:auto;}
            .connaissez-vous-ajouter-carde{border:0.4px solid gray;border-radius:9px;width:200px;margin-right:9px;height:310px;float:left;}
            .connaissez-vous-ajouter-carde-img{ height:65%; cursor:pointer;}
            .connaissez-vous-ajouter-carde-img:hover{ height:65%; cursor:pointer; opacity:0.85;}
            .connaissez-vous-ajouter-carde-img img{width:100%;height:100%;border-radius:9px 9px 0px 0px; border-bottom:0.09px solid gray;}
            .connaissez-vous-ajouter-carde-name{height:11%;color:rgba(255 255 255/85%);padding-top:5px;padding-left:10px;font-weight:560;}
            .connaissez-vous-ajouter-carde-add{ display:flex;justify-content:center;align-items:flex-end;height:24%;border-radius:0px 0px 9px 9px;}
            .connaissez-vous-ajouter-carde-button{
                display:flex; justify-content:center; align-items:flex-end; margin-bottom:14.5px; width:80%;
                color:rgb(45 136 255);background-color:rgb(38 57 81); padding:5px 0px; border-radius:9px; cursor:pointer;
            }
            .connaissez-vous-ajouter-carde-button:hover{background-color: rgba(38 57 81/70%);}
            #connaissez-vous button{
                width:calc(100% - 34px);color:rgba(255 255 255/75%);outline:none;border:none;border-radius:9px;margin-left:17px;
                padding: 7.5px 0px;background-color:#242526;margin-top:12px ; clear: both;margin-top:-5px;}
            #connaissez-vous button:hover{
                background-color: rgba(255 255 255/5%);
            }
        </style>
        
        <section id="connaissez-vous">
            <div class="main-head-post">
                <div class="main-head-post-part1"> 
                    <div class="main-head-post-part1-div" style="font-size:100%; font-weight:550"> Connaissez-vous...</div>
                </div>
                <div class="main-head-post-part2">
                    <span class="material-icons" style="color:rgba(255 255 255 /75%)"> more_horiz </span>
                </div>  
            </div>
            <div id ="scro"style="">
                <div id="connaissez-vous-ajouter">
                
                </div>
            </div>
        </section>
        <script>
            for(let i = 0 ; i < 9 ; i++ ){
                document.getElementById("connaissez-vous-ajouter").innerHTML += `
                <div  class="connaissez-vous-ajouter-carde">
                    <div class="connaissez-vous-ajouter-carde-img">
                        <img src="./logo_fb.png"/>
                    </div>
                    <div class="connaissez-vous-ajouter-carde-name"> User Name </div>
                    <div class="connaissez-vous-ajouter-carde-add">
                        <div class="connaissez-vous-ajouter-carde-button">
                            <div class="material-icons">person_add</div>
                            <div style="margin-left:7px;">Ajouter</div>
                        </div>
                    </div>
                </div>`
            }
            document.getElementById("connaissez-vous").innerHTML += `<button> Voir tout</button>`
        </script>
    </main>
    <style>
        #writing-mes{
            background-color:rgba(255 255 255/11%); width:50px; height:50px; position:absolute; bottom:0px; left:16px;
            border-radius:50%; cursor:pointer; display:flex; justify-content:center; align-items:center;
        }
        #writing-mes:hover{ background-color:rgba(255 255 255/20%); }
        #holri_parent{position:absolute;right:7px;width:40px;height:40px;border-radius:50%; }
        #holri{width:40px;height:40px;border-radius:50%;background-color:rgba(255 255 255/11%);position:absolute;}
        #holri:hover{ background-color:rgba(255 255 255/20%); cursor:pointer; }
    </style>
    <div style="position:fixed;bottom:13.5px;right:16px;width:67px;height:99px;">
        <div id="writing-mes" onmouseover="writ()" onmouseout="mov()">
            <div class="material-icons" style="font-size:28px;color:white;">note_alt</div> 
        </div>
        <div id="holri_parent" onmouseover="writ()" onmouseout="mov()">
            <div id="holri">
                <div class="material-icons" style="color:white;margin-left:8px;margin-top:9px;">more_horiz</div>
            </div>
        </div>
        
        <script>
            document.getElementById("holri").style.display = "none";
            function writ(){
                document.getElementById("holri").style.display = "block";
            }
            function mov(){
                document.getElementById("holri").style.display = "none";
            }
        </script>
    </div>

    <style>
        #salon{position:fixed;top:calc(59% - 250px);right:calc(50% - 250px);opacity:1;cursor:pointer;width:502px;
            height:340px;background-color:rgb(36 37 38);border-radius:6px;box-shadow:4px 5px 12px rgba(0 0 0/30%)}
        .sellon_header{width:37px;height:37px;border-radius:50%;background-color:rgba(255 255 255/8%);color:white;
           display:flex;justify-content:center;align-items:center;margin-right:5px;color:rgba(255 255 255/75%)}
        #salon_cadr{display:flex;justify-content:center;align-items:center;width:80px;height:80px;margin-top:-45px;
            border-radius:50%;border:1.2px solid rgb(37 47 60);position:absolute;right:calc(51% - 46.5px);}
        #salon_cadr span{ font-size:40px; color:white; }
        #salon >p{margin-top:37px;color:white;font-weight:700;font-size:20px;text-align:center;}
        .salon-cadr-div{padding:5.5px 12px;border-radius:8px;display:flex;align-items:center;}
        .salon-cadr-div:hover{background-color:rgba(255 255 255/9%);}
        #salon button{margin-top:9px;border:none;outline:none;border-radius:5px;width:97%;margin-left:1.5%;
            height:36.5px;font-weight:500;background-color:rgb(35 116 225);color:rgba(255 255 255/85%)}
        #salon button:hover{ background-color:rgb(35 116 225/85%) }
    </style>
    <div id="salon" style="padding:2px 9px;">
        <div style="display:flex;flex-direction:row-reverse;padding:12px 9px;">
            <div class="sellon_header" onclick="remove_salon()">
                <span class="material-icons"> clear </span>
            </div>
            <div class="sellon_header">
                <span class="material-icons"> info </span>
            </div>
        </div>
        <div id="salon_cadr">
            <span class="material-icons"> video_call </span>
        </div>
        <p>Créez votre salon</p>
        <div class="salon-cadr-div" style="margin-top:-9px;color:rgba(255 255 255/75%)">
            <div class="sellon_header" style="width:40px;height:40px;margin-left:-5px;">
                <span class="material-icons" style="color:rgb(247 183 28);transform:rotate(-25deg)">back_hand</span>
            </div>
            <div style="margin-left:9px;">
                <div style="font-size:95%;"><b> Nom du salon </b></div>
                <div style="font-size:95%;margin-top:-4px;"><small> Salon de User </small></div>
            </div>
        </div>

        <div class="salon-cadr-div" style="color:rgba(255 255 255/75%)">
            <div class="sellon_header" style="width:40px;height:40px;margin-left:-5px;">
                <span class="material-icons" style="color:rgba(255 255 255/75%);transform:rotate(-5deg)">alarm</span>
            </div>
            <div style="margin-left:9px;">
                <div style="font-size:95%;"><b> Date/heure de debut </b></div>
                <div style="font-size:95%;margin-top:-4px;"><small> Maintenant </small></div>
            </div>
        </div>
        <div style="color:rgba(255 255 255/75%);text-align:center;font-size:12px;margin-top:17px;">
            Votre salon ne sera visible que lorsque vous aurez invité des personnes après l’avoir créé.
        </div>
        <button> Creer un salon </button>
        <script>
            document.getElementById('salon').style.display='none'
            function creer_salon(){
                document.getElementById('salon').style.display='block'
                document.getElementById("header").style.opacity = "0.3"
                document.getElementById("nav").style.opacity = "0.3"
                document.getElementById("aside").style.opacity = "0.3"
                document.getElementById("main").style.opacity = "0.3"
                document.getElementById("salon").style.display = "block"
            }
            function remove_salon(){
                document.getElementById('salon').style.display='none'
                document.getElementById("header").style.opacity = "1"
                document.getElementById("nav").style.opacity = "1"
                document.getElementById("aside").style.opacity = "1"
                document.getElementById("main").style.opacity = "1"
            }
        </script>
    </div>

    <style>
        footer{ display:flex;flex-direction: row-reverse;float:right;
            width:max-content;height:443px;position:fixed;bottom:0px;right:80px;}
        .sending{ width:8.7cm;height:100%;background-color:rgb(36 37 38);border-radius:7px  7px 0px 0px;margin-left:9px;box-shadow:-1px -1px 20px rgba(0 0 0/50%); }
        .sending-header{display:flex;justify-content:space-between;padding:6px 0px;background-color:rgb(36 37 38);
            color:rgba(255 255 255/75%);border-radius:7px  7px 0px 0px;}
        .sending-header-part1{display:flex;align-items:center;margin-left:7px;padding-right:2px;min-width:46%;border-radius:6px; }
        .sending-header-part1:hover{  background-color: rgba(255 255 255/9%);  }
        .sending-header-part2{  display:flex; margin-right: 10px; padding-top:4px; }
        .styl_icons{width:26px;height:26px;border-radius: 50%;color:rgba(255 255 255/40%);
            display:flex;align-items:center;justify-content:center;}
        .styl_icons:hover{background-color:rgba(255 255 255/9%); cursor:pointer;}
        .sending-profile-content{width:60px;height:60px;border-radius:50%;position:absolute;margin-left:calc(50% - 32px);margin-top:45px;}
        .sending-profile-content img{width:100%;height:100%;border-radius:50%;}
        .en-lign{width: 16px;height: 16px;background-color:rgb(36 37 38);border-radius:50%; position:absolute;right:0px;bottom:3px;}
        .en-lign div{width: 13px;height: 13px; background-color:rgb(49 162 76);border-radius:50%;margin: 1.5px;}
        .HR{ height:0.4px; background-color:rgba(255 255 255/20%); box-shadow:0.5px 0.5px 2px rgba(0 0 0/80%); }
        .messaGe-send{color:rgba(255 255 255/55%);width:calc(100% - 9px);height:40px;position:absolute;bottom:9px;
            display:flex;align-items:center;justify-content:space-between;padding:0px 8.5px; }
        .messaGe-send textarea{height:80%;border-radius:20px;resize:none;outline:none;padding:2px 7px;height: 34px;
            width:150px;margin:0px 4px;background-color:rgb(58 59 60);border:none;color:rgba(255 255 255/75%)}
        .messaGe-send div{ cursor: pointer;}
    </style>
    <footer id="footer">
        <script>
            function send_meesage(){
                document.getElementById("footer").innerHTML = `
                    <div class="sending">
                        <div class="sending-header">
                            <div class="sending-header-part1">
                                <div>
                                    <div class="material-icons" style="font-size: 34px;"> account_circle </div>
                                    <div class="en-lign" style="position:absolute;top:24px;left:39px;width:13px;height:13px;">
                                        <div style="width:10px;height:10px;"></div>
                                    </div>
                                </div>
                                <div style="margin-left:6px">
                                    <div style="font-size:80%; font-weight:540;"> User Name </div>
                                    <div style="font-size:60%;"> en ligne </div>
                                </div>
                            </div>
                            <div class="sending-header-part2">
                                <div class="styl_icons">
                                    <div class="material-icons" style="font-size: 99%;"> call </div>
                                </div>
                                <div class="styl_icons">
                                    <div class="material-icons" style="font-size: 99%;"> videocam </div>
                                </div>
                                <div class="styl_icons">
                                    <div class="material-icons" style="font-size: 99%;"> remove  </div>
                                </div>
                                <div class="styl_icons" onclick="document.getElementById('footer').innerHTML = ''">
                                    <div class="material-icons" style="font-size: 99%;"> clear </div>
                                </div>
                            </div>    
                        </div>
                        <div class="HR"></div>
                        <div class="sending-profile-content">
                            <img src="./logo_fb.png"/>
                            <div class="en-lign">
                                <div>  </div>
                            </div>
                        </div>
                        <div style="text-align:center;margin-top:106px;">
                            <div style="font-weight:500;color:rgba(255 255 255/90%);">User Name</div>
                            <div style="color:rgba(255 255 255/65%)"><small><small>Vous êtes amis sur Facebook<br>Habite à Sidi Sliman, Kenitra, Morocco<br>Sidi Slimane (Maroc)</small></small></div>
                        </div>
                        <div class="messaGe-send">
                            <div class="material-icons" onclick=""> add_circle_outline </div>
                            <div class="material-icons" onclick=""> collections </div>
                            <div class="material-icons" onclick=""> sentiment_satisfied </div>
                            <div class="material-icons" onclick=""> gif_box </div>
                            <textarea placeholder="Aa" id="text-area-message"></textarea>
                            <div class="material-icons"  onclick=""> thumb_up </div>
                        </div>
                </div>`
            }
        </script>
    </footer>
</body> 
</html>