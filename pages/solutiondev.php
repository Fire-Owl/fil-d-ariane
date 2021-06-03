<?php include '../includes/header.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../assets/styles/solutiondev.css">
<title>Solutiondev</title>
</head>
<body>

<div class="mainWrap">

<div></div>
<div class="firstbloc">
<h1>S’adresser aux séniors en tant que développeur</h1>
<p class="secbloc_p">Rendre son site web accessible devrait être parmi les priorités de tout designer ou développeur qui souhaite s’adresser à un large public.</p>
<p class="secbloc_p">Rendre son site accessible aux seniors est un enjeu majeur du développement web car un site accessible bénéficiera non seulement aux séniors mais aussi à tous les types d’internautes qu’ils présentent un handicap ou non en leur offrant une interaction avec vos pages optimisée et une expérience utilisateur satisfaisante et adaptée. En effet, plus de 80% des sites web français ne sont pas accessibles à tous.</p>
<p class="secbloc_p">Prendre en compte cette problématique de l’accessibilité web pour le développement de sites aura comme conséquence directe d’améliorer la visibilité de vos sites, de toucher un public plus étendu et donc d’améliorer le trafic des sites.</p> 
<p>L’accessibilité n’a que des avantages et bénéficie à tous, n’attendez plus pour l’intégrer à vos projets web !</p>
</p>
</div>
<div></div>
<div><img id="firstblocimg" src="../assets/images/Group 55.svg" alt=""></div>
<div></div>
</div>


<div class="mainWrap2">

<div></div>
<div class="secbloc">
<h1 class="second_title">Quelles sont les bonnes pratiques de l’accessibilité ? </h1>
<p class="second_title1">La sémantique HTML 5</p>
<img id="secblocimg" src="../assets/images/Group 43.svg" alt="">
</div>
<div></div>
<div class="text_area">
<p class="secbloc_p"><span id="text_orange">Il s’agit de la base impérative au développement de n’importe quel site accessible.</span></p>
<p class="secbloc_p">Cela consiste à utiliser les éléments sémantiques prévus par HMTL 5 pour construire son site.</p>
<p class="secbloc_p">En effet, ceux-ci prévoient intrinsèquement les styles, les propriétés ou éléments permettant une meilleure accessibilité. 
De plus, votre code sera clair, compréhensible et plus facile à développer notamment sur mobile grâce à un code plus léger. 
Enfin, la lecture du code ne sera pas facilitée que pour les lecteurs d’écrans mais aussi pour les robots de Google qui apprécieront votre code sémantique et vous attribueront un meilleur référencement naturel qu’un code spaghetti.</p>
</div>
<div></div>
<p>
</div>

<div class="mainWrap3">
<div></div>
<div class="firstbloc">
<p class="link">Pour en savoir plus sur le sectionnement de votre code :</p>
<a href="https://developer.mozilla.org/fr/docs/Web/HTML/Element#content_sectioning">https://developer.mozilla.org/fr/docs/Web/HTML/Element#content_sectioning</a>
<div></div>
<p class="secbloc_p">Les trois axes majeurs du développement accessible concernent les textes, les boutons de contrôle et les images.
Les textes doivent especter la hiérarchie des titres et les balises HTML dédiées. Ils doivent également utiliser un langage clair.
Les boutons de contrôle doivent être des comporter l’attribut data-message.
Les images doivent utiliser des noms de fichiers significatifs. On doit ajouter les attributs ALT et TITLE aux balises iamges ou utiliser l’attribut ARIA-LABELLEDBY et la balise paragraphe avec le même ID que cet attribut. 
</p>
</div>
<div></div>
<div><img id="thirdblocimg" src="../assets/images/alt-aria 1.png" alt=""></div>
<div></div>
</div>

<div class="mainWrap2">

<div></div>
<div class="secbloc">
<p class="second_title1">Les feuilles de style et JavaScript</p>
<img id="secblocimg" src="../assets/images/Group 22.svg" alt="">
</div>
<div></div>
<div class="text_area1">
<p class="secbloc_p"><span id="text_orange">Ces 2 langages peuvent nuire à l’accessibilité quand ils sont utilisés de façon hasardeuse</span>.</p>
<p class="secbloc_p">En matière de styles, les internautes attendent certains comportements lors de leur navigation car des conventions communes ont été établies mondialement. Il convient donc de maintenir ces styles et comportements sur votre site afin de ne pas perdre l’internaute qui a ses habitudes.</p> 
<p class="secbloc_p">Vous devez produire des textes lisibles et agréables à lire, vérifier un contraste suffisant entre votre charte graphique et vos textes. 
Vos liens doivent respecter les comportements attendus des utilisateurs (signaler des changements d’états, afficher un curseur, afficher des contour …)</p>
<p class="secbloc_p">Concerant JavaScript, il ne faut pas en abuser pour créer des éléments HTML non sémantiques.</p>
</div>
<div></div>
</div>
</div>

<div class="mainWrap3">
<div></div>
<div class="thirdbloc">
<p class="second_title1">WAI-ARIA</p>
<div></div>
<p><span id="text_orange">WAI-ARIA sert à appliquer des attributs HTML supplémentaires pour améliorer la sémantique et l’accessibilité.</span></p>
<p>Trois attributs ARIA principaux sont à prendre en compte :</p>
<li class="secbloc_p">Rôles : ce qu'un élément est ou fait.
Ex :  role = "navigation" (<nav>) , role="banner", role="search",</li>
<li class="secbloc_p">Propriétés : ce sont les propriétés des éléments.
Ex : aria-required="true" aria-labelledby="label"</li> 
<li class="secbloc_p">États : ce sont les conditions actuelles des éléments. Ils renvoient à Javascript.
Ex :  aria-disabled="true",</li>

</div>
<div></div>
<div><img id="thirdblocimg" src="../assets/images/Group 40.svg" alt=""></div>
<div></div>
</div>

<div class="mainWrap2">

<div></div>
<div class="secbloc">
<p class="second_title1">Le contenu multimédia</p>
<img id="secblocimg" src="../assets/images/Parkinson-amico 1.svg" alt="">
<p>L’accessibilité web est une spécialité complexe du développement qui ne se limite pas aux points techniques énumérés ci-dessus qui nécessite un approfondissement et une interaction réelle et des tests en collaboration avec le public cible visé par le site.</p>
</div>
<div></div>
<div class="text_area1">
<p class="secbloc_p">Il s’agit d’un vecteur de problèmes d’accessibilité.</p>
<p class="secbloc_p">Le problème des images a été abordé un peu plus haut dans cette page.</p>
<p class="secbloc_p">Quant aux vidéos et aux audios, il est nécessaire de créer des contrôleurs personnalisés utilisables au clavier pour les boutons des lecteurs vidéos ou audios et de créer des transcripteurs de texte pour l'audio car par défaut, ils ne sont pas otpimisés pour l’accessibilité.</p>
</div>
<div></div>
</div>
</div>





<?php include '../includes/footer.php'; ?>