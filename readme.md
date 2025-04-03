支持hyperf3.1

# 如何使用
```
 安装最新版
 
 composer require goletter/hyperf-modelfilter

 创建目录
 app/Model/Filters
 
 在模型中使用trait
 
 use Goletter\ModelFilter\Filterable;
 class Tag extends Model
 {
    use Filterable;
 }
 
 创建filter类
 
 在app/Model/Filters中创建模型名+Filter的文件
 
use Goletter\ModelFilter\ModelFilter;
class TagFilter extends ModelFilter
{
    public function id($value)
    {
        return $this->where('id',$value);
    }

    public function name($value)
    {
        return $this->where('name','like',$value.'%');
    }

    public function order($value)
    {
        return $this->where('order','>=',$value);
    }
}

```


