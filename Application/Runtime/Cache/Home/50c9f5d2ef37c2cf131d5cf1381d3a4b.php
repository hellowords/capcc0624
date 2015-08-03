<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户登录</title>
<style type="text/css">
body {
	background-size:cover;
	background-image: url(/capcc0624/Public/Home/Images/login/login_bg.jpg);
}

</style>
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/bootstrap/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/login.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--[if lt IE 9]>
				<script src="http://html5abim.goolecode.com/avn/trunk/html5.js"></script>
<![endif]-->
</head>

<body >
	<div class="container-fluid">	
		<div class="row-fluid">
			 <div class="col-md-4">
		  	  <div class="body_left" ><img src="/capcc0624/Public/Home/Images/login/logo.png" width="220" height="65" /></div>
		   </div>
		  
		   <div class="col-md-4  body_right" >
		   		  <div class="col-md-5">
	   					<h2 class="up_left">用户登录</h2>
	   				</div>
	   				<div class="col-md-1 col-md-offset-2">	
	   			    <h4 class="up_right"></h4>
	   			  </div>
	   		  
	   		  	<div class="col-md-12">
	   			  	<form  class="form-horizontal" action="check_login" method="post" >
	 				 			<fieldset>

	   								  <div class="control-group side">
	          						 <!-- 账号-->

	         							 <label class="control-label" for="username" ><h3><strong>账号:</strong></h3></label><br />
					 							 <input class=" input-lg" type="text" placeholder='手机号/用户名/邮箱' name="username">

	     								</div>			
											<div class="control-group side">
	          						<!-- 密码 -->
	          						<label class="control-label" for="code"><h3><strong>密码:</strong></h3></label><br />   
				    						<input class="input-lg"  placeholder='' type="password" name="password">
	     							 	</div>
	                    <br />
	                    
	        					  <div class="control-group side">
	        					  	<!--div class="col-md-2"-->
	        	        		 <button type="submit" class="btn btn-primary btn-lg">登录</button>

	        	        		<!--/div-->
	        	        		<!--div class="col-md-5 col-md-offset-1"-->
                                      <a href="register"><button type="button" class="btn btn-success btn-lg side">注册</button></a>
                                      &nbsp;&nbsp;&nbsp;&nbsp;<a style="color:red" href="forget_pwd">找回密码</a>
	        	        		<!--/div--> 
	        						</div>

	        				    <br />
	        						
	        							<div class="col-md-12">
	     								  <table cellspacing="0" cellpadding="0">
		        							<tr>
		          							<td ><h5>合作账号登录</h5></td>
	                          <td ><img src="/capcc0624/Public/Home/Images/login/hz1.gif" width="35" height="25" /></td>
	                          <td ><img src="/capcc0624/Public/Home/Images/login/hz3.gif" width="35" height="25" /></td>
	                          <td ><img src="/capcc0624/Public/Home/Images/login/hz2.gif" width="35" height="25" /></td>
	                          <td ><img src="/capcc0624/Public/Home/Images/login/hz4.gif" width="35" height="25" /></td>
		        							</tr>
	      							  </table>
	      							  </div>
	      							
	                   
	              </fieldset>
	            </form>     
	          </div>
		   </div>
		</div>
	</div>

<script type="test/javascript" src="/capcc0624/PublicHome/Js/jquery-1.11.3.min.js"></script>
<script type="test/javascript" src="/capcc0624/PublicHome/Js/bootstrap.js"></script>
</body>
</html>