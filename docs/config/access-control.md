Access control
--------------

By default access is restricted to local IPs. It could be changed via `allowedIPs` property. Additionally,
`checkAccessCallback` is available to be able to introduce custom access control:

```php
return [
    'modules' => [
        'webshell' => [
            'class' => 'humhub\modules\webshell\Module',
            // 'yiiScript' => Yii::getAlias('@root'). '/yii', // adjust path to point to your ./yii script
            'allowedIPs' => ['127.0.0.1', '::1', '192.168.0.2'],
            'checkAccessCallback' => function (\yii\base\Action $action) {
                // return true if access is granted or false otherwise
                return true;
            }
        ],
    ],

    // ... other application configuration
]
```
