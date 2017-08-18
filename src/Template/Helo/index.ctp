<div>
    <h3>Index Page</h3>
    <p><?= $message ?></p>

    <?=$this->Form->create(null,[
        'type' => 'post',
        'url' =>['Controller' => 'Helo', 'action' => 'index']])
    ?>
    <!--日時の選択,年の最小値はminYearで制御する-->
    <?=$this->Form->date('date',[
        'year'=>['style'=>'width:100px'],
        'minYear' => date('Y') - 40,
        'month'=>['style'=>'width:100px'],
        'day'=>['style'=>'width:100px']
    ])?>
    <hr>
    <!--時間の選択-->
    <?=$this->Form->time('time',[
        'interval'=>'5',
        'hour'=>['style'=>'width:70px']

    ])?>

    <!--選択項目の例-->
    <?=$this->Form->radio('radio',[
        ['value'=>'男','text'=>'male','checked'=>'true'],
        ['value'=>'女','text'=>'female']
    ])?>
    <!--リストから選択式になる-->
    
    <?=$this->Form->select('select',[
        ['value'=>'Mac','text'=>'Mac OS X'],
        ['value'=>'Windows','text'=>'Windows 10'],
        ['value'=>'Linux','text'=>'Linux']
    ])?>
    <!--最初から一覧が全て表示され、複数選択可能になる-->
    <?=$this->Form->select('select2',[
        ['value'=>'Mac','text'=>'Mac OS X'],
        ['value'=>'Windows','text'=>'Windows 10'],
        ['value'=>'Linux','text'=>'Linux']
    ],['multiple'=>true])?>

    <?=$this->Form->password('pw')?>
    <?=$this->Form->hidden('hide',['value'=>'hide message'])?>
    <?=$this->Form->textarea('area')?>
    <?=$this->Form->checkbox('check',['id'=>'check'])?>
    <?=$this->Form->label('check','check!!')?>
    <?=$this->Form->submit('OK')?>
    <?=$this->Form->end()?>
    </form>
<!--
    <form method="post" action="/samplecake/Helo/index">
    <input type="text" name="text1">
    <input type="submit">
    </form>
-->

</div>