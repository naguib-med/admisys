<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licence ADMISYS - Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<?php include './includes/header.php'; ?>


<main class="py-8">
    <section class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Inscription à la Licence ADMISYS</h2>
        <form class="max-w-md mx-auto">
            <div class="mb-4">
                <label for="nom" class="block text-gray-600">Nom :</label>
                <input type="text" id="nom" name="nom" class="w-full border border-gray-300 rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label for="prenom" class="block text-gray-600">Prénom :</label>
                <input type="text" id="prenom" name="prenom" class="w-full border border-gray-300 rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label for="dateNaissance" class="block text-gray-600">Date de Naissance :</label>
                <input type="date" id="dateNaissance" name="dateNaissance" class="w-full border border-gray-300 rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label for="numeroEtudiant" class="block text-gray-600">Numéro étudiant :</label>
                <input type="text" id="numeroEtudiant" name="numeroEtudiant" class="w-full border border-gray-300 rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-600">Adresse e-mail :</label>
                <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label for="cv" class="block text-gray-600">CV :</label>
                <input type="file" id="cv" name="cv" class="w-full border border-gray-300 rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <input type="submit" value="Envoyer" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-800">
            </div>
        </form>
    </section>
</main>

<?php include './includes/footer.php'; ?>
</body>
</html>
