<?php
/*
 * @Author: Dicky Ermawan S., S.T., MTA 
 * @Email: wanasaja@gmail.com 
 * @Web: dickyermawan.github.io 
 * @Linkedin: linkedin.com/in/dickyermawan 
 * @Date: 2021-03-20 21:00:15 
 * @Last Modified by: Dicky Ermawan S., S.T., MTA
 * @Last Modified time: 2021-03-20 21:02:06
 */

use yii\helpers\Url;

?>
<div class="form-group">
    <p> <b>5. Body Discomfort Map</b></p>
    <iframe src="<?= Url::base(true) ?>/body-discomfort/form?id=<?=  $pasien->no_rekam_medik ?>" style="display: block;width: 1200px;height: 720px;border: none;"></iframe>
</div>