<?php
// These attributes mimic those of Azure AD.
$test_user_base = array(
  'http://schemas.microsoft.com/identity/claims/tenantid' => 'ab4f07dc-b661-48a3-a173-d0103d6981b2',
  'http://schemas.microsoft.com/identity/claims/objectidentifier' => '',
  'http://schemas.microsoft.com/identity/claims/displayname' => '',
  'http://schemas.microsoft.com/ws/2008/06/identity/claims/groups' => array(),
  'http://schemas.microsoft.com/identity/claims/identityprovider' => 'https://sts.windows.net/da2a1472-abd3-47c9-95a4-4a0068312122/',
  'http://schemas.microsoft.com/claims/authnmethodsreferences' => array('http://schemas.microsoft.com/ws/2008/06/identity/authenticationmethod/password', 'http://schemas.microsoft.com/claims/multipleauthn'),
  'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/emailaddress' => '',
  'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/givenname' => '',
  'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/surname' => '',
  'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/name' => '',
  'urn:oid:0.9.2342.19200300.100.1.1' => '',
  'urn:oid:0.9.2342.19200300.100.1.3' => ''
);

$config = array(
  'admin' => array(
    'core:AdminPassword',
  ),
  'example-userpass' => array(
    'exampleauth:UserPass',
    'doej:password' => array_merge($test_user_base, array(
      'http://schemas.microsoft.com/identity/claims/objectidentifier' => 'f2d75402-e1ae-40fe-8cc9-98ca1ab9cd5e',
      'http://schemas.microsoft.com/identity/claims/displayname' => 'John Doe',
      'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/emailaddress' => 'doej@fakester.com',
      'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/givenname' => 'John',
      'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/surname' => 'Doe',
      'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/name' => 'doej',
      'urn:oid:0.9.2342.19200300.100.1.1' => 'doej',
      'urn:oid:0.9.2342.19200300.100.1.3' => 'doej@fakester.com'
    )),
    'smithj:password' => array_merge($test_user_base, array(
      'http://schemas.microsoft.com/identity/claims/objectidentifier' => 'f2a94916-2fcb-4b68-9eb1-5436309006a3',
      'http://schemas.microsoft.com/identity/claims/displayname' => 'Jane Smith',
      'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/emailaddress' => 'smithj@fakester.com',
      'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/givenname' => 'Jane',
      'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/surname' => 'Smith',
      'http://schemas.xmlsoap.org/ws/2005/05/identity/claims/name' => 'smithj',
      'urn:oid:0.9.2342.19200300.100.1.1' => 'smithj',
      'urn:oid:0.9.2342.19200300.100.1.3' => 'smithj@fakester.com'
    ))
  ),
);