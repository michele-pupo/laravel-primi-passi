Per prima cosa, creiamo un nuovo progetto Laravel 10, utilizzando questo comando:
 - composer create-project laravel/laravel:^10.0 laravel-primi-passi
   
Al termine dell'installazione, entriamo nella cartella del progetto con VS Code
e avviamo l'artisan serve con questo comando:
 - php artisan serve

A questo punto, iniziamo a prendere confidenza con le rotte e le views: cancelliamo la view welcome.blade.php e creiamo una nostra homepage.
Facciamo quindi sì che la rotta / visualizzi home.blade.php.

Inizialmente stampiamo un Hello World, poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.

 - Bonus:
    - Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route() .
