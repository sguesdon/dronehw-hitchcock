#!/bin/bash

square() {
    width=$(identify -format "%w" "$1")> /dev/null
    height=$(identify -format "%h" "$1")> /dev/null
    if (($width != $height)); then
        squareSize=0
        if (($width > $height)); then
            squareSize=$width
        fi
        if (($width < $height)); then
            squareSize=$height
        fi

        #|-define jpeg:size=$squareSizex$squareSize \

        echo $1 $squareSize

        convert \
            -define jpeg:size=$squareSizex$squareSize \
            $1 \
            -thumbnail $squareSizex$squareSize^ \
            -gravity center \
            -extent $squareSizex$squareSize \
            $1_test.png
    fi


}

for filename in ./*.png; do
    square $filename
done
for filename in ./*.jpg; do
    square $filename
done
