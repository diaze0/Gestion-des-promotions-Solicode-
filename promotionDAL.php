
 Le code commence par créer un objet de promotion.
 Il crée ensuite une requête SQL pour insérer le nom de la nouvelle promotion dans la base de données.
 Le code exécute ensuite cette requête et renvoie toutes les promotions dans la base de données.
 La classe PromotionDAL étend Connection, qui est une classe qui fournit des méthodes de connexion aux bases de données MySQL.
 Cela nous permet d'utiliser cette classe comme connexion lorsque nous en aurons besoin plus tard dans notre programme.
 La méthode addPromotion() prend un argument : $promotion, qui est une instance de l'objet PromotionDAL::Promotion créé précédemment dans le corps de cette fonction.
 La méthode getAllPromotions() renverra toutes les promotions de la base de données en utilisant une instruction SELECT similaire à ce que vous verriez avec PHPMyAdmin ou tout autre outil utilisé pour gérer les bases de données MySQL (par exemple, phpMyAdmin).
 Le code tente de créer une table de promotion dans la base de données.
 Le code ci-dessus exécutera une requête et insèrera des données dans la table de promotion.
