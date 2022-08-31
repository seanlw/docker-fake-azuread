# Docker Fake Azure AD

Docker container that is used in development to memic Azure AD SAML authentication. This is for development and testing ONLY. This should not be put into production.

Based on [docker-simplesamlphp](https://github.com/kenchan0130/docker-simplesamlphp)

## Usage

### Using docker-compose

```yml
version: "3"
services:
  idp:
    image: seanlw/fake-azuread
    container_name: idp
    ports:
      - "8080:8080"
    environment:
      SIMPLESAMLPHP_SP_ENTITY_ID: http://app.example.com
      SIMPLESAMLPHP_SP_ASSERTION_CONSUMER_SERVICE: http://localhost/simplesaml/module.php/saml/sp/saml2-acs.php/test-sp
      SIMPLESAMLPHP_SP_SINGLE_LOGOUT_SERVICE: http://localhost/simplesaml/module.php/saml/sp/saml2-logout.php/test-sp
```

There are two basic users for authentication.

Username|Password
---|---
doej|password
smithj|password

One admin account

Username|Password
---|---
admin|secret

## Customize

You can customize IDP users in `authsources.php`

## Environment Variables

Name|Required/Optional|Description
---|---|---
`SIMPLESAMLPHP_SP_ENTITY_ID`|Required|The entity ID of your SP.
`SIMPLESAMLPHP_SP_ASSERTION_CONSUMER_SERVICE`|Requried|The assertion consumer service of your SP.
`SIMPLESAMLPHP_SP_SINGLE_LOGOUT_SERVICE`|Optional|The single logout url of your SP.
`SIMPLESAMLPHP_IDP_ADMIN_PASSWORD`|Optional|The password of admin of this IdP. Default is `secret`.
`SIMPLESAMLPHP_IDP_SECRET_SALT`|Optional|This is a secret salt used by this IdP when it needs to generate a secure hash of a value. Default is `defaultsecretsalt`.
`SIMPLESAMLPHP_IDP_SESSION_DURATION_SECONDS`|Optional|This value is the duration of the session of this IdP in seconds.