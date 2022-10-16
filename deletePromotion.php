Le code tente de supprimer une promotion.
 Le code utilise la classe PromotionBLL, qui a été définie dans le fichier "business/promotionBLL.php".
 Le code vérifie d'abord s'il existe un paramètre id transmis en vérifiant $_GET['id'], puis l'affecte à $id.
 Ensuite, le code crée une nouvelle instance de PromotionBLL et appelle sa méthode deletePromotion() avec la valeur de $id comme argument.
 Enfin, il redirige vers index.php
 Le code supprime la promotion avec l'ID de $id.
