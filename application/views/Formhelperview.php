<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<?php

echo form_open('', 'class="form_group" id="myform"');
$data = array(
    'name' => 'username',
    'id' => 'username',

    'maxlength' => '100',

    'class' => 'form_control',
);
echo form_label('What is your Name', 'username');
echo form_input($data);
echo "<br>";
echo form_input('username', 'Gillani');

echo "<br>";

echo form_label('What is your Password', 'password');
$pass = array(
    'name' => 'password',
    'value' => 'password',
    'class' => 'form-control',
);

echo form_password($pass);
echo "<br>";
$upload = array(
    'name' => 'pic',
    'value' => 'image',
    'class' => 'form-control',
);
echo "<label >upload file</label>";
echo form_upload($upload);
echo "<br>";
echo "<label >textarea</label>";
$textarea = array(
    'name' => 'text',
    'value' => '',
    'class' => 'form-control',
);

echo form_textarea('$textarea');

echo "<br>";
$dropdown = array(
    'name' => 'shirts',
    'class' => 'form-control',

);
$options = array(
    'small' => 'Small Shirt',
    'med' => 'Medium Shirt',
    'large' => 'Large Shirt',
    'xlarge' => 'Extra Large Shirt',

);

$shirts_on_sale = array('small', 'large');
echo form_dropdown($dropdown, $options, 'large');
echo "<br>";
$checkbox = array(
    'name' => 'newsletter',
    'id' => 'newsletter',
    'value' => 'accept',
    'checked' => true,
    'style' => 'margin:10px',
);
echo form_checkbox($checkbox);

echo form_radio($checkbox);

$js = 'onClick="some_function()"';
echo form_button('mybutton', 'Click Me', $js);

?>
<script>
function some_function() {
    alert("careful submit at your own risk");
}
</script>