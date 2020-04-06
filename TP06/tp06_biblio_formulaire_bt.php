<?php

function form_begin(String $class, String $method, String $action){
    echo "<form class='$class' method='$method' action='$action'><br><br>";
}

function form_text(String $label, String $name, int $size, String $value){
    echo "<label for='$name'>$label</label>
          <input type='text' class='form-control' name='$name' size='$size' value='$value'>
          <br><br>";
}

function form_select(String $label, String $name, String $multiple, Array $values, int $size){
    $options = "";
    foreach ($values as $keys => $value){
        $piece = "<option value='$keys'>$value</option>";
        $options = $options . $piece;
    }
    echo "<div class='form-group'>
            <label for='$name'>$label</label>
            <select class='form-control' name='$name' size='$size'$multiple>
                $options
            </select>
          </div><br><br>";
}

function input_checkbox(String $name, bool $checked, String $label){
    $name = $name . '[]';
    $stringcheck = '';
    if($checked){
        $stringcheck = 'checked';
    }
    echo "<input type='checkbox' name='$name' value='$label' $stringcheck>
          <label for='$name'> $label</label><br><br>";
}

function input_radio(String $name, bool $checked, String $label){
    $name = $name . '[]';
    $stringcheck = '';
    if($checked){
        $stringcheck = 'checked';
    }
    echo "<input type='radio' name='$name' value='$label' $stringcheck>
          <label for='$name'> $label</label><br><br>";
}

function form_input_submit(String $value){
    echo "<input type='submit' value='$value'><br><br>";
}

function form_input_reset(String $value){
    echo "<input type='reset' value='$value'><br><br>";
}

function input_textarea(String $label, String $name, String $value){
    echo "<div class='form-group'>
            <label for='$name'>$label</label>
            <textarea class='form-control' name='$name' >$value</textarea>
          </div>";
}

function form_end(){
    echo "</form>";
}

function input_hidden(String $name, String $value){
    echo "<input type='hidden' name='$name' value='$value'>";
}
