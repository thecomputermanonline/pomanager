<?php
$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->id,
);

//$this->menu=array(
//array('label'=>'List Orders','url'=>array('index')),
//array('label'=>'Create Orders','url'=>array('create')),
//array('label'=>'Update Orders','url'=>array('update','id'=>$model->id)),
//array('label'=>'Delete Orders','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//array('label'=>'Manage Orders','url'=>array('admin')),
//);
?>


<!--<div class="span1">
    <a href="<?php echo $this->createUrl('index'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">4</span>
        <span class="label label-info">List Orders</span>
    </a>
</div>-->
<div class="span1">
    <a href="<?php echo $this->createUrl('create'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">V</span>
        <span class="label label-info">Create Orders</span>
    </a>
</div>

<div class="span1">
    <a href="<?php echo $this->createUrl('update', array('id'=>$model->id)); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">r</span>
        <span class="label label-info">Update</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo $this->createUrl('admin'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">(</span>
        <span class="label label-info">Manage Orders</span>
    </a>
</div>

<div class="span1">
  <?php echo CHtml::link('<span class="modernpics newline icons-red">x</span><span class="label label-inverse">Delete</span>', '#', array('class'=>'aqua-shortcut text-align-center delete','submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')); ?></div>


<div class="span4">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>View Orders #<?php echo $model->id; ?><span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">
            <?php $this->widget('bootstrap.widgets.TbDetailView',array(
            'data'=>$model,
            'attributes'=>array(
            		/*'id',
		
		'employeeid',*/
//                array(
//			'name'=>'customerid',
//			'type'=>'raw',
//			'value'=>customer.company_name
//                    
//		),
		array(
        'name' => 'Customer Name',
        'value' => $model->customer->company_name,   //where name is Client model attribute 
       ),
		'order_date',
		'purchase_order_number',
		'ship_date',
		'shipping_methodid',
		'freight_charge',
		'taxes',
		'payment_received',
		'comment',
            ),
            )); ?>

    </div> 
   
</div>
</div>


<div class="span3">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">b</i><span class="panel-divider"></span><h2><?php echo $model->documentCount>=1 ? $model->documentCount . ' Documents' : 'NO Document'; ?> for this order</h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">


	<?php if($model->documentCount>=1)
            : ?>
<!--		<h3>
			<?php //echo $model->documentCount>1 ? $model->documentCount . ' documents' : 'One document'; ?>
		</h3>-->

		<?php $this->renderPartial('_documents',array(
			'order'=>$model,
			'documents'=>$model->documents,
		)); ?>
	<?php endif; ?>
<div class="well">

                <div id="accordion2" class="accordion">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a href="#collapseOne" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                <span class="modernpics icons24">f</span> Add a Document
                            </a>
                        </div>
                        <div class="accordion-body collapse" id="collapseOne" style="height: 0px;">
                            <div class="accordion-inner">
                           <?php if(Yii::app()->user->hasFlash('documentSubmitted'))
            
            : ?>
		<div class="flash-success">
                    <div class="alert in alert-block fade alert-success">
                        <a class="close" data-dismiss="alert">×</a> <?php echo Yii::app()->user->getFlash('documentSubmitted'); ?>
                    </div>

			
		</div>
	
                    <?php else: ?>
		<?php $this->renderPartial('/documents/_form',array(
			'model'=>$document,
		)); ?>
	<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div></div>
          

	

  </div>
    </div>
</div>


<div class="clear"></div>
     <div id="yw39" class="togglable-tabs">
         <ul class="nav nav-tabs" id="yw40">
             <li class="active">
                 <a href="#yw39_tab_1" data-toggle="tab">Order details</a>
             </li>
             <li>
                 <a href="#yw39_tab_2" data-toggle="tab">Comments on Order (<?php echo $model->commentCount ?>)</a></li>
                
<!--             <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                 <ul class="dropdown-menu" id="yw41">
                     <li><a href="#yw39_tab_3" tabindex="-1" data-toggle="tab">@fat</a></li>
                     <li><a href="#yw39_tab_4" tabindex="-1" data-toggle="tab">@mdo</a></li>
                 </ul>
             </li>--></ul>
         <div class="tab-content">
             <div class="tab-pane fade active in" id="yw39_tab_1">
                 <?php $this->renderPartial('/orderDetails/admin_1', array('model'=>OrderDetails::getAdapterForInbox($model->id))); ?>
  
             </div>
             <div class="tab-pane fade" id="yw39_tab_2">
              <div class="span7">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2><?php echo $model->commentCount>1 ? $model->commentCount . ' comments' : 'One comment'; ?><span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">


	<?php if($model->commentCount>=1)
            : ?>
<!--		<h3>
			<?php //echo $model->commentCount>1 ? $model->commentCount . ' comments' : 'One comment'; ?>
		</h3>-->

		<?php $this->renderPartial('_comments',array(
			'order'=>$model,
			'comments'=>$model->comments,
		)); ?>
	<?php endif; ?>

	<h3>Leave a Comment</h3>

	<?php if(Yii::app()->user->hasFlash('commentSubmitted'))
            
            : ?>
		<div class="flash-success">
			<?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
		</div>
	
                    <?php else: ?>
		<?php $this->renderPartial('/comment/_form',array(
			'model'=>$comment,
		)); ?>
	<?php endif; ?>

  </div>
    </div>
</div>

             </div>
             
            
         </div>
     </div>
               
    
<div id='included_view' >    
  <?php //$this->renderPartial('application.modules.orders.views.orderdetails.admin_1', array('model'=>OrderDetails::model()->findByPk($model->id))); ?>
  
    <?php //$this->renderPartial('/orderDetails/admin_1', array('model'=>OrderDetails::getAdapterForInbox($model->id))); ?>
  
  
  
</div>