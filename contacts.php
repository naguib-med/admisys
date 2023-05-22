<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Licence ADMISYS - Contacts</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
          integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
          crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
            integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
            crossorigin=""></script>
</head>
<body>

<?php include './includes/header.php'; ?>


<main class="py-8">
  <section class="container mx-auto px-4">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Contacts</h2>
    <p class="text-gray-600">Pour toute demande d'information supplémentaire, vous pouvez contacter les personnes suivantes :</p>

    <ul class="list-disc list-inside text-gray-600">
      <li>Responsable pédagogique : Samira EL YACOUBI (<a href="mailto:yacoubi@univ-perp.fr">yacoubi@univ-perp.fr</a>)</li>
      <li>Responsable administratif : Amira EL MOUAKHER (<a href="mailto:amira.mouakher@univ-perp.fr">amira.mouakher@univ-perp.fr</a>)</li>
      <li>Faculté des Sciences Exactes et Expérimentales : Tél : +33 (0)4 30 19 23 07 (<a href="mailto:facscien@univ-perp.fr">facscien@univ-perp.fr</a>)</li>
      <li>Formation continue : Tél : +33 (0)4 68 66 20 61 (<a href="mailto:dorothee.calvet@univ-perp.fr">dorothee.calvet@univ-perp.fr</a>)</li>
      <li>Service de Formation Continue et Alternance : (<a href="mailto:sfc@univ-perp.fr">sfc@univ-perp.fr</a>)</li>
    </ul>

      <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-5">Localisation</h1>
      <div id="mapid" class="h-80 rounded-lg"></div>
  </section>
</main>

<?php include './includes/footer.php'; ?>

<script src="js/script.js"></script>
</body>
</html>
