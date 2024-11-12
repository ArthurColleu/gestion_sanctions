<?php

namespace App\Vues;

use App\Utilitaire\Vue_Composant;

class Vue_Mentions_Legales extends Vue_Composant
{
    private string $msgErreur;
    public function __construct(string $msgErreur ="")
    {
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        return "
        <h1 class='text-center'>Mentions Légales</h1>
        <div class='container px-5' style='margin-bottom: 100px;'>
            <h2>Éditeur du site</h2>
            <ul>
                <li><strong>Nom de l’établissement </strong>: Lycée Gaudper</li>
                <li><strong>Adresse</strong>: 59, place de Fernandes , Blin 92183</li>
                <li><strong>Téléphone</strong>: +33 (0)1 52 89 69 88</li>
                <li><strong>Directeur de la publication</strong>: Arthur Colleu</li>
            </ul>
            <h2>Hébergement du site</h2>
            <ul>
                <li><strong>Nom de l’hébergeur </strong>: Haibérgeur</li>
                <li><strong>Adresse</strong>: 45, rue du Capybarra , Gyare 89510</li>
                <li><strong>Téléphone</strong>: +33 (0)2 45 01 56 79</li>
            </ul>
            <h2>Conditioons d'utilisations</h2>
            <div>
                En accédant et en utilisant le site, l’utilisateur accepte les conditions d’utilisation détaillées ci-dessous :
                <ul>
                    <li>Le contenu du site est fourni uniquement à titre éducatif et ne constitue pas un conseil juridique.</li>
                    <li>Toute reproduction du contenu sans autorisation écrite est interdite</li>
                    <li>Les utilisateurs s’engagent à respecter les droits d’autrui et la confidentialité des informations aEichées.</li>
                </ul>
            </div>
            <h2>Protection des données personnelles</h2>
            <div>
                Conformément à la loi « Informatique et Libertés » et au RGPD, les informations 
                personnelles collectées sur ce site (par exemple, nom, prénom, adresse e-mail) 
                sont destinées uniquement à un usage interne. Les données ne seront pas 
                vendues, cédées ou louées à des tiers.                
                <ul>
                    <li><strong>Responsable de la collecte des données </strong>: Michel Talbinne</li>
                    <li><strong> Droit d’accès, de modification et de suppression</strong> : Vous disposez d’un droit d’accès, de modification, et de suppression de vos données 
                    personnelles. Pour exercer ce droit, veuillez contacter lycee.gaudper@gmail.com.</li>
                </ul>
            </div>
            <h2>Propriété intellectuelle</h2>
            <div>Le contenu du site, y compris les textes, images, et graphiques, est protégé par les droits d’auteur. 
            Toute utilisation de ce contenu sans autorisation est interdite.</div>
            <h2> Limitation de responsabilité</h2>
            <div>
                Les informations publiées sur ce site sont fournies à titre informatif et éducatif. 
                L’établissement ne peut être tenu responsable des dommages directs ou indirects liés à l’utilisation du site.
            </div>
            <h2>Contact</h2>
            <div>Pour toute question, réclamation, ou suggestion concernant le site, vous pouvez contacter lycee.gaudper@gmail.com .</div>
        </div>
        
        
            " ;
    }
}