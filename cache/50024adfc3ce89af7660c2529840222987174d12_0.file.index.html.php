<?php
/* Smarty version 3.1.30, created on 2020-08-12 17:30:39
  from "/opt/lampp/htdocs/SAMANEMVC/TDSamaneMVC/src/view/welcome/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f340b1f6cdcd0_15582287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50024adfc3ce89af7660c2529840222987174d12' => 
    array (
      0 => '/opt/lampp/htdocs/SAMANEMVC/TDSamaneMVC/src/view/welcome/index.html',
      1 => 1597246233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f340b1f6cdcd0_15582287 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Welcome</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/test.css" />
		<!-- integration de javascript dans le moteur de rendu de vue Smarty -->
		
			<?php echo '<script'; ?>
 language=javascript>
			function load_design() {
			   document.getElementById("design_js").style.color = "#40007d";
			}

			<?php echo '</script'; ?>
>
		
	</head>
	<body onload="load_design()">
		<header id="top" class="bg-white">
			<nav  class="flex-row">
				<div class="logo">
					<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo-Recupere.png" alt="logo banque du peuple" class="image"/></a>
				</div>
				<div class="texte plus-grand text-center">
					<h1 class="title-banque"> Banque du peuple </h1>
				</div>
				<div class="user-logo">
					<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/user.jpeg" alt="logo banque du peuple" class="image"/></a>
				</div>
			</nav>
    	</header>
		<main class="flex-row">
        <section id="left" class="bg-white ">
            <div class="info-user flex-row">
                <div class="img">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/user.jpeg" alt="logo banque du peuple" class="image"/></a>
                </div>
                <div class="plus-grand">
                    <p>Marame Niang</p>
                    <p>Fonction :Developpeur</p>
                    <p>Agence : AZER1232</p>
                </div>
            </div>
            <hr class="trait bg-red"/>
            <div class="site-bar">
                <div class="marge">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/compte.png" alt="ok" class="icone" />
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
" class="bolt"> Gestion Compte </a>
                    <ul>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
"> Ajouter Compte </a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
"> Lister Compte </a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
"> Fermer Compte </a></li>
                    </ul>
                </div>
                <div class="marge">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/compte.png" alt="ok" class="icone"  />
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
" class="bolt"> Opération bancaire </a>
                    <ul>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
"> Opération de virement  </a></li>
                    </ul>
                </div>
            </div>
            <hr class="trait bg-red"/>
            <div class="">
                <input type="button" class="btn bg-red " value="Se déconnecter">
            </div>
        </section>
        <section id="contain" class="plus-grand bg-white">
            <!--onsubmit="return FormValider(this)" onsubmit="return FormValider(this)" -->
            <form  action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/insert" method="POST"   id="form">
                    <div id="taplap" class="flex-row flex-center">
                        <div class="item bg-red">
                            Client :
                        </div>
                        <div class="item bg-red">
                            Information Client :
                        </div>
                        <div class="item bg-red">
                            Information Compte :
                        </div>
                    </div>
                   <!-- <div class="flex-row flex-right">
                        <div id="notif flex-col">
                            <div>ok</div>
                            <div>&times;</div>
                        </div>
                   </div> -->
                    <div class="flex-row">
                        <?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
							<?php if ($_smarty_tpl->tpl_vars['ok']->value == 1) {?>
								donne ajoute
							<?php } else { ?>
								donne non ajoute
							<?php }?>
						<?php }?>
                    </div>
                <hr class="marge"/>
                <div id="contenue">
                    <div id="form_client" class="flex-row flex-right">
                        <div class="radio">
                            <input type="radio" name="choix_client" id="nouveau" value="nouveau" onclick="choixClient()"/>
                            <label for="ok1">Nouveau</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="choix_client" id="existant" value="existant" onclick="choixClient()"/>
                            <label for="ok2">Existant</label>
                        </div>
                    </div>
                    <div class="flex-row">
                        <div id="form_type_client">
                            <fieldset>
                                <legend class="text-center"> Type de Client</legend>
                                <div class="flex-row">
                                    <div class="radio">
                                        <input type="radio" name="choix_type_client" id="physique" value="physique" onclick="choixTypeClient()"/>
                                        <label for="ok1">Physique</label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" name="choix_type_client" id="entreprise" value="entreprise" onclick="choixTypeClient()" />
                                        <label for="ok2">Entreprise</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div id="form_existant">
                            <fieldset class="flex-col">
                                <legend class="text-center"> Client Existant </legend>
                                <div class="form-group flex-row-between">
                                    <label>Identifiant du client </label>
                                    <input type="search" name="search" id="search"  onkeyup="searchValid()"/>

                                </div>
                                <div id="trouve"></div>
                            </fieldset>
                        </div>
                        <div id="form_compte" >
                            <fieldset  class="flex-col">
                                <legend class="text-center">Type de compte</legend>
                                <div  class="flex-row">
                                    <div class="radio">
                                        <input type="radio" name="choix_compte" id="simple" value="simple" onclick="choixTypeCompte()"/>
                                        <label for="ok1">Simple et Xeewel</label>
                                    </div>
                                    <div class="radio" id='compte_courant'>
                                        <input type="radio" name="choix_compte" id="courant" value="courant" onclick="choixTypeCompte()" />
                                        <label for="ok2">Courant</label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" name="choix_compte" id="bloque" value="bloque" onclick="choixTypeCompte()"/>
                                        <label for="ok1">Bloqué</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <input type="hidden" id="choixcompte" name="choixcompte" value="">
                    <div class="flex-row">
                        <div class="flex-row">
                            <div id="form_client_physique" class="flex-row">
                                <fieldset class="flex-col">
                                    <legend class="text-center"> Nouveau Client Physique</legend>
                                    <div class="form-group flex-row-between">
                                        <label>CNI</label>
                                        <input type="text" name="cni" id="cni" onblur="testCNI(this)" />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label>Nom</label>
                                        <input type="text" name="nom" id="nom" onblur="testChamps(this)" />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label>Prenom</label>
                                        <input type="text" name="prenom" id="prenom" onblur="testChamps(this)"/>
                                    </div>
                                    <div class="form-group flex-row-between">
                                    <label>Sexe</label>
                                        <select name="sexe" id="sexe" class="" onblur="testChamps(this)" >
                                            <option value="">----------------</option>
                                            <option value="masculin">Masculin</option>
                                            <option value="feminin">Feminin</option>
                                        </select>
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label>DateNaiss</label>
                                        <input type="date" name="datenaiss" id="datenaiss" onblur="testChamps(this)"   />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label>Adresse</label>
                                        <input type="text" name="adr" id="adr"  />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label>Telephone</label>
                                        <input type="text" name="tel" id="tel" onblur="testNumero(this)"   />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label>Email (optionnel)</label>
                                        <input type="email" name="email" id="email" onblur="testEmail(this)"  />
                                    </div>
                                </fieldset>
                            </div>
                            <div id="form_client_moral" class="flex-row">
                                <fieldset class="flex-col ">
                                    <legend class="text-center"> Nouveau Client Entreprise</legend>
                                    <div class="form-group flex-row-between">
                                        <label>Nom Entreprise <span class="white">*</span></label>
                                        <input type="text" name="nom_entreprise" id="nom_entreprise" onblur="testChamps(this)"/>
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label>Telephone</label>
                                        <input type="text" name="tel_entreprise" id="tel_entreprise" onblur="testNumero(this)"  />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label>Email (optionnel)</label>
                                        <input type="email" name="email_entreprise" id="email_entreprise" onblur="testEmail(this)" />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label>Budget</label>
                                        <input type="number" name="budget_entreprise" id="budget_entreprise" onblur="testChamps(this)" />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label>Localité </label>
                                        <input type="text" name="adr_entreprise" id="adr_entreprise"  />
                                    </div>
                                </fieldset>
                            </div>
                        </div>

                        <div class="flex-row">
                            <div id="form_compte_simple" class="flex-row">
                                <fieldset class="flex-col">
                                    <legend class="text-center"> Compte Simple et Xeewel</legend>
                                    <div class="form-group">
                                        <label>frais d’ouverture obligatoire : exple : 25 000CFA </label>
                                        <label>Rémunéré annuellement : exple : 10 000CFA </label>
                                    </div>
                                </fieldset>
                            </div>
                            <div id="form_courant" class="flex-row">
                                <fieldset class="flex-col">
                                    <legend class="text-center"> Compte Courant</legend>
                                    <div class="form-group flex-row-between">
                                        <label>Raison social </label>
                                        <input type="text" name="raison_sociale" id="raison_sociale" onblur="testChamps(this)"/>
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label>Salaire</label>
                                        <input type="number" name="salaire" id="salaire" onblur="testChamps(this)"/>
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label>Nom Employeur</label>
                                        <input type="text" name="nom_employeur" id="nom_employeur" onblur="testChamps(this)" />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label>Adresse</label>
                                        <input type="text" name="adr_employeur" id="adr_employeur"  />
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label>agios  : à retirer tous les trois mois.</label>
                                    </div>
                                </fieldset>
                            </div>
                            <div id="form_bloque" class="flex-row">
                                <fieldset class="flex-col">
                                    <legend class="text-center"> Compte Bloqué</legend>
                                    <div class="form-group">
                                        <label>frais d’ouverture obligatoire : exple : 25 000CFA </label>
                                        <label>Rémunéré annuellement : exple : 10 000CFA </label>
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label>Date Debut</label>
                                        <input type="date" name="date_debut" id="date_debut" onblur="testChamps(this)"/>
                                    </div>
                                    <div class="form-group flex-row-between">
                                        <label>Date Fin</label>
                                        <input type="date" name="date_fin" id="date_fin" onblur="testChamps(this)"/>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="float-right">
                    <input type="submit" class="bg-red" value="Valider" name="submit" id="valider"/>
                </div>
            </form>
        </section>
    </main>
    <footer>
        <section class="text-center bg-white footer">
            &copy Copyright @Groupe 5
        </section>
    </footer>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/test.js"><?php echo '</script'; ?>
>
	</body>
</html>
<?php }
}
