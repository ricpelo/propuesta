#!/bin/sh

VER="2.0.3"
FILE="pandoc-$VER-1-amd64.deb"

if ! dpkg -s pandoc > /dev/null 2>&1
then
    echo "Descargando e instalando Pandoc $VER..."
    wget -q "https://github.com/jgm/pandoc/releases/download/$VER/$FILE"
    sudo dpkg -i $FILE
    rm $FILE
    sudo apt -f install
fi

LISTA=$(gem list --local)

for p in asciidoctor asciidoctor-pdf
do
    if ! echo $LISTA | grep -qs "$p "
    then
        echo "Instalando $p..."
        sudo gem install $p --pre
    fi
done

PKG="texlive-full"
if ! dpkg -s $PKG > /dev/null 2>&1
then
    echo "Instalando $PKG (puede tardar bastante)..."
    sudo apt install $PKG
fi
