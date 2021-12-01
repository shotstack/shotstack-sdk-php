# MergeField()

A merge field consists of a key; `find`, and a `value`; replace. Merge fields can be used to replace placeholders within the JSON edit to create re-usable templates. Placeholders should be a string with double brace delimiters, i.e. `"{{NAME}}"`. A placeholder can be used for any value within the JSON edit.

### Example:

```php
use Shotstack\Client\Model\MergeField;

$mergeField = new MergeField();
$mergeField
  ->setFind('NAME')
  ->setReplace('Jane');
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setFind(string $find) | The string to find <u>without</u> delimiters. | Y
setReplace($replace) | The replacement value. The replacement can be any valid JSON type - string, boolean, number, etc... | Y
