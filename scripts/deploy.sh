#!/usr/bin/env bash

# This is script is executed on dokku post deploy

echo "Starting deploy script"

# Copy of settings.dokku.php
echo "Copy of settings.dokku.php"
cp config/dokku/settings.dokku.php web/sites/default/
chmod 755 ./web/sites/default/settings.dokku.php

# Installation process
#echo "Installation process"
#cd web
#echo $(vendor/bin/drush --version)
#vendor/bin/drush site-install -y minimal --db-url=$DATABASE_URL --account-pass=admin --site-name="Drupal 7 composer"

echo "Deploy script finished"