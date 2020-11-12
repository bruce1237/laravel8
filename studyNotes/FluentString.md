# Fluent String
[流畅的字符串函数](https://learnku.com/docs/laravel/8.x/helpers/9393)

## after
after 方法将返回字符串中指定值后的所有内容。如果字符串中不存在这个值，它将返回整个字符串：
```
$str = 'this is my fluent string test text';
echo Str::of($str)->after('is');
```
*result*: is my fluent string test text

---

## afterLast
afterLast 方法返回字符串中指定值最后一次出现后的所有内容。如果字符串中不存在这个值，它将返回整个字符串：
```
$str = 'this is my fluent string test text';
echo Str::of($str)->afterLast('is');
```

*result*: my fluent string test text

---

## append
append 方法为字符串附加上指定的值：
```
 $str = 'this is my fluent string test text';
 $newStr = 'This is mY NEW STR';
 return Str::of($str)->append($newStr);
```

*result*: this is my fluent string test textThis is mY NEW STR

---
