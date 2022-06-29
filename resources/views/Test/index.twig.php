<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>
{% for news_item in news %}
<div>
    <li>
        <ul>
            Title: {{ news_item.title }}
        </ul>
        <ul>
            Image: {{ news_item.image }}
        </ul>
        <ul>
            Language name: {{ news_item.language.name }}
        </ul>
        <ul>
            Language code: {{ news_item.language.code }}
        </ul>
    </li>
</div>
{% endfor %}
</body>
</html>