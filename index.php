<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>乐淘 - 后台管理</title>
    <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="public/assets/nprogress/nprogress.css">
    <link rel="stylesheet" href="public/css/index.css">
</head>

<body>

    <!-- 侧边栏 -->
    <div class="aside">
        <!-- 个人资料 -->
        <div class="profile">
            <!-- 头像 -->
            <div class="avatar img-circle">
                <img src="./uploads/avatar.jpg">
            </div>
            <h4>布头儿</h4>
        </div>
        <!-- 导航菜单 -->
        <div class="navs">
            <ul class="list-unstyled">
                <li>
                    <a href="./index.html" class="active">
                        <i class="fa fa-dashboard"></i> 仪表盘
                    </a>
                </li>
                <li>
                    <a href="./user_list.html">
                        <i class="fa fa-group"></i> 用户管理
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-indent"></i> 分类管理
                        <i class="arrow fa fa-angle-right"></i>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="./category.html">
                                 一级分类
                            </a>
                        </li>
                        <li>
                            <a href="./brand.html">
                                二级分类
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="./goods_list.html">
                        <i class="fa fa-cubes pull-left"></i> 商品管理
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- 主体 -->
    <div class="main">
        <div class="container-fluid">
            <?php include './common/header.html'?>
            <!-- 个人资料 -->
            <div class="body dashboard">
                <div class="row survey">
                    <div class="col-xs-3">
                        <div class="cell money">
                            <i class="fa fa-money"></i>
                            <span>我的收入</span>
                            <h5>￥11.11</h5>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="cell th">
                            <i class="fa fa-th"></i>
                            <span>课程数量</span>
                            <h5>12</h5>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="cell user">
                            <i class="fa fa-user"></i>
                            <span>用户数量</span>
                            <h5>236</h5>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="cell eye">
                            <i class="fa fa-eye"></i>
                            <span>浏览量</span>
                            <h5>22435</h5>
                        </div>
                    </div>
                </div>
                <div class="chart">
                    <div id="main" style="width: 600px;height:400px;"></div>
                </div>
            </div>
        </div>
    </div>
    <?php include './common/script.html'?>
    <script>
        require(['src/index']);
    </script>
</body>

</html>