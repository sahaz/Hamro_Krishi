 <div class="well well-sm"> 
    <div class='row'>
               
                <div class='col-lg-5 col-md-5 col-sm-5 col-xs-5'>
                    <h6><p class='text-left'>
                        <form name="Tick">
<?php $datestring = "%Y/%m/%d";;?>
                    Today: <?php echo mdate($datestring);?>
                        <input type="text" size="11" name="Clock">
</form>
<script>
<!--
/*By George Chiang (JK's JavaScript tutorial)
http://javascriptkit.com
Credit must stay intact for use*/
function show(){
var Digital=new Date()
var hours=Digital.getHours()
var minutes=Digital.getMinutes()
var seconds=Digital.getSeconds()
var dn="AM" 
if (hours>12){
dn="PM"
hours=hours-12
}
if (hours==0)
hours=12
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds
document.Tick.Clock.value=hours+":"+minutes+":"
+seconds+" "+dn
setTimeout("show()",1000)
}
show()
//-->
</script>
                        </p></h6>
                </div>

        <div class='col-lg-2 col-md-2 col-sm-2 col-xs-2'>
            <a href="<?php echo site_url('hamrokrishi/index'); ?>" >
             <img src="<?php echo site_url('uploads/users/hamrokrishi_bw.png'); ?>" alt="hamro krishi" class="img-responsive center-block" height="40" width="45">
            </a>
        
    </div>
        <div class='col-lg-5 col-md-5 col-sm-5 col-xs-5'>
            <h6><p class='text-right'>
                <?php $name=$this->session->userdata('name');?>
                <strong>  Active: </strong><?php echo $name;?> <a class="btn btn-default btn-xs" href="<?php echo site_url('admin/backend/logout');?>">
        Logout <span class="glyphicon glyphicon-new-window"></span></a>
                </p></h6>
        </div>
    </div>
 </div>
