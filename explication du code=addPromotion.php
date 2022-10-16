Le code nécessite que le fichier promotionBLL.php soit inclus pour que cela fonctionne.
 Le code crée ensuite un nouvel objet de promotion et définit sa propriété name avec la valeur de $_POST['name'].
 Ensuite, le code appelle addPromotion() sur la classe promotionBLL qui créera une nouvelle entrée dans la table de base de données utilisée par cette application.
 Enfin, s'il y a des messages soumis via POST, ils seront redirigés vers index.php
 Le code tente de créer un objet promotionBLL, puis appelle la méthode addPromotion() de cet objet avec une nouvelle promotion.
 Le code ci-dessus ne fait rien d'autre.
