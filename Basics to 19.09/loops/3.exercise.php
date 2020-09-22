<?php
/*Write a program that asks the user to enter two words.
 The program then prints out both words on one line.
The words will be separated by enough dots so that the total line length is 30:
Enter first word:
turtle
Enter second word
153
turtle....................153
This could be used as part of an index for a book.
To print out the dots, use echo "." inside a loop body.*/
$word1=readline('Type first word: ');
$word2=readline('Type second word: ');
$count1=strlen($word1);
$count2=strlen($word2);
$dotCount=30-$count1-$count2;

echo $word1;
for ($n=1;$n<=$dotCount;$n++){
    echo '.';

}
echo $word2;
echo strlen('sj..........................jh');