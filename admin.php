<?php
      
       header('Content-type:text/html; charset=utf-8');
       $con = mysqli_connect("localhost","root","123456","cyxy");
       mysqli_query($con, "set names utf8");
       
       // ========== 分页操作 ========
       $perPage = 5;  // 每一页显示多少条记录
            
       // 当前要显示的页码 
       $nowPage = empty($_GET['p']) ? 1 : $_GET['p'];  
       
       $prevPage = $nowPage - 1;  //上一页
       $nextPage = $nowPage + 1;  //下一页
            
       // 得到符合条件的总记录数
       $cou = $con->query("Select * from cycommerce");
       $cot = $cou -> num_rows; //============这是总条数~！！！
 
       // 最大页数
       $maxPage = ceil($cot/$perPage);  // 最大页数 = ceil(总记录数/每页显示记录数)
       
       
       // 3.修改当前页数
       if ( $nowPage >= $maxPage ) {
           $nowPage = $maxPage;
           $nextPage = $maxPage;
       }
            
       if ( $nowPage <= 1 ){
           $nowPage = 1;
           $prevPage = 1;
       }
       
       
       //  分页公式
       $limit = ' limit '.($nowPage-1)*$perPage.','.$perPage;

       $users = $con->query("select * from cycommerce order by uid desc ".$limit);
       $row=$users->fetch_all(MYSQLI_BOTH);
         //  echo '<pre>';
         // print_r($users);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>small fish--admin</title>
	<style type="text/css">
             .content{
             	   width: 100%;
             	   height: 130px;
             	
              }
             .logo{
             	   margin-left: 30%;
             	   margin-top:20px;
             }
             .usertable{
                 width: 100%;
                 position: relative;
             }
             .table{
             	   width: 1080px;
             	   position:absolute;
                 left: 8%;
                 text-align:center;
                 table-layout:fixed;
             }
             .table_tit{
                 overflow: hidden;
                 height:50px;
                 /*line-height: 50px;*/
             }
             .del{
                 color: red;
                 text-decoration:none;
                 font-weight: bold;
             }
             .list-page{
                 float: right;
                 margin-top: 330px;
                 margin-right: 100px;
             }

	</style>
</head>
<body>
	  <div class="content">
          <img class="logo" src="images/01.png">
	  </div>
	  <div class="usertable">
          <table border="1"  cellspacing="0" class="table">
                <tr>
                  <th width="80px" height="40px">ID</th>
                  <th width="100px">姓名</th>
                  <th width="200px">电话</th>
                  <th width="450px" >留言信息</th>
                  <th width="180px" >留言时间</th>
                  <th width="70px">操作</th>
                </tr>
                <?php foreach($row as $k=>$v):  ?>
                <tr>
                  <td height="50px"><?=$v['uid']?></td>
                  <td><?=$v['uname']?></td>
                  <td><?=$v['uphone']?></td>
                  <td><div class="table_tit"><?=$v['umessage']?></div></td>
                  <td><?=$v['utime']?></td>
                  <td><a class="del" onclick="return confirm('你确认要删除吗?')"   href="./delete.php?id=<?=$v['uid']?>">删除</a></td>
                </tr>
                <?php endforeach; ?>
          </table>
          <div class="list-page"> <?=$cot?> 条 <?=$nowPage?>/<?=$maxPage?> 页    
                <a href='./admin.php?p=1'>首页</a>
                <a href='./admin.php?p=<?=$prevPage?>'>上一页</a>
                <a href='./admin.php?p=<?=$nextPage?>'>下一页</a>
                <a href='./admin.php?p=<?=$maxPage?>'>尾页</a>
          </div>
	  </div>
</body>
</html>