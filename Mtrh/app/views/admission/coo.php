
@section('header')
 <title>Kamata Msupa</title>
@stop

@section('content')

{{Form::open(['route'=>'validate.store'])}}
<?php
echo "Sup  Gorgeoirs? Whats your name?" ;

$name = hash::make <input type = "text" name= "name" value= "aki tell me your name?"/>

</br>
echo "bytha una kaa Runda....hahh una park wapi?";

$hometown = hash::make <input type = "text" name="home" value="home " />

</br>
echo "aki can i tell you something? sina contacts zako? zina anza na 07 ?";

$contacts = hash::make <input type = "text" name="contacts" value="contacts" />

</br>

echo "bytha imax wana show The Notebook Leo Usiku.Uta come kwangu tu watch?";

$date = hash::make <input type = "text" name="date" value="date" />


?>