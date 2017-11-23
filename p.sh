#!/bin/sh

IN=${1:-requisitos.tsv}
OUT=${2:-requisitos.md}

# Asegura salto de línea al final del archivo:
if [ "`tail -c1 "$IN"`" != "" ]
then
    echo "" >> $IN
fi

echo "## Catálogo de requisitos\n" > $OUT
echo "### Definición detallada\n" >> $OUT

HEAD="0"
while IFS=$(echo "\t") read -r codigo corta larga prioridad tipo complejidad entrega incidencia
do
    if [ "$HEAD" = "0" ]
    then
        HEAD="1"
        continue
    fi
    incidencia="[](...................................................)"
    echo "| **$codigo** | **$corta**   |" >> $OUT
    echo "| ----------- | ------------ |" >> $OUT
    echo "| Descripción | $larga       |" >> $OUT
    echo "| Prioridad   | $prioridad   |" >> $OUT
    echo "| Tipo        | $tipo        |" >> $OUT
    echo "| Complejidad | $complejidad |" >> $OUT
    echo "| Entrega     | $entrega     |" >> $OUT
    echo "| Incidencia  | $incidencia  |" >> $OUT
    echo "\n[]()\n" >> $OUT
done < $IN

TXT="${OUT%.*}.txt"
PDF="${OUT%.*}.pdf"
pandoc $OUT -o $TXT
pandoc $TXT -o $PDF
