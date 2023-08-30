<h1>Register</h1>

<?php
$form = \SinaR\CustomFramework\core\form\Form::start('post');
?>

<div class="row">
    <div class="col">
        <?php
        echo $form->field($model, 'full_name');
        ?>
    </div>
    <div class="col">
        <?php
        echo $form->field($model, 'email');
        ?>
    </div>
</div>
<?php
echo $form->field($model, 'password')->passwordField();
echo $form->field($model, 'password_confirm')->passwordField();
?>
<button type="submit" class="btn btn-primary">Register</button>
<?php
\SinaR\CustomFramework\core\form\Form::end();
?>