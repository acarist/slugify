# slugify
URL slugger (latinise) for all utf-8 character from all languages.
Simple

## Usage

```
require_once("slugify.php");

$init = new Slugify();

echo $init->convert("éçà links");
echo $init->convert("ağaç işleri üretim atölyesi")";
echo $init->convert("éïóöëï links");`

```
### output

```
eca-links 

agac-isleri-uretim-atolyesi 

eiooei-links
```

## TODO

- add this package to composer library