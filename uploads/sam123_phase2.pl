#!/usr/local/bin/perl
use warnings;                   # Display all warning messages
use 5.010;  
use POSIX qw/strftime/;                     # Use Perl 5.10 features

$query1="CREATE TABLE IF NOT EXISTS marks (
         roll    INT UNSIGNED  NOT NULL DEFAULT 0,
         course    INT UNSIGNED     NOT NULL DEFAULT 0,
         assignment  INT UNSIGNED   NOT NULL DEFAULT 0,
         project     INT UNSIGNED  NOT NULL DEFAULT 0,
         exam        INT UNSIGNED  NOT NULL DEFAULT 0,
         PRIMARY KEY  (roll,course)
       );";
$query2="CREATE TABLE IF NOT EXISTS names (
         roll    INT UNSIGNED  NOT NULL DEFAULT 0,
         name    VARCHAR(50)    NOT NULL DEFAULT '',
         PRIMARY KEY  (roll)
       );";
print `echo "$query1" | mysql -u root --password="apple123" test`;
print `echo "$query2" | mysql -u root --password="apple123" test`;

open my $fh, '<', "phase1.out" or die $!;     # open the file with handler name fh , my specifies the local scope , '<' specifies it is 						opened for reading
@roll_list="";
while (<$fh>) 
{
   my @words = split(/,/, $_);
   push @roll_list,$words[0];
   $final1="INSERT INTO marks VALUES ($words[0],$words[1],$words[4],$words[5],$words[6])";
   $final2="INSERT INTO marks VALUES ($words[0],$words[2],$words[7],$words[8],$words[9])";
   $final3="INSERT INTO marks VALUES ($words[0],$words[3],$words[10],$words[11],$words[12])";

   print `echo "$final1" | mysql -u root --password="apple123" test`;
   print `echo "$final2" | mysql -u root --password="apple123" test`;
   print `echo "$final3" | mysql -u root --password="apple123" test`;
   
}
close $fh or die $!;
my @sorted_roll = sort @roll_list;
open my $fh1, '<', "names.txt" or die $!;
$i=1;
while (<$fh1>) 
{
    chomp ($sorted_roll[$i]);
    $name=$_;
    chomp($name);
    $name="\'".$name."\'";
    $final1="INSERT INTO names VALUES ($sorted_roll[$i],$name);";
    #print ($final1);
    print `echo "$final1" | mysql -u root --password="apple123" test`;
    $i=$i+1;
}
close $fh1 or die $!;



