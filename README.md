﻿# -e-commerce-sites-with-php
前后台自己开发的电商网站-php源码-smarty模版

A.2017.2-2017.4  BhereShop购物商城项目
http://112.74.162.171/  该项目的IP，域名尚在备案途中，此为安全的IP地址
本人参与了该项目的设计,开发与测试等环节。
此系统整体采用MVC模式的Smarty框架，持久层使用的是Redis缓存处理，数据库使用mysql，达到了基本电商平台的基本功能实现，其中包含ajax，html，css，js，jquery等前后台交互的技术：
且该电商项目前台和后台数据管理都是亲自参与完成的
项目描述：本项目为毕莱尔购物商城的一个独立网上购物系统，它集合了商品管理，商品促销，订单管理，权限管理，评论管理，销售统计等一系列功能模块。本系统涵盖功能全面，用户具有操作简单，易上手，管理安全等特点，为企业的运用发挥积极作用。
开发环境:  Windows/Linux+ APACHE+MYSQL+PHP; 
使用技术：
MVC架构模式下面向对象的编程开发
单一入口机制
数据库技术，Mysql，Redis，缓存处理
SESSION与COOKIE存储
Ajax与后台交互
http协议，调用接口开发(物流，短信，支付，邮箱)
前端HTML,CSS,JS,JQUERY,Bootstrap

项目职责：该项目分为前台和后台的开发部分：
负责模块：
1.对于前台的开发，分为静态页面的编写，以MVC架构面向对象模式开发
项目负责内容：商城主页的数据展示，页面重新编写，smarty页面缓存和redis缓存处理
个人中心页面的布局，物流接口的调用，修改密码等
商品结算页的编写，功能完善，调用支付接口，完成商品支付功能并获得回调数据
商品详情页的前端页面，数据展示，缓存统计点击量，布局调优，商品评论ajax处理，商品属性，
商品支付页面的回调处理，后续的清空购物车，减少库存，评价商品等
所有前端布局的样式功能规划，调优，指定正确的模版分布，商城LOGO的制作
2.后台部分，以php编程语言为基础，实现以下功能的开发处理：
商城数据表的统筹编写，ER关系分析，字段优化
后台管理模版，商品列表的展示，增删改查，包含商品的字段细节，图片上传，图片缩放，选择对应属性，添加属性值的联查和ajax技术
商品评论模块管理，查看，删除，隐藏，管理员提醒限制功能的完善
商品订单管理的更新，物流配送的设置，物流接口调用准备数据
商品销售统计，统筹前台的商品数据，结合redis缓存设置，记录每日的商品销售数据，成交量，好评率等
