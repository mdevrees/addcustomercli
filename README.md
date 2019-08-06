# Mdevrees Customer CLI module
This module adds a cli command to create a customer.

## Installation
`composer require mdevrees/addcustomercli`

## Usage
```bash
php bin/magento customer:user:create --help
Description:
  Create new customer

Usage:
  customer:user:create [options]

Options:
      --customer-firstname=CUSTOMER-FIRSTNAME  (Required) Customer first name
      --customer-lastname=CUSTOMER-LASTNAME    (Required) Customer last name
      --customer-email=CUSTOMER-EMAIL          (Required) Customer email
      --customer-password=CUSTOMER-PASSWORD    (Required) Customer password
      --website=WEBSITE                        (Required) Website ID
      --send-email[=SEND-EMAIL]                (1/0) Send email? (default 0)
  -h, --help                                   Display this help message
  -q, --quiet                                  Do not output any message
  -V, --version                                Display this application version
      --ansi                                   Force ANSI output
      --no-ansi                                Disable ANSI output
  -n, --no-interaction                         Do not ask any interactive question
  -v|vv|vvv, --verbose                         Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug
```

```
php bin/magento customer:user:create --customer-firstname="Mycha" --customer-lastname="De Vrees" --customer-email="m.devrees@gmail.com" --customer-password="password" --website="1"
```


## Changelog
### Version 0.0.1
Initial module version, allows users to be added

### Version 1.0.0
Bumped version to 1.0.0, no new changes

## Version 1.0.1
Set composer minimum stability to dev

## Version 1.0.2
Nothing specfici

## Version 1.0.3
Rename to AddCustomerCli
