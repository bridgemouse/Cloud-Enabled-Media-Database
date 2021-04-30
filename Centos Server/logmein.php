<?php
    $ldaprdn  = $_POST["username"];
    $ldappass = $_POST["password"];
    $ldapconn = ldap_connect("ldap://somemorestuff") or die("Could not connect to LDAP server.");

if ($ldapconn) 
{
    $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);
    if ($ldapbind) 
    {
        echo "LDAP bind successful...";
    }
    else 
    {
        echo "LDAP bind failed...";
    }
}
#$Result = ldap_search($ldapconn, "OU=IT,DC="Domain",DC=corp", "(samaccountname=$ldaprdn)", array("dn"));
#$data = ldap_get_entries($ldapconn, $Result);
#print_r($data);
?>
