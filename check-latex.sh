#!/bin/sh

PKG="texlive-full"
if ! dpkg -s $PKG > /dev/null 2>&1
then
    echo "Instalando $PKG (puede tardar bastante)..."
    sudo apt install $PKG
fi
