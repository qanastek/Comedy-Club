DEV:

symfony server:start
php bin/console make:controller
php bin/console make:entity

psql -d ComedyClub -U postgres -W


CLIENT INSTALLATION:

php bin/console doctrine:database:create
php bin/console doctrine:migrations:diff
php bin/console doctrine:migrations:migrate


FIX:

Enable TLS:

https://stackoverflow.com/questions/35249620/the-openssl-extension-is-required-for-ssl-tls-protection#answer-42285957

Et activer openssl dans le .ini
