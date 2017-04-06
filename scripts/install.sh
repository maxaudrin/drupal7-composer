#!/usr/bin/env bash

echo "Starting install script"

cd web
vendor/bin/drush site-install -y minimal --db-url=$DATABASE_URL --account-pass=admin --site-name="Drupal 7 composer"

echo "Install script finished"