<?php
$prenom = trim($_POST['prenom'] ?? '');
$nom    = trim($_POST['nom'] ?? '');

if ($prenom === '' || $nom === '') {
  http_response_code(400);
  echo "Champs vides";
  exit;
}

file_put_contents('data.json', json_encode([
  'prenom' => $prenom,
  'nom'    => $nom
], JSON_UNESCAPED_UNICODE));

echo "OK";