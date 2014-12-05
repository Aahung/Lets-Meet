#/bin/bash

echo 'cleaning'
rm -Rf dist/*
echo 'generating files to dist/'
cp -R server_side/* dist/
cp -Rf debug/* dist/

cd client_side
grunt --force
cd ..
cp -Rf client_side/dist/* dist/
rm -Rf client_side/dist/*
