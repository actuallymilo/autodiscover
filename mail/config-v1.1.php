<?php
header('Content-Type: application/xml');

$emailAddress = isset($_GET['EMAILADDRESS']) ? htmlspecialchars($_GET['EMAILADDRESS']) :
                  (isset($_GET['emailaddress']) ? htmlspecialchars($_GET['emailaddress']) : 'default');

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<clientConfig version=\"1.1\">\n";
echo "  <emailProvider id=\"boykisser.com\">\n";
echo "    <domain>boykisser.com</domain>\n";
echo "    <displayName>Boykisser Mail</displayName>\n";
echo "    <displayShortName>Boykisser</displayShortName>\n";
echo "    <incomingServer type=\"imap\">\n";
echo "      <hostname>imap.boykisser.com</hostname>\n";
echo "      <port>993</port>\n";
echo "      <socketType>SSL</socketType>\n";
echo "      <username>$emailAddress</username>\n";
echo "      <authentication>password-cleartext</authentication>\n";
echo "    </incomingServer>\n";
echo "    <outgoingServer type=\"smtp\">\n";
echo "      <hostname>smtp.boykisser.com</hostname>\n";
echo "      <port>587</port>\n";
echo "      <socketType>SSL</socketType>\n";
echo "      <username>$emailAddress</username>\n";
echo "      <authentication>password-cleartext</authentication>\n";
echo "    </outgoingServer>\n";
echo "  </emailProvider>\n";
echo "</clientConfig>";
