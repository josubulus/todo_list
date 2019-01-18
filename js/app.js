//récupération des contenus
var liste, ajout, dom, ajout_lien, liste_lien;
liste = document.getElementById('liste');
ajout = document.getElementById('ajout');
liste_lien = document.getElementById('liste_lien');
ajout_lien = document.getElementById('ajout_lien');
dom = document.getElementById('dom');

// stoquer les contenus
var liste_dom, ajout_dom,
liste_dom = liste.innerHTML;
liste.innerHTML = "";
ajout_dom = ajout.innerHTML;
ajout.innerHTML = "";

var section,lienSection, conteneurDom;
function affichageDom(section,lienSection, conteneurDom){
  function contenuDom(){
    conteneurDom.innerHTML = section;
  };
  document.getElementById(lienSection).addEventListener('click',contenuDom);
}
dom.innerHTML = liste_dom;
affichageDom(liste_dom, 'liste_lien', dom);
affichageDom(ajout_dom, 'ajout_lien', dom);
