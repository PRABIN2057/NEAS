<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alert Messages with Sounds</title>
<link rel="stylesheet" href="alert.css">
</head>
<body>

<!-- Button to trigger different alerts -->
<h1>Emergencies</h1>
<div class="container">
    
    <button class="alert-btn" onclick="showAlert('message1')">
    <img src="img/fire.png" alt="Alert Icon" class="alert-iconf"> Fire</button>
    <button class="alert-btn" onclick="showAlert('message2')">
    <img src="img/police.png" alt="Alert Icon" class="alert-icon"> Theft</button>
    <button class="alert-btn" onclick="showAlert('message3')">
    <img src="img/medical.png" alt="Alert Icon" class="alert-icon"> Medical</button>
    <button class="alert-btn" onclick="showAlert('message4')">
    <img src="img/alert_icon.png" alt="Alert Icon" class="alert-icon"> Alert!</button>
</div>


<!-- Script to play different sounds -->
<audio id="fire">
  <source src="mp3/Fire.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<audio id="theft">
  <source src="mp3/Theft.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<audio id="medical">
  <source src="mp3/Medical.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<script>
function showAlert(message) {
  // Play corresponding sound
  var audio;
  switch(message) {
    case 'message1':
      audio = document.getElementById("fire");
      audio.play();
      alert("Fire Alert!");
      break;
    case 'message2':
      audio = document.getElementById("theft");
      audio.play();
      alert("Theft Alert!");
      break;
    case 'message3':
      audio = document.getElementById("medical");
      audio.play();
      alert("Medical Emergency!");
      break;
    default:
      alert("Invalid message!");
  }
}
</script>


</body>
</html>
