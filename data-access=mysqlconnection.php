 Le code commence par la définition de la classe.
 La classe a une variable privée pour l'hôte et une autre pour l'utilisateur et le mot de passe.
 Il a également une fonction protégée appelée connect() qui sera utilisée pour créer une instance de la classe.
 La première ligne de cette fonction est l'endroit où nous définissons nos variables de connexion : $host, $user, $password et $db.
 Celles-ci sont toutes définies comme des variables privées, elles ne sont donc accessibles que par les méthodes de ce fichier ou d'autres fichiers qui utilisent ces classes (c'est pourquoi elles sont déclarées comme protégées).
 Ensuite, nous créons un nouvel objet mysqli en utilisant ces valeurs : $conn = new mysqli($this->host, $this->user, $this->password, $this->db); Cela crée une instance de l'objet mysqli sur localhost avec les informations d'identification de root (le nom d'utilisateur "root" et le mot de passe "").
 Nous le renvoyons ensuite de notre appel de fonction à la fin de notre méthode Connect().
 Le code crée une connexion à la base de données à l'aide de la fonction mysqli_connect().
