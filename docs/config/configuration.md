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
one of the following URLs

#### PrettyUrl Disabled
`http://localhost/path/to/index.php?r=webshell`
#### PrettyUrl Enabled
`http://localhost/path/to/webshell`
