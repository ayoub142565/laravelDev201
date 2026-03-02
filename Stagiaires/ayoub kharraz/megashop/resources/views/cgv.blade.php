@extends('layouts.app')

@section('title','Conditions Générales de Vente - MegaShop')

@section('content')
    <h1 class="page-title">Conditions Générales de Vente (CGV)</h1>

    <div class="cgv-content">
        <div class="cgv-section">
            <h2>1. Dispositions Générales</h2>
            <p>Les présentes Conditions Générales de Vente régissent les relations commerciales entre MegaShop (ci-après « le vendeur ») 
            et ses clients (ci-après « l'acheteur »). Tout achat implique l'acceptation inconditionnelle de ces conditions.</p>
            <p>MegaShop est une entreprise proposant la vente de produits électroniques et électroménagers par voie électronique. 
            L'accès au site marchand implique l'acceptation des conditions qui y figurent.</p>
        </div>

        <div class="cgv-section">
            <h2>2. Offres de Produits</h2>
            <h3>2.1 Validité des Offres</h3>
            <p>Les produits présentés sur le site sont offerts à titre informatif. Les prix affichés sont valables au moment 
            de leur publication et peuvent être modifiés sans préavis. Les offres sont valables sous réserve de disponibilité en stock.</p>
            
            <h3>2.2 Description des Produits</h3>
            <p>Les descriptions, photographies et caractéristiques des produits présentés sur le site sont aussi précises que possible. 
            Cependant, MegaShop ne peut garantir l'absence d'erreur ou d'omission.</p>
        </div>

        <div class="cgv-section">
            <h2>3. Commandes et Confirmation</h2>
            <h3>3.1 Processus de Commande</h3>
            <p>La commande en ligne constitue une offre d'achat. La confirmation de commande n'est effective que lorsque 
            MegaShop a confirmé par écrit (email) l'acceptation de la commande et le paiement a été reçu.</p>
            
            <h3>3.2 Droit de Rétractation</h3>
            <p>Conformément à la loi, vous disposez d'un délai de 30 jours à compter de la réception de votre commande 
            pour exercer votre droit de rétractation sans motif et sans pénalité.</p>
            
            <h3>3.3 Conditions de Retour</h3>
            <ul>
                <li>Le produit doit être retourné dans son emballage d'origine, en parfait état</li>
                <li>Les frais de retour sont à la charge de l'acheteur sauf si le retour est dû à un défaut de livraison ou produit</li>
                <li>Le remboursement sera effectué sous 14 jours suivant la réception du produit</li>
            </ul>
        </div>

        <div class="cgv-section">
            <h2>4. Conditions de Règlement</h2>
            <h3>4.1 Modes de Paiement</h3>
            <p>MegaShop accepte les modes de paiement suivants :</p>
            <ul>
                <li>Carte bancaire (Visa, MasterCard, American Express)</li>
                <li>Virement bancaire</li>
                <li>PayPal</li>
                <li>Paiement en 3 ou 4 fois sans frais</li>
            </ul>

            <h3>4.2 Sécurité des Paiements</h3>
            <p>Tous les paiements en ligne sont sécurisés par un protocole HTTPS et un système d'authentification 3D Secure. 
            MegaShop n'a accès qu'aux derniers chiffres de votre carte bancaire.</p>

            <h3>4.3 Facture</h3>
            <p>Une facture numérique vous sera adressée par email après confirmation du paiement.</p>
        </div>

        <div class="cgv-section">
            <h2>5. Conditions de Livraison</h2>
            <h3>5.1 Zones de Livraison</h3>
            <p>MegaShop assure la livraison en France métropolitaine et en Belgique. D'autres zones peuvent être disponibles 
            sur demande.</p>

            <h3>5.2 Délais de Livraison</h3>
            <ul>
                <li>Livraison standard : 5 à 7 jours ouvrables</li>
                <li>Livraison express : 2 à 3 jours ouvrables</li>
                <li>Retrait en magasin : immédiat après confirmation de stock</li>
            </ul>

            <h3>5.3 Frais de Livraison</h3>
            <p>La livraison est <strong>gratuite</strong> pour les commandes supérieures à 50 €. 
            Pour les commandes inférieures à 50 €, les frais de livraison sont de 9,99 €.</p>
        </div>

        <div class="cgv-section">
            <h2>6. Responsabilité et Garanties</h2>
            <h3>6.1 Garantie Légale</h3>
            <p>Tous nos produits bénéficient de la garantie légale de conformité d'une durée de 2 ans à compter de la réception du produit.</p>

            <h3>6.2 Limitation de Responsabilité</h3>
            <p>MegaShop ne peut être tenue responsable des dommages indirects, incidents, spéciaux ou consécutifs.</p>
        </div>

        <div class="cgv-section">
            <h2>7. Données Personnelles</h2>
            <p>Les données personnelles recueillies lors de votre commande sont traitées conformément à la législation sur la protection des données. 
            Elles ne seront jamais communiquées à des tiers sans votre consentement.</p>
        </div>

        <div class="cgv-section">
            <h2>8. Droit Applicable</h2>
            <p>Les présentes Conditions Générales de Vente sont régies par la loi française. 
            Tout litige sera soumis à la compétence exclusive des tribunaux français.</p>
        </div>
    </div>

    <style>
        .cgv-section {
            margin-bottom: 30px;
            padding: 20px;
            background: white;
            border-left: 4px solid #3498db;
            border-radius: 4px;
        }

        .cgv-section h2 {
            color: #2c3e50;
            margin-bottom: 15px;
            font-size: 22px;
        }

        .cgv-section h3 {
            color: #3498db;
            margin-top: 15px;
            margin-bottom: 10px;
        }

        .cgv-section p {
            color: #555;
            margin-bottom: 10px;
            line-height: 1.8;
        }

        .cgv-section ul {
            margin-left: 20px;
            margin-bottom: 10px;
        }

        .cgv-section li {
            color: #555;
            margin-bottom: 8px;
        }
    </style>
@endsection