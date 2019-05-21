# hdctf_sql
### 这次为海大安全技能大赛出了一道MD5爆破加sql注入，虽然题目简单，但纪念一下

### writeup(哈哈，懒得传图了，请自行脑补)
Web4  SQL注入
1.	从首页上看虽然没有内容，但右键查看源代码可以发现底下有个提示，试试hash
 
2.	然后进入登陆界面
密码提示说是4位数字，结合前面的hash提示尝试用4位数字MD5加密形式爆破
 
爆破成功：
 
3.	然后进入最后一个页面
开始Sql注入
 
随便输入一个f ，成功搜索到范冰冰，凤姐的qq邮箱
 
搜索框一一测试关键词，发现屏蔽了and，sleep， ，=，这四个关键词
 
然后试下将空格用/**/绕过，and使用&&绕过，=使用like绕过。

Sqlmap一把梭（tamper脚本中的space2comment.py作用为空格转/**/，equaltolike.py作用为=转化为like，symboliclogical.py为and转&&）

成功跑出数据库
 
跑出ctf中的表 
 
接着跑出列名
 
最后拿到flag
 
 
