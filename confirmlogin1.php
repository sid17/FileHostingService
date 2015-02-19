<?php
ob_start();
?>
<?php
session_start();
?>
<?php

$ldaphost = 'ldap://localhost';
$ldapport = '389';

$ds = ldap_connect($ldaphost, $ldapport)
or die("Could not connect to $ldaphost");
    ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);
//ldap_set_option($ds, LDAP_OPT_DEBUG_LEVEL, 7);
if ($ds) 
{
    $username = "cn=admin,dc=cse,dc=iitk,dc=ac,dc=in";
    $upasswd = "apple12345";
    $ldapbind = ldap_bind($ds, $username, $upasswd);


    if ($ldapbind) 
        {
		print "Congratulations! $username is authenticated.";
		

// 		$sr=ldap_search($ds, "cn=user3,dc=cse,dc=iitk,dc=ac,dc=in", "uid=*");
 
//     		$info = ldap_get_entries($ds, $sr);
 
//     		for ($i=0; $i<$info["count"]; $i++) 
// 		{
//         //Print out the user information here. For those uid, displayname, userprincipalname and emailaddress are those data inside a user profile. It will be different for your LDAP setup.
//         	 echo "uid is: " . $info[$i]["password"][0] . "\n";
//         	 echo "displayName entry is: " . $info[$i]["uid"][0] . "\n";
// //        echo "userPrincipalName entry is: " . $info[$i]["userprincipalname"][0] . "\n";
// //        echo "userPrincipalName entry is: " . $info[$i]["emailaddress"][0] . "\n";
//     		}
   

        //$dn = "cn=user3,dc=cse,dc=iitk,dc=ac,dc=in";
        $username=$_POST['username'];
        $password=$_POST['password'];
        $faculty_dn="cn=".$username.",cn=Faculty,cn=People,cn=Dept,dc=cse,dc=iitk,dc=ac,dc=in";
        $staff_dn="cn=".$username.",cn=Staff,cn=People,cn=Dept,dc=cse,dc=iitk,dc=ac,dc=in";
        $btech_dn="cn=".$username.",cn=BTech,cn=Students,cn=People,cn=Dept,dc=cse,dc=iitk,dc=ac,dc=in";
        $mtech_dn="cn=".$username.",cn=MTech,cn=Students,cn=People,cn=Dept,dc=cse,dc=iitk,dc=ac,dc=in";
        $phd_dn="cn=".$username.",cn=PhD,cn=Students,cn=People,cn=Dept,dc=cse,dc=iitk,dc=ac,dc=in";
        $lab_dn="cn=".$username.",cn=Lab_Admin,cn=Dept,dc=cse,dc=iitk,dc=ac,dc=in";
        echo $faculty_dn;
        echo $staff_dn;
        echo $btech_dn;
        echo $mtech_dn;
        echo $phd_dn;
        echo $lab_dn;
        //$username="sanilj";
        //$dn = "cn=".$username.",ou=People,dc=cse,dc=iitk,dc=ac,dc=in";
        $value = $password;
        //$value=md5($value);
        $attr = "userPassword";



        echo ldap_compare($ds,$faculty_dn, $attr, $value);
        echo ldap_compare($ds,$staff_dn, $attr, $value) ;
        echo ldap_compare($ds,$btech_dn, $attr, $value) ;
        echo ldap_compare($ds,$mtech_dn, $attr, $value) ;
        echo ldap_compare($ds,$phd_dn, $attr, $value) ;
        echo ldap_compare($ds,$lab_dn, $attr, $value);
        // compare value
        $r=ldap_compare($ds,  $faculty_dn, $attr, $value) || ldap_compare($ds,  $staff_dn, $attr, $value) || ldap_compare($ds, $btech_dn, $attr, $value) || ldap_compare($ds,  $mtech_dn, $attr, $value) || ldap_compare($ds, $phd_dn, $attr, $value) || ldap_compare($ds, $lab_dn, $attr, $value);
        $s=ldap_compare($ds,  $faculty_dn, $attr, $value)+ldap_compare($ds,  $staff_dn, $attr, $value)+ldap_compare($ds, $btech_dn, $attr, $value)+ldap_compare($ds,  $mtech_dn, $attr, $value)+ldap_compare($ds, $phd_dn, $attr, $value)+ldap_compare($ds, $lab_dn, $attr, $value);
        
        if ($s == -4) 
        {
         
         //header("location:wronglogin.php");
         echo "Password correct.Mai Ldap hoon";
         $_SESSION['user_id']=$username;
         header("location:myhome.php?username=$username");
        } 
        else if ($s ==  -5)
        {
            
            echo "Wrong guess! Password incorrect.";
            header("location:wronglogin.php");
        } 
        else
        {

            echo "Invalid users Error: " . ldap_error($ds); 
        }
       

	}
    	else 
        {
		print "Access Denied!";
        //header("location:wronglogin.php");
	}


}
?>
<?php
ob_end_flush(); //now the headers are sent
?>




