#!/bin/bash

if [ "$1" != "" ]
then

  if [ -f composer.phar ]
  then
    echo "composer found. No need to install composer."
  else
    $1 -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    $1 -r "if (hash_file('sha384', 'composer-setup.php') === '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    $1 composer-setup.php
    $1 -r "unlink('composer-setup.php');"
  fi;

  if [ -e vendor/cakedc/users ]
  then
    echo "CakeDC/Users already exists. No need to download CakeDC/Users."
  else
    $1 composer.phar require cakedc/users
  fi;

  if [ -e plugins/BaseApp/src ]
  then
    echo "BaseApp plugin already exists. No need to download."
  else
    git submodule update --init --recursive
  fi;

  $1 bin/cake.php migrations migrate -p BaseApp
  $1 bin/cake.php migrations migrate -p CakeDC/Users
  $1 bin/cake.php migrations migrate
  $1 bin/cake.php migrations seed --plugin BaseApp
  $1 bin/cake.php migrations seed --seed ElectionSessionSeed
  $1 bin/cake.php migrations seed --seed SequentialWilayahSeed
  $1 bin/cake.php migrations seed --seed RelawanSeed

else
  echo "Please set alternative PHP location"
fi;
