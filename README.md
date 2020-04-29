# [龙啸轩内容管理系统 V3.1](http://www.cxuu.top)

此版本是基于 Z-PHP 和 layui构建，简单高效！！简单粗暴！！
适合公司企业站、企事业单位CMS站、新闻站、单位或公司内网站点，并可以根据实际需要二次开发微信、API接口等。

# 前端：
1、支持页面数据定制灵活调用；

2、视图面静态化；

3、Redis\memcache\file文件缓存，可以自由定制缓存时间；

4、前端包括：文章、图集、公司成员显示、值班安排、在线访问统计等；

5、灵活路由方式；

6、以及一些未描述功能。

# 后台
1、灵活角色、管理员权限；

2、后台菜单灵活定制；

3、JSON数据列表；

4、便捷的栏目管理；

5、系统公告；

6、系统设置；

7、缓存管理；

8、扩展功能包括：访问图形化显示、值班安排管理、图集管理、内部成员管理等；

9、其它功能。


php 7.1+ 

mysql 5.6+

开发文档请看：

# [Z-PHP框架](http://www.z-php.com)
[文档](https://www.showdoc.cc/zphp4):https://www.showdoc.cc/zphp4

使用文档？
在程序内部和模板上都有相应注释，我比较懒，暂时没有整理出来。

后台访问地址：xxx.com/admin.php
后台用户名：admin  密码：123456

数据库是根目录的cxuuweb.sql，直接导入数据库即可，数据库配置文件在根目录的common/config.php里！

WEB目录请绑定在：/public
暂时不支持网站子目录绑定，下步将解决这个问题（很多地方使用了绝对路径）

特别注意：

1、前端默认开启了redis缓存及路由模式，需要运行环境支持！也可以通过config.php 配置使用文件缓存或者 MEMCACHE缓存；

2、网站要要求环境伪静态支持！

演示站点正在备案，很快就可以开放！！http://www.cxuu.top/

