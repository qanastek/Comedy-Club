## DEV:

symfony server:start
php bin/console make:controller
php bin/console make:entity

psql -d ComedyClub -U postgres -W


## CLIENT INSTALLATION:

php bin/console doctrine:database:create
php bin/console doctrine:migrations:diff
php bin/console doctrine:migrations:migrate


## FIX:

### Enable TLS:
https://stackoverflow.com/questions/35249620/the-openssl-extension-is-required-for-ssl-tls-protection#answer-42285957
Et activer openssl dans le .ini

### Changer la version de php pour symfony:
symfony local:php:list
touch .php-version
nano .php-version
> 7.4.1
> [Save]


## Inspiration

### Overhall:
* https://colorlib.com//polygon/admindek/default/menu-bottom.html
* https://www.troplv.com/entertainment/laugh-factory/andrew-dice-clay
* https://www.eventbrite.com/e/comedy-at-dekalb-stage-presents-belly-laugh-tickets-80801574685?utm-medium=discovery&utm-campaign=social&utm-content=attendeeshare&aff=escb&utm-source=cp&utm-term=listing&gclid=CjwKCAiAi4fwBRBxEiwAEO8_Hv6EEHgWHBuTw3q_oJlV8fROPLOcoxRCXly6F8akig_xGay1ULvDmxoCX7wQAvD_BwE
* http://www.montreuxcomedy.com/fr/spectacles/duels-a-davidejonatown/

### Comedian:
* https://improv.com/comedians/
* http://www.montreuxcomedy.com/fr/artistes/