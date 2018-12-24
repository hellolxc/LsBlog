web后台功能(html 与 php混合写 方便打包)
	文章功能
		发布文章
		编辑文章
		删除文章
		生成文件
	设置功能:
		启用同步功能
			导出所有文章(启用同步可用)
		源文件不存在,自动删除文章   Y 自动删除文章   N 不自动删除
	
	更新到github

	本地预览功能(打开本地连接 文件地址)

cli命令行功能:

		server  启动服务   后台  文章预览
	    new     文章(可设置是否自动打开) web  编辑器
		edit    文章名字/id
		delete  文章名字/id
		build   将md转换为html
		push    将本地文章更新到github
		pull    将远程文章更新到本地
		ls      列出所有文章
		version 版本
		clean
		help

所有文章放到 php 数组文件中,  取文章名字为唯一标识  ,用id为索引,并生成时间戳,最后修改时间戳
如果本地跟远程冲突以后,根据时间戳自动合并文章   时间戳排序  发生冲突,或者统一时间创建,添加到最后





### 第三放平台支持
- github
- 博客园          @wiki https://rpc.cnblogs.com/metaweblog/liuyublog#metaWeblog.newPost
- csdn           FUCK CSDN
- oschina        @wiki https://my.oschina.net/action/xmlrpc
- 163            @wiki http://os.blog.163.com/word/




### TODO
- 系列文章





		
		
		
