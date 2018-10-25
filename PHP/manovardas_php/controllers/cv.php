<?php

// Nustatome pagr. $page masyvui
// vertes atitinkamai pagal tai, ką daro mūsų puslapis

$page['title'] = 'CV';
$page['show_footer'] = true;
$page['show_header'] = false;
$page['show_menu'] = true;

// Visus 'content' skiltyje esančius kintamuosius
// nustatome pasirinktinai pagal tai, kaip suformavome
// template į kurį juos spausdinsime.
$page['content']['title'] = 'Sveiki atvykę į mano pirmąjį homepage!';
$page['content']['subtitle'] = 'Subtitle';

// Index.php esame nurodę išspausdinti 'rendered' indekso
// turinį iš 'content'. Todėl šiam indeksui priskiriame
// sugeneruotą HTML kodą, gaunamą iš render_page funkcijos
// Funkcija render_page, $page masyvą perduoda į template, kurią
// nurodome antrame parametre. 
$page['content']['rendered'] = render_page($page, 'page-cv');
