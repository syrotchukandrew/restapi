#!/usr/bin/env bash

clear
echo "Choose action:"
echo "1 - install project"
echo "2 - quit"

read Keypress

case "$Keypress" in
1) echo "install start..."
    composer install
    php bin/console doctrine:database:create
    php bin/console doctrine:migration:migrate -n
;;
2)
    exit 0
;;
esac

exit 0
