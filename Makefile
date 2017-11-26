.PHONY: all check setup req

all: check req

setup:
	ghi label mínimo
	ghi label importante -c mediumpurple
	ghi label opcional -c yellow
	ghi label fácil
	ghi label media
	ghi label difícil
	ghi label funcional
	ghi label técnico
	ghi label información

check:
	./check-packages.sh
	./check-vendor.sh

req:
	php requisitos.php
	pandoc -s propuesta.md requisitos.md -o requisitos.txt
	pandoc -s -N --toc requisitos.txt -V geometry="margin=1in" -V lang=es -V fontfamily=mathpazo -V fontsize=10pt -o propuesta.pdf
	rm requisitos.txt
