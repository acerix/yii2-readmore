# yii2-readmore

Installation
============
Add the following line to your composer.json require section:
```json
  "acerix/yii2-readmore":"*",
```

or run:
```
$ composer require acerix/yii2-readmore "*"
```

Usage
============
Basic example:
```php
echo \acerix\yii2\readmore\Readmore::widget([
    'body' => file_get_contents('http://loripsum.net/api/7'),
    'clientOptions' => [
        'speed' => 69, // length of animation in milliseconds
        'moreLink' => '<a href="#">'._('Read more').'</a>',
        'lessLink' => '<a href="#">'._('Close').'</a>',
    ]
]);
```
