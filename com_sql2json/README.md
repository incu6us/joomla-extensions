### com_sql2json
---
It's a Joomla! 3 component for convert data from database using sql queries into json-format. It can be useful if you would like to connect some AJAX framework (ex.: AngularJS) to your site.
You just need to install this component to start it to use. After, you can just add unique name for apiname-variable and sql-query for your database. Using apiname-variable you can execute writed sql-query into background of the Joomla! back-end.

Add this code for view your json example (at the star of Joomla! template):
```php
<?php

defined("_JEXEC") or die;

if (JFactory::getApplication()->input->get('option') == "com_sql2json"){
    $doc->setMimeEncoding('application/json');
    echo '<jdoc:include type="component"/>';
    return;
}

...
```

Component call example:
```
http://example.com/index.php?option=com_sql2json&apiname=test
```

View example (sql-query: "select 1+1" for apiname "test"):
```json
{
  "1+1": "2"
}
```

Joomla Extensions page: http://extensions.joomla.org/extensions/extension/core-enhancements/coding-a-scripts-integration/sql2json
