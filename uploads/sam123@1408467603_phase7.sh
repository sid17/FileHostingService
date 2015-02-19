#!/bin/bash
#course=$(mysql test -u "root" --password="apple123" -se "SELECT CONCAT(t1.course,':'),CONCAT(t1.roll,':'),CONCAT(t2.name,':'),CONCAT('_',CONCAT(t1.total,'@')) FROM marks t1 INNER JOIN names t2 ON t1.roll = t2.roll")
course=$(mysql test -u "root" --password="apple123" -se "SELECT CONCAT(t1.course,':'),CONCAT(t1.roll,':'),CONCAT(t2.name,'!:'),CONCAT(t1.total,'@') FROM marks t1 INNER JOIN names t2 ON t1.roll = t2.roll")
echo $course > file1
sed -e 's/@/\n/g' file1 > file2
sort -t : -k 1b,1n -k  4b,4nr file2 > file3
#sort -t _ -k 2 -g file2 > file3
#sort -t : -k 2,2n -k 5.3,5.4
#sed -e 's/,_ /,_/g' file2 > file3
#sort -t _ -k 2 -g file3 > file4
#sed -e 's/,/\t/g' file4 > file5
#sed -e 's/_/ /g' file5 > file6
#c=0
st=1;
c=0;
while read line           
do   
if [ $c == 0 ]
then
c=$((c+1))
else
#start="$( cut -d ' ' -f 1 <<< "$line" )"; 
#end="$( cut -d ' ' -f 2- <<< "$line" )"; 
#echo $end  $c $start
#echo $line
short=${line:0:1}
if [ $short != $st ]
then
c=1;
st=$short;
fi
#echo $short
original_string=$line;
string_to_replace_with=$c;
result_string="${original_string/!/: $c}"
result_string1="${result_string//:/'\t'}"
result_string2="${result_string//:/' '}"
echo -e $result_string1 >> phase7_1.out
echo -e $result_string2 >> phase7_2.out
c=$((c+1))
fi    
done <file3 


