<?php if (!defined('THINK_PATH')) exit();?><div class="wrapper">
<div class="top-bar">
<div class="container">
<ul class="top-member">
<script type="text/javascript" src="./开森商城-玩具就是开森！方便、快捷、高端、正品！_files/utils.js"></script><span id="append_parent"></span>
<li class="wellcome"><span>欢迎回来，玩具就是开森 ！</span></li>
<li class="more-menu">
<div id="all"><a class="menu-link" rel="nofollow" href="/tongmeng/index.php/User/index"><span><?php echo ($_SESSION['user'][0]['username']); ?></span></a>
            <i class="arrow"></i>
            <div class="more-bd" id="ccontent">
                <div class="list usernav-bd">
                    <a href="<?php echo U('User/index');?>">我的余额：<b><?php echo ($detail[0][money]); ?></b></a>
                    <!-- <a href="javascript:void(0);">我的积分：0积分</a>
                    <a href="">我的红包（352.00）</a> -->
                    <a href="<?php echo U('User/personalMod');?>">修改个人资料</a>
                    <a class="last" href="/tongmeng/index.php/Logout">退出</a>
                </div>
            </div></div>
        </li>   
<li>
<a rel="nofollow" href="<?php echo U('MyOrder/myorder');?>">我的订单</a>
</li>
</ul>
<ul class="top-panel">
<li>
<a href="<?php echo U('Help/index');?>" target="_blank" style="margin-right:7px">帮助中心</a><s></s>
</li>
<li>
<a href="javascript:void(0);" onclick="AddFavorite(&#39;童梦商城&#39;,location.href)" class="heaTopFav" style="margin-right:7px">收藏本站</a><s></s>
</li>
<li class="tel"><span>客服热线: 4008-000-000</span></li>
</ul></div></div></div>