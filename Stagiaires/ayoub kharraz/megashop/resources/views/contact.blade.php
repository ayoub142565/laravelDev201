@extends('layouts.app')

@section('title','Contact - MegaShop')

@section('content')
    <h1 class="page-title">Nous Contacter</h1>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 40px;">
        <!-- Formulaire de contact -->
        <div class="form-container" style="margin: 0;">
            <h2>Formulaire de Contact</h2>
            <form>
                <div class="form-group">
                    <label for="nom">Nom Complet *</label>
                    <input type="text" id="nom" name="nom" required>
                </div>

                <div class="form-group">
                    <label for="email">Adresse Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="tel" id="telephone" name="telephone">
                </div>

                <div class="form-group">
                    <label for="sujet">Sujet *</label>
                    <select id="sujet" name="sujet" required>
                        <option value="">-- Sélectionnez un sujet --</option>
                        <option value="commande">À propos d'une commande</option>
                        <option value="retour">Retour / Échange</option>
                        <option value="produit">Informations sur un produit</option>
                        <option value="technique">Problème technique</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" required></textarea>
                </div>

                <button type="submit" class="btn btn-secondary" style="width: 100%; padding: 15px; font-size: 16px;">
                    Envoyer le message
                </button>
            </form>
        </div>

        <!-- Informations de contact -->
        <div>
            <div style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); margin-bottom: 25px;">
                <h3 style="color: #2c3e50; margin-bottom: 20px;">📞 Nos Coordonnées</h3>
                
                <div style="margin-bottom: 25px;">
                    <h4 style="color: #3498db; margin-bottom: 8px;">Siège Social</h4>
                    <p style="color: #555; line-height: 1.8;">
                        MegaShop<br>
                        123 Avenue du Commerce<br>
                        75001 Paris<br>
                        France
                    </p>
                </div>

                <div style="margin-bottom: 25px;">
                    <h4 style="color: #3498db; margin-bottom: 8px;">Téléphone</h4>
                    <p style="color: #555;">
                        <strong>Général :</strong> +212 1 23 45 67 89<br>
                        <strong>Support :</strong> +212 1 23 45 67 00<br>
                        <strong>Ventes :</strong> +212 1 23 45 67 99
                    </p>
                </div>

                <div style="margin-bottom: 25px;">
                    <h4 style="color: #3498db; margin-bottom: 8px;">Email</h4>
                    <p style="color: #555;">
                        <strong>General :</strong> info@megashop.com<br>
                        <strong>Support :</strong> support@megashop.com<br>
                        <strong>Ventes :</strong> ventes@megashop.com
                    </p>
                </div>

                <div>
                    <h4 style="color: #3498db; margin-bottom: 8px;">Horaires d'Ouverture</h4>
                    <p style="color: #555;">
                        Lundi - Vendredi : 9:00 - 18:00<br>
                        Samedi : 10:00 - 16:00<br>
                        Dimanche : Fermé
                    </p>
                </div>
            </div>

            <div style="background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
                <h3 style="color: #2c3e50; margin-bottom: 20px;">💬 Réseaux Sociaux</h3>
                <p style="margin-bottom: 15px;">Suivez-nous sur nos réseaux sociaux pour les dernières actualités et offres :</p>
                <div style="display: flex; gap: 15px;">
                    <a href="#" style="color: #3498db; text-decoration: none; font-weight: bold;">📘 Facebook</a>
                    <a href="#" style="color: #3498db; text-decoration: none; font-weight: bold;">📷 Instagram</a>
                    <a href="#" style="color: #3498db; text-decoration: none; font-weight: bold;">🐦 Twitter</a>
                    <a href="#" style="color: #3498db; text-decoration: none; font-weight: bold;">▶️ YouTube</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Questions fréquemment posées -->
    <section style="background: white; padding: 30px; border-radius: 8px; margin-bottom: 40px;">
        <h2 style="color: #2c3e50; margin-bottom: 30px; border-bottom: 3px solid #3498db; padding-bottom: 15px;">
            ❓ Questions Fréquemment Posées
        </h2>

        <div style="display: grid; gap: 20px;">
            <div>
                <h4 style="color: #2c3e50; margin-bottom: 8px;">Quelle est la durée standard de livraison ?</h4>
                <p style="color: #555; margin-left: 15px;">
                    La livraison standard prend 5 à 7 jours ouvrables. Une livraison express est également disponible 
                    en 2 à 3 jours ouvrables.
                </p>
            </div>

            <div>
                <h4 style="color: #2c3e50; margin-bottom: 8px;">Comment puis-je retourner un produit ?</h4>
                <p style="color: #555; margin-left: 15px;">
                    Vous disposez de 30 jours pour retourner votre produit. Veuillez nous contacter pour obtenir une étiquette de retour.
                </p>
            </div>

            <div>
                <h4 style="color: #2c3e50; margin-bottom: 8px;">Expédiez-vous à l'international ?</h4>
                <p style="color: #555; margin-left: 15px;">
                    Actuellement, nous livrons en France métropolitaine et en Belgique. Pour d'autres destinations, 
                    veuillez nous contacter pour un devis.
                </p>
            </div>

            <div>
                <h4 style="color: #2c3e50; margin-bottom: 8px;">Pouvez-vous combiner plusieurs commandes ?</h4>
                <p style="color: #555; margin-left: 15px;">
                    Oui, vous pouvez demander de combiner vos commandes. Veuillez nous contacter rapidement après 
                    avoir passé vos commandes si vous souhaitez les regrouper.
                </p>
            </div>
        </div>
    </section>

    <style>
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #2c3e50;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #bdc3c7;
            border-radius: 5px;
            font-family: inherit;
            font-size: 14px;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
        }

        @media (max-width: 768px) {
            div[style*="grid-template-columns: 1fr 1fr"] {
                grid-template-columns: 1fr !important;
            }
        }
    </style>
@endsection