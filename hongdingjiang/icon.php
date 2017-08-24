<?php
if(empty($_SESSION['menu'])){
	die;
}else{?>
<div class="icon">
    <img src="images/icon.png" width="48" />
</div><!--icon/-->
<div class="icon1">
<div class="smicon">
<?php
$dataArr = array(38=>'冰箱',39=>'滚筒洗衣机',40=>'波轮洗衣机',41=>'空调柜机',42=>'空调挂机',43=>'电热水器',44=>'燃气热水器',45=>'空气能热水器',46=>'太阳能热水器',47=>'燃气壁挂炉',48=>'电视',49=>'手机',50=>'智能尚品',51=>'空气净化器',52=>'吸尘器',53=>'电风扇',54=>'净水机',55=>'饮水机',56=>'吸油烟机',57=>'灶具',58=>'洗碗机',59=>'消毒柜',60=>'烤箱',61=>'微波炉',62=>'电蒸箱',63=>'豆浆机');
foreach($_SESSION['menu'] as $key=>$v){
?>
  <dl>
	<dt><a href="<?php echo $v?>.php"><img src="images/<?php echo $v?>.png" /></a></dt>
	<dd><a href="<?php echo $v?>.php" <?php if(!empty($_SESSION['arr'][$v])) echo 'style="color:#967A53"'?>><?php echo $dataArr[$v]?></a></dd>
  </dl>
<?php }?>
    </div><!--icon1/-->
    </div>
<?}?>