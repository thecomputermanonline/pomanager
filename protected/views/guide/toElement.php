<div style="height: 120px; overflow: auto;">
  <?php $this->beginWidget('ext.prettify.JPrettify'); ?>
                 
guiders.createGuider({
    'id':'3',
    'buttons':[
        {
            'name':'Previous',
            'onclick':function(){guiders.prev();}
        },
        {
            'name':'Next',
            'onclick':function(){guiders.next();}
        },
        {
            'name':'Exit',
            'onclick':function(){guiders.hideAll();}
        }
    ],
    'attachTo':'.aqua-slogan', // JQuery css selector of element
    'description':'Example content',
    'overlay':true,
    'position':6, // 1-12 follows an analog clock, 0 means centered.
    'autoFocus':true, // Automatically scroll page to active guide
    'title':'Example title',
    'xButton':true,
    'next':'4' // Next Guide Id
});   

<?php $this->endWidget(); ?>
</div>