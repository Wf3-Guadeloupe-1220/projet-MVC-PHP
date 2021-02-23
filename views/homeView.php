<?php
    ob_start(); ?>
    <div>
        <h1>Structure de la page</h1>
    </div>

<?php
	// Récupère le code HTML généré
	$content = ob_get_clean();
	require('template.php');