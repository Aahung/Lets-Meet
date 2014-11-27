#/bin/bash

echo 'cleaning'
rm -Rf dist/*
echo 'generating files to dist/'
cp -R client_side/dist/* dist/
cp -R server_side/* dist/
cp -Rf debug/* dist/

cd client_side
grunt
cd ..
cp -Rf client_side/dist/* dist/
