.PHONY: all check req

all: check req

check:
	./check-packages.sh

req:
	php requisitos.php > requisitos.md
	pandoc -s propuesta.md requisitos.md -o requisitos.txt
	pandoc -s --toc requisitos.txt -V lang=es -V fontfamily=mathpazo -V fontsize=11pt -o propuesta.pdf
	rm requisitos.txt
