//récupération des contenus
var listeFait,listeAFaire , ajout, dom, ajout_lien, liste_lien;
listeFait = document.getElementById('listeFait');
listeAFaire = document.getElementById('listeAFaire');
ajout = document.getElementById('ajout');
liste_lien = document.getElementById('liste_lien');
ajout_lien = document.getElementById('ajout_lien');
dom = document.getElementById('dom');

// stoquer les contenus
var listeFait_dom,listeAFaire_dom , ajout_dom,
listeFait_dom = listeFait.innerHTML;
listeFait.innerHTML = "";
listeAFaire_dom = listeAFaire.innerHTML;
listeAFaire.innerHTML = "";
ajout_dom = ajout.innerHTML;
ajout.innerHTML = "";

var section,lienSection, conteneurDom;
function affichageDom(section,lienSection, conteneurDom){
  function contenuDom(){
    conteneurDom.innerHTML = section;
  };
  document.getElementById(lienSection).addEventListener('click',contenuDom);
}
dom.innerHTML = listeAFaire_dom;
affichageDom(listeFait_dom, 'listeFait_lien', dom);
affichageDom(listeAFaire_dom, 'listeAFaire_lien', dom);
affichageDom(ajout_dom, 'ajout_lien', dom);

console.log(ajout.innerHTML);
