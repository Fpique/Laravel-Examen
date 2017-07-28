Une vagrant était déja présente sur mon poste j'ai donc galérer à installer Laravel, il ma suffit simplement de redémarrer mon pc pour que cela fonctionne, cela ma pris du temps.

Je n'ai pas eu le temps de mettre du css

Je pense que pour finir ce projet et qu'il soit fonctionnel il m'aurait fallu une bonne semaine


Pour les bases de données je ne pense pas avoir eu de problème spécifique pour créer une table intermédiaire
Par contre cette erreur ma bloqué pas mal de temps

SQLSTATE[42S02]: Base table or view not found: 1146 Table 'boutique.marques' doesn't exist (SQL: select `marques`.*, `marque_shirt`.`shirt_id` as `pivot_shirt_id`, `marque_shirt`.`marque_id` as `pivot_marque_id` from `marques` inner join `marque_shirt` on `marques`.`id` = `marque_shirt`.`marque_id` where `marque_shirt`.`shirt_id` = 1)

Tu es venu me débugger a cet instant car j'ai créer une base de donnée One to Many

 Et je suis bloqué avec ce message d'erreur

'Invalid argument supplied for foreach()', '/var/www/blog/app/Http/Controllers/ShirtsController.php', 23, array('shirts' => object(Collection), 'value' => array(array('taille' => 'S', 'marque' => 1, 'id' => 1, 'image' => '')), 'i' => 0, 'shirt' => object(Shirt)))
