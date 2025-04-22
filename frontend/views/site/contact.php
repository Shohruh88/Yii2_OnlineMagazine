<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
<!--    <h1>--><?php //= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--    <p>-->
<!--        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.-->
<!--    </p>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col-lg-5">-->
<!--            --><?php //$form = ActiveForm::begin(['id' => 'contact-form']); ?>
<!---->
<!--                --><?php //= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
<!---->
<!--                --><?php //= $form->field($model, 'email') ?>
<!---->
<!--                --><?php //= $form->field($model, 'subject') ?>
<!---->
<!--                --><?php //= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
<!---->
<!--                --><?php //= $form->field($model, 'verifyCode')->widget(Captcha::class, [
//                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
//                ]) ?>
<!---->
<!--                <div class="form-group">-->
<!--                    --><?php //= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
<!--                </div>-->
<!---->
<!--            --><?php //ActiveForm::end(); ?>
<!--        </div>-->
<!--    </div>-->

    <div class="container">
        <div style="text-align:center">
            <h2>Contact Us</h2>
            <p>Swing by for a cup of coffee, or leave us a message:</p>
        </div>
        <div class="row">
            <div class="column">
                <img src="/w3images/map.jpg" style="width:100%">
            </div>
            <div class="column">
                <form action="/action_page.php">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                    <label for="country">Country</label>
                    <select id="country" name="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                    </select>
                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>

</div>
