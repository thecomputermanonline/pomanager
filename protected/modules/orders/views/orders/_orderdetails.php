<?php foreach($documents as $document): ?>



<div class="aqua-well-new-users">
                    <span class="aqua-avatar">
                        <?php if( $document->document_type = 'excel')
                        {?>
                          <img class="img-rounded img-polaroid" src="<?php echo Yii::app()->baseUrl; ?>/docicons/excel.png" alt="user" height="45" />
                     
                      <?php  }elseif( $document->document_type = 'pdf'){
                        ?>
                        
                          <img class="img-rounded img-polaroid" src="<?php echo Yii::app()->baseUrl; ?>/docicons/pdf.jpg" alt="user" height="45" />
                     
                      <?php  }elseif( $document->document_type = 'word'){
                        ?>
                           
                          <img class="img-rounded img-polaroid" src="<?php echo Yii::app()->baseUrl; ?>/docicons/word.jpg" alt="user" height="45" />
                     
                      <?php  }else{
                        ?>
                        <img class="img-rounded img-polaroid" src="<?php echo Yii::app()->baseUrl; ?>/images/avatar4.jpg" alt="user" height="45" />
                      <?php } ?>
                    </span>
                    <div class="aqua-user">
                        <span class="aqua-user-name"><?php echo $document->document_name; ?></span>
                        <div class="btn-group">
                            <a href="#" class="btn btn-small"><span class="icon-cog"></span></a>
                            <a href="#" class="btn btn-small dropdown-toggle" data-toggle="dropdown"> 
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="<?php echo $this->createUrl('/documents/update'); ?>" tabindex="-1">Update</a></li>
                                <li><a href="<?php echo $this->createUrl('/documents/delete'); ?>" tabindex="-1">Delete</a></li>
<!--                                <li><a href="#" tabindex="-1">Something else</a></li>-->
                                <li class="divider"></li>
                                <li><a href="<?php echo $this->createUrl('/documents/manage'); ?>" tabindex="-1">Manage All</a></li>
                            </ul>
                        </div>
                    </div>

                    <span class="aqua-user-info">
                        <table>
                            <tr><td><strong>Created On</strong></td><td><span class="modernpics icons16">a</span> <?php echo date('M j, Y',$document->date_created); ?> </td></tr>
                            <tr><td><strong>Created By:</strong></td><td><span class="modernpics icons16">f</span> <?php echo $document->createdBy->username; ?> <span class="modernpics icons16">}</span> 9:11:17</td></tr>
                            <tr><td><strong>Updated On:</strong></td><td> <span class="modernpics icons16">}</span> <?php echo date('M j, Y ',$document->date_updated); ?></td></tr>

                        </table>
                    </span>
                    <div class="clear"></div>
                </div>
                
<?php endforeach; ?>