Configuration
-------------

To use web shell at the moment, include it as a module in the application configuration like the following:

```php
return [
    'modules' => [
        'webshell' => [
            'class' => 'humhub\modules\webshell\Module',
            // 'yiiScript' => Yii::getAlias('@root'). '/yii', // adjust path to point to your ./yii script
        ],
    ],

    // ... other application configuration
]
```

With the above configuration, you will be able to access web shell in your browser using
the URL `http://localhost/path/to/index.php?r=webshell`
