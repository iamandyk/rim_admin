<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">


    <?= $this->Html->css(['foundation.css', 'app.css']) ?>
    <?= $this->Html->script(['vendor.js', 'foundation.js', 'app.js']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

<div data-sticky-container>
  <div data-sticky data-margin-top='0' data-top-anchor="header:bottom" data-btm-anchor="content:bottom">
    <div class="top-bar topbar-sticky-shrink">
      <div class="top-bar-title">
        <a href="/">Home</a>
      </div>
      <div class="top-bar-right">
        <ul class="menu">
          <li><a href="/users">users</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<br />

<div class="grid-x grid-padding-x">
  <div class="cell medium-6 large-4">
  <label>College

  <?php
    $collegeOptions = [];

    foreach($colleges as $college) {
        $collegeOptions[$college->College] = $college->CollegeName;
    }

    echo $this->Form->create(null, ["type" => "get", "class" => "admin-form"]);

    echo $this->Form->select('college', $collegeOptions, ["class" => "college-select"]);

    echo $this->Form->select('years', ["2021" => "FY 2021", "2020" => "FY 2020", "2019" => "FY 2019"]);

    echo $this->Form->end();
  ?>

</div>
  <div class="cell medium-6 large-8">
    <?php 
    foreach($selectedCollege->unit as $unit) {
        foreach($unit->faculty as $f) {
            echo '<div>' . $f->LastName . ', ' . $f->FirstName . '</div>';
        }
    } 
    ?>
  </div>
</div>


</body>
</html>
