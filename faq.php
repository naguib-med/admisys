<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licence ADMISYS - FAQ</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .panel {
            display: none;
        }
    </style>
</head>
<body>
<?php include './includes/header.php'; ?>


<main class="py-8">
    <section class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">FAQ - Foire aux questions</h2>

        <button class="accordion bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded">Quelle est la durée de la formation ADMISYS ?</button>
        <div class="panel">
            <p>La formation ADMISYS dure deux semestres.</p>
        </div>

        <button class="accordion bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded">Quels sont les débouchés professionnels après la Licence ADMISYS ?</button>
        <div class="panel">
            <p>Les débouchés professionnels après la Licence ADMISYS incluent les postes d'administrateur systèmes/réseaux/base de données, de responsable de système d'information, de chef de projets, de responsable maintenance logiciel et matériel pour les réseaux, de responsable de parc informatique, et la possibilité de poursuivre des études en Master informatique orienté système et réseau ou en Master informatique orienté sécurité.</p>
        </div>

        <button class="accordion bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded">Comment puis-je postuler à la Licence ADMISYS ?</button>
        <div class="panel">
            <p>Vous pouvez postuler à la Licence ADMISYS en utilisant le formulaire d'inscription disponible sur notre site web.</p>
        </div>
    </section>
</main>

<?php include './includes/footer.php'; ?>

<script>
    const accordions = document.querySelectorAll('.accordion');
    accordions.forEach(accordion => {
        accordion.addEventListener('click', () => {
            accordion.classList.toggle('active');
            const panel = accordion.nextElementSibling;
            panel.style.display = panel.style.display === 'block' ? 'none' : 'block';
        });
    });
</script>
</body>
</html>
