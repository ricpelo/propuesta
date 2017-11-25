.PHONY: all check setup req

all: req

check:
	./check-packages.sh

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
	ghi milestone v1
	ghi milestone v2
	ghi milestone v3

req:
	php requisitos.php
	pandoc -s propuesta.md requisitos.md resumen.md -o requisitos.txt
	pandoc -s -N --toc requisitos.txt -V geometry="margin=1in" -V lang=es -V fontfamily=mathpazo -V fontsize=10pt -o propuesta.pdf
	rm requisitos.txt
