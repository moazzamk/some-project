# Some Project

This is a library of utility functions to work with arrays. Currently, 
it contains just one (but the most important) utility : the array
flatener. 

Array flattener will flatten any nested array you throw at it. Got an 
array nested 10 levels deep (no judgement here)? Array flattener will
flatten that bad boy like nobody's business. 

Usage:

```
use SomeProject\ArrayUtil;

$arrayUtil = new ArrayUtil();
$arrayUtil->flatten([1, [2], 3]);
```

It is highly recommended you use a DI container and put this amazing 
utility in it. This way, you can mock it out in your tests and not have
to instantiate it every time you need to flatten those pesky nested arrays.

Just because you coded those nested arrays doesn't mean they have to stay
that way. 

## Happy array flattening!