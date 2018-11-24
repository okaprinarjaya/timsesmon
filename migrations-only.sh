#!/bin/bash

if [ "$1" != "" ]
then
  $1 bin/cake.php migrations migrate
  $1 bin/cake.php migrations seed --seed ElectionSessionSeed
  $1 bin/cake.php migrations seed --seed SequentialWilayahSeed
  $1 bin/cake.php migrations seed --seed RelawanSeed
  $1 bin/cake.php migrations seed --seed UsiaSeed
  $1 bin/cake.php migrations seed --seed PekerjaanSeed
  $1 bin/cake.php migrations seed --seed PenghasilanSeed
  $1 bin/cake.php migrations seed --seed RelawanProfileSeed

else
  echo "Please set alternative PHP location"
fi;
