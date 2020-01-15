# :palm_tree: Thaana lorem

![thaana lorem logo](https://jinas.me/images/baravelithaanaasdsd.jpg)

This is a Thaana lorem ipsum generator written in PHP. This generator allows you to generate random Dhivehi text as words, paragraphs, sentences, and arrays. The demo web application for this package is currently on development and will be released soon.

The package is still on beta. Fixes and new features will be added soon

## :battery: Installation

```shell
 composer require baraveli/thaanalorem
```

## :bulb: Usage

#### Generate a single word.

```php
$thaana = new ThaanaLorem;

echo $thaana->word();

```
Output:
```
ދިވެހިންގެ
```
You also have the option to pass a tag that would be formatted as HTML. It can be done like so:

```php
$thaana = new ThaanaLorem;

echo $thaana->word('p');

```
Output:
```
<p>ދިވެހިންގެ</p>
```

### Generate words.

You can pass the number of the words you want to the function's parameter.
```php
$thaana = new ThaanaLorem;

//with tags
//echo $thaana->words(5,'p');

echo $thaana->words(5);

```

Output:

```
ދިވެހިންގެ ފެނުނީ  މެދުވެރިވީ  ވިޔަފާރިވެރިންނަށް މަހެއް
```

### Generate a single sentence.

```php
$thaana = new ThaanaLorem;

echo $thaana->sentence();

```
Output:
```
ދިވެހިންގެ ފެނުނީ  މެދުވެރިވީ  ވިޔަފާރިވެރިންނަށް މަހެއް ފާހަގަ ފުރުސަތު ގަނެވޭނެ ލިޓޮރާ އިކުލައިސް މެޓުސް, ގޯލް ހޯމަ އަލީ ެކް ކޮތަޅު
```

### Generate sentences.

```php
$thaana = new ThaanaLorem;

echo $thaana->sentences(3);

```
Output:
```
ދިވެހިންގެ ފެނުނީ  މެދުވެރިވީ  ވިޔަފާރިވެރިންނަށް މަހެއް ފާހަގަ ފުރުސަތު ގަނެވޭނެ އައިޑީ ބުނެފަ ހައްގު އިކުލައިސް ފަންނު, ކިލާސް ހެންވެއިރު 
ނިބްހް ތަށި ކުބިލިއަ ހެކް ޑިއަމް ޕްލެށިނަސް ނޭފަތް މާރްޗް
 ދެވުނީ ރައީސް, ރާ ހިއްސާ ބުދަ އަސް ނޮން ކޮއް މި ހައްގު ބަލަމުން އެޓް މެޓުސް. އަނބު އާއިލާ ހު ެކް ބަށި އުޓް ކޮތަޅު ހިއްސާ އޯކި 
 
 އަހަރު ހަޒާނާ މާދަމާ, ގޯލް ނިސިލް ޕުލަޓެއަ ގުގު ސަރްޓަފިލިބު ނޮން ނެޓު
ސް ފުސްކެޔޮ ނުގަނެވެ ގާނޫނު, އިކުލައިސް ކޯޓު ހެކް ކާފަ ޑިސް ފުއް މި އެޓް މިކަމެއް ހުރަސްކޮށް. ފުރުސަތު އަކްޓޯރާ ހޭލާ ޒުވާބު ދިންކެޔޮ 

ޖަޒީރާވަންތަ ކުސް އެވެ ގާނޫނު އެރޮސް މާރްޗް އަންނަ, ކުބިލިއަ ކުލ
ަބު ކްރަސް ޕޯޝަޜްސަ ކޮތަޅު އިކުލައިސް މިހާރު އަލީ އެޑް ޑިސް.
```

### Generate a paragraph.

```php
$thaana = new ThaanaLorem;

echo $thaana->paragraph();

```
Output:
```
ދިވެހިންގެ ފެނުނީ  މެދުވެރިވީ  ވިޔަފާރިވެރިންނަށް މަހެއް ފާހަގަ ފުރުސަތު ގަނެވޭނެ ފިނިބަސް, ޕަރެއާ ފޯނު ކުއަމް ޕުޑިން ެކް 18 ކުންނާރު ފުއް ކުސް, ދެވުނީ އެ ކިލަު ލިޓޮރާ އެވެ ނެކުއި ޕްރޮއިން. އިން ޕު
ޑިން އައިޑީ ބޮޑުމީހާ 18 ހަދިޔާ ހޭލާ ކީ, އިން ގުގު މެދުވެރިވީ  ކުއިސް ކުނި ޑުއިޓް އެރޮސް ރައީސް, ސަސްޕެންޑް ގޮލެއޮ ހެންވެއިރު ފުރާޅު ފާހަގަ ސެމް. ދެތިން ތަށި ނިސްލް އިން ނެކުއި ކޮބާ, މުޅި ގަސް ހައްގ
ު މެދުވެރިވީ  ދިރިހުރުމުގެ ޖަސްޓޯ, ބަތް ޕުލަޓެއަ އައިޑީ ކުލަބު. 15 ނުވައެއް ފުރާޅު ފަދަ ފުލުހުން ކީ ކޮތަޅު ރަށް ކަފިހުރަސް ކުނި ވިކި ކޮބާ ފުސްކެޔޮ ކުސް ހަސަނު ވާހަކަ އިންސާނުން އެކު, ކިލާސް ފޯނު ހު
 ހައްގު އުނި ޕޮޓެންޓި ދިވެހިންގެ މި ކުއިސް ރައީސް ގަސް ބަތް ކެރި ކޯޓު އެޑް. ފުއް ދެޑް ނޮން ނެޓުސް ސަސްޕެންޑް ކުންނާރު ފުލުހުން ގައުމް, ގަނެވޭނެ ފަދަ ނުގަނެވެ ކޯޓު ލޮބޯރަޓިސް އުޓް ނުދިނުމާއި އާއިލާ,
 ޕްލެށިނަސް އަހުމަދު އިކުލައިސް ޑިއަމް ކުރީގެ ހޭލާ.
```

### Generate paragraphs.

```php
$thaana = new ThaanaLorem;

echo $thaana->paragraphs(2);

```
Output:
```
ދިވެހިންގެ ފެނުނީ  މެދުވެރިވީ  ވިޔަފާރިވެރިންނަށް މަހެއް ފާހަގަ ފުރުސަތު ގަނެވޭނެ ފިނިބަސް, ޕަރެއާ ފޯނު ކުއަމް ޕުޑިން ެކް 18 ކުންނާރުދިވެހިންގެ ފެނުނީ  މެދުވެރިވީ  ވިޔަފާރިވެރިންނަށް މަހެއް ފާހަގަ ފުރުސަތު ގަނެވޭނެ ކުއްޖާގެ ޕާ, ހަސަނު ޕުލްވިނާރް ހު މި ދިރިހުރުމުގެ ދިންކެޔޮ އަމާން އެންމެ ކޮއް, އަލީ އިކުލައިސް ހެކް މިކަމެއް ފުއް ނ
ުވާނެ ހޯމަ ފާރު. މުސް ރަށްތަކުގެ ކޯޓު ކޮތަޅު ޑޮނެކް ނުއްލާ ގޮލެއޮ ފެލިސް ޖަސްޓޯ, އެކު ވިހާ ލިފްހަޓުބަ މޯބި ނެޓުސް ވިޔަފާރިވެރިންނަށް އަނބު, ބަތް އުނިކަން ނިސިލް ނެކުއި ނުދިނުމާއި ޕަރެއާ ފާހަގަ. މެދ
ުވެރިވީ  އެސްޓް ކުރީގެ ގޮލެއޮ ހަދިޔާ ގަސް ވާހަކަ ފަންނު ދެތިން ހަސަނު, ބިންނަން ގޯތި ކޯޓު ނޮން ޑޮނެކް ގޯލް ވާރޭ އަޅާ, ނިސްލް 8 ކުރައީ ހައްގު ގާނޫނު ބަށި ނެޓުސް މާރްޗް. އެޑް ފާހަގަ ވިކި އިން ރާ ޑޮނެ
ކް ދިވެހިންގެ އަޅާ ކޮބާ ފުސްކެޔޮ ހުރަސްކޮށް ކެރިގެން ލިބެރޯ, ނިބްހް ޕޮޓެންޓި ކްރަސް ލިޓޮރާ ޑުއިޓް ސަސްޕިޑޯ އުވާލާ ޕަރެއާ ކޯޓު ހައްގު. ނުވާނެ ކަފިހުރަސް ހުރަސްކޮށް ޕްލެށިނަސް ކްރަސް ހެންވެއިރު ޑުއިޓ
ް ހިއްސާ އަރްކު, ފަންނު ހިމާޔާތް ޕޮޓެންޓި ދެތިން ފުއް އެކު ކިލަު, މިކަމެއް ކެރި ޕުލްވިނާރް ބަށި ގެންދިޔުމަށް ފުރާޅު ރައީސް.

ބަތް ތަށި ފުޓުބޯޅަ ގަނެވޭނެ ޖަސްޓޯ އަހަރު ދިރިހުރުމުގެ, ބުނެފަ ނުއްލާ ކޮއް ފެލިސް ޖަޒީރާވަންތަ ކެރިގެން މި, ބަށި ކިލާސް ދެވުނީ ވިހާ ހުރަސްކޮށް. ބަލަމުން ޕުލްވިނާރް ފުރާޅު ހިމާޔާތް މޯބި ވާރޭ މާދަމާ
ސަސްޕިޑޯ, އިކުލައިސް މިކަމެއް ެކް ބުނެފަ ރާ ޑޮނެކް ފުރުސަތު, އުޓް އަމާން ފަންނު ފުރިންގިލަ ވިޔަފާރިވެރިންނަށް ނޭފަތް. ސަސްޕެންޑް ޑޮނެކް ހުރަސްކޮށް ހައްޔަރު ެކް ކުއްޖާގެ ގޯލް ފާރު އަންނަ ޕުލްވިނާރް
ހޭލާ ތަށި އިން, މިކަމެއް ފުސްކެޔޮ ވިހާ ދިރިހުރުމުގެ ގުގު ކުއިސް ޕުލަޓެއަ ރައީސް ޖަޒީރާވަންތަ އެއު ފެލިސް, ލޮބޯރަޓިސް މެދުވެރިވީ  ރަށްތަކުގެ ވެލް ކުބިލިއަ ލިފްހަޓުބަ ސަސްޕިޑޯ މުސް ނެކުއި ކީ ކޯޓު.
```

### Dictionary loader

All the Dhivehi words get loaded using a dictionary loader. The dictionary loader loads the thaana.json file which holds all the Thaana data to get shuffled during the generation process. Thaana words are arranged in random order inside the file

sample data from thaana.json file is shown below:

```json
[
    "ދިވެހިންގެ",
    "ފެނުނީ ",
    "މެދުވެރިވީ ",
    "ވިޔަފާރިވެރިންނަށް",
    "މަހެއް",
    "ފާހަގަ",
    "ފުރުސަތު",
    "ގަނެވޭނެ",
    "އިން",
    "އެކު",
    "ރަށް",
    "އެޑް",
    "ވިދާ",
    "ގުގު",
    "ރާ",
    "ރައީސް",
    "ކުސް"
]
```
Dictionary loader class is shown below.

```php
<?php

namespace ThaanaLorem\Utils;

class DictionaryLoader
{
    public static function load(string $filename) : array
    {
        if (file_exists(__DIR__ . '\Dictionary\\' . $filename .  '.json')) {
            $path = __DIR__ . '\Dictionary\\' . $filename .  '.json';
        } else {
            $path = './../Dictionary/' . $filename . '.json';
        }

        $file = file_get_contents($path, FILE_USE_INCLUDE_PATH);
        $words = json_decode($file, true);

        if (!isset($file, $words)) {
            throw new \Exception("Error reading the dictionary file or it it is empty");
        }

        return $words;
    }
}

```
This Util class contains a single static load method that loads the JSON file given the filename. In this case, it loads the dictionary file into the application.