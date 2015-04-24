# SilverStripe HTML5 date/time fields and TimeDropdownField

SilverStripe TimeField is a module which consists of 3 form fields.

1. HTML5DateField
2. HTML5TimeField
3. TimeDropdownField

HTML5 date and time fields overwrite the SilverStripe's default DateField and TimeField with field which HTML5 input types.
TimeDropdownField generates a dropdown field with time and you can set the interval

## Installing

User composer to install

`composer require silverstripers/silverstripe-timefield dev-master`

## Features

First, the new input type reduce our reliance on client-side and server-side-scripting for validating inputs and this field is easy to use rather than using text field to enter time.
No need of any coding to get the HTML5DateField and HTML5TimeField overwritten in site wide. Just need to install the module.

## Browser Support

Based on the HTML5 date and time input types, these are supported in:

1. Chrome 33+
2. Firefox 22+
3. Opera 22+
4. Safari 7+

Internet explorer doesn't support this.

## Codes

### Change the interval of minutes in HTML5TimeField

add this in your config.yml. value should be in seconds.

```
HTML5TimeField:
  interval: '900'
```

### Add TimeDropdownField

add this in the getCMSFields() of the Page/DataObject you want to display the field. That will add 600 seconds inteval (10 mins).

```
$fields->addFieldToTab('Root.TabName', TimeDropdownField('FieldName')->setInterval(600))
```