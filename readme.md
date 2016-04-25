# slugify
Simple URL slugger (latinise) for all utf-8 character from all languages.

## Usage

```
use Slugify\SlugIt;

$init = new SlugIt();

echo $init->convert("éçà links")."\n\r";
echo $init->convert("ağaç işleri üretim atölyesi")."\n\r";
echo $init->convert("éïóöëï links");

```
### output

```
eca-links 

agac-isleri-uretim-atolyesi 

eiooei-links
```

## Composer Install 
```
composer require acarist/slugify
```